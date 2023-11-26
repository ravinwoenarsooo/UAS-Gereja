<?php

namespace App\Filament\Resources\WartaParokiResource\Pages;

use App\Filament\Resources\WartaParokiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWartaParoki extends EditRecord
{
    protected static string $resource = WartaParokiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
