<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KanwilResource\Pages;
use App\Filament\Resources\KanwilResource\RelationManagers;
use App\Models\Kanwil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KanwilResource extends Resource
{
    protected static ?string $model = Kanwil::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    
    protected static ?string $navigationLabel = 'Profil Kanwil';
    
    protected static ?string $pluralLabel = 'Profil Kanwil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Dasar')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi Singkat')
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('history')
                            ->label('Sejarah')
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('Visi & Misi')
                    ->schema([
                        Forms\Components\RichEditor::make('vision')
                            ->label('Visi')
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('mission')
                            ->label('Misi')
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('Kontak & Alamat')
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->label('Telepon/WA')
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('address')
                            ->label('Alamat Lengkap')
                            ->maxLength(255),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKanwils::route('/'),
            'create' => Pages\CreateKanwil::route('/create'),
            'edit' => Pages\EditKanwil::route('/{record}/edit'),
        ];
    }
}
