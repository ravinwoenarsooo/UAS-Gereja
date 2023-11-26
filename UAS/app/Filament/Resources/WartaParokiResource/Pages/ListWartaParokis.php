<?php

namespace App\Filament\Resources\WartaParokiResource\Pages;

use App\Filament\Resources\WartaParokiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWartaParokis extends ListRecords
{
    protected static string $resource = WartaParokiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
