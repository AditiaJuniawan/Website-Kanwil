<?php

namespace App\Filament\Resources\UptProfileResource\Pages;

use App\Filament\Resources\UptProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUptProfile extends EditRecord
{
    protected static string $resource = UptProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
