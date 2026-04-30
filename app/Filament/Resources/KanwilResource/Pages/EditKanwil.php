<?php

namespace App\Filament\Resources\KanwilResource\Pages;

use App\Filament\Resources\KanwilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKanwil extends EditRecord
{
    protected static string $resource = KanwilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
