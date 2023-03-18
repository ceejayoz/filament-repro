<?php

namespace App\Filament\Resources\SampleResource\Pages;

use App\Filament\Resources\SampleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSamples extends ManageRecords
{
    protected static string $resource = SampleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
