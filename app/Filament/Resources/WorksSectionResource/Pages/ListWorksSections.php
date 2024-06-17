<?php

namespace App\Filament\Resources\WorksSectionResource\Pages;

use App\Filament\Resources\WorksSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorksSection extends ListRecords
{
    protected static string $resource = WorksSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
