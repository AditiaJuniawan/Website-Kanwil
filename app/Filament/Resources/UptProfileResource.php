<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UptProfileResource\Pages;
use App\Models\UptProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use App\Services\SultanBantenService;

class UptProfileResource extends Resource
{
    protected static ?string $model = UptProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Profil UPT';
    protected static ?string $modelLabel = 'Profil UPT';
    protected static ?string $pluralModelLabel = 'Profil UPT';
    protected static ?string $navigationGroup = 'Manajemen UPT';

    public static function form(Form $form): Form
    {
        // Get UPT Options from Sultan Database
        $sultanService = app(SultanBantenService::class);
        $uptData = $sultanService->getFullUptData();
        
        $uptOptions = [];
        if ($uptData) {
            foreach ($uptData as $upt) {
                $uptOptions[$upt['id']] = $upt['nama_upt'];
            }
        }

        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Select::make('upt_id')
                            ->label('Unit Pelaksana Teknis')
                            ->options($uptOptions)
                            ->searchable()
                            ->required()
                            ->unique(ignoreRecord: true),
                        
                        Forms\Components\TextInput::make('jenis_upt')
                            ->label('Jenis UPT')
                            ->placeholder('Contoh: Lembaga Pemasyarakatan')
                            ->maxLength(255),
                            
                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto UPT')
                            ->image()
                            ->directory('upt-profiles')
                            ->maxSize(2048),
                            
                        Forms\Components\Textarea::make('informasi_singkat')
                            ->label('Informasi Singkat')
                            ->rows(4)
                            ->maxLength(65535),
                            
                        Forms\Components\TextInput::make('website_url')
                            ->label('Website Resmi UPT')
                            ->placeholder('https://...')
                            ->url()
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto')
                    ->circular(),
                Tables\Columns\TextColumn::make('upt_id')
                    ->label('ID UPT')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_upt')
                    ->label('Jenis UPT')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website_url')
                    ->label('Website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diubah Pada')
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
            'index' => Pages\ListUptProfiles::route('/'),
            'create' => Pages\CreateUptProfile::route('/create'),
            'edit' => Pages\EditUptProfile::route('/{record}/edit'),
        ];
    }
}
