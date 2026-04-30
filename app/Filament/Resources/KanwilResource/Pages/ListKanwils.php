<?php

namespace App\Filament\Resources\KanwilResource\Pages;

use App\Filament\Resources\KanwilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKanwils extends ListRecords
{
    protected static string $resource = KanwilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
