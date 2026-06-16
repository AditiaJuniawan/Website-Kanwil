<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Set;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static ?string $navigationLabel = 'Postingan Berita';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Asisten AI Penulisan Berita')
                    ->description('Tulis draf berita secara otomatis dengan AI (Gemini) dari URL sumber atau ringkasan materi.')
                    ->schema([
                        Forms\Components\Actions::make([
                            Forms\Components\Actions\Action::make('generate_ai')
                                ->label('Tulis Berita dengan AI')
                                ->icon('heroicon-m-sparkles')
                                ->color('success')
                                ->form([
                                    Forms\Components\TextInput::make('source_url')
                                        ->label('URL Sumber / Berita UPT')
                                        ->url()
                                        ->placeholder('https://...')
                                        ->helperText('Tempelkan URL berita referensi (misal: website UPT) atau kosongkan jika ingin menggunakan ringkasan teks.'),
                                    Forms\Components\Textarea::make('raw_text')
                                        ->label('Poin / Ringkasan Materi')
                                        ->placeholder('Tuliskan poin-poin penting atau rangkuman materi di sini jika tidak menggunakan URL...')
                                        ->rows(4),
                                    Forms\Components\Textarea::make('instruction')
                                        ->label('Instruksi Tambahan AI (Opsional)')
                                        ->placeholder('Misal: Tonjolkan kehadiran Kepala Divisi Pemasyarakatan Banten, sebutkan tanggal kegiatan, dll...')
                                        ->rows(2),
                                ])
                                ->action(function (Set $set, array $data) {
                                    $aiService = app(\App\Services\AiService::class);
                                    try {
                                        $result = $aiService->generateNews(
                                            $data['source_url'] ?? null,
                                            $data['raw_text'] ?? null,
                                            $data['instruction'] ?? null
                                        );
                                        
                                        $set('title', $result['title']);
                                        $set('slug', Str::slug($result['title']));
                                        $set('content', $result['content']);
                                        
                                        \Filament\Notifications\Notification::make()
                                            ->title('Draf Berita Berhasil Dibuat!')
                                            ->body('Judul dan Isi Berita di bawah telah diisi secara otomatis oleh AI. Silakan tinjau kembali sebelum mempublikasikan.')
                                            ->success()
                                            ->send();
                                    } catch (\Exception $e) {
                                        \Filament\Notifications\Notification::make()
                                            ->title('Gagal Menghasilkan Berita')
                                            ->body($e->getMessage())
                                            ->danger()
                                            ->persistent()
                                            ->send();
                                    }
                                })
                        ])
                    ]),

                Forms\Components\Section::make('Konten Berita')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul Berita')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug / URL')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        Forms\Components\RichEditor::make('content')
                            ->label('Isi Berita')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),
                
                Forms\Components\Section::make('Media & Publikasi')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar Utama')
                            ->image()
                            ->directory('news'),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Tanggal Publikasi')
                            ->default(now()),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar'),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Dipublikasi Pada')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
