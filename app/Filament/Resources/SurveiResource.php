<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SurveiResource\Pages;
use App\Filament\Resources\SurveiResource\RelationManagers;
use App\Models\survei;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SurveiResource extends Resource
{
    protected static ?string $model = Survei::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Survei')
                    ->schema([
                        Forms\Components\TextInput::make('SPKP1')
                            ->numeric()
                            ->default(0),
                        Forms\Components\TextInput::make('SPKP2')
                            ->numeric()
                            ->default(0),
                        Forms\Components\TextInput::make('SPAK1')
                            ->numeric()
                            ->default(0),
                        Forms\Components\TextInput::make('SPAK2')
                            ->numeric()
                            ->default(0),


                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               Tables\Columns\TextColumn::make('SPKP1')
                    ->searchable()
                    ->sortable(),
               Tables\Columns\TextColumn::make('SPKP2')
                    ->searchable()
                    ->sortable(),
               Tables\Columns\TextColumn::make('SPAK1')
                    ->searchable()
                    ->sortable(),
               Tables\Columns\TextColumn::make('SPAK2')
                    ->searchable()
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
            'index' => Pages\ListSurveis::route('/'),
            'create' => Pages\CreateSurvei::route('/create'),
            'edit' => Pages\EditSurvei::route('/{record}/edit'),
        ];
    }
}
