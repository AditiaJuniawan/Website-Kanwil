<?php

namespace App\Filament\Resources\UptProfileResource\Pages;

use App\Filament\Resources\UptProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUptProfiles extends ListRecords
{
    protected static string $resource = UptProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
