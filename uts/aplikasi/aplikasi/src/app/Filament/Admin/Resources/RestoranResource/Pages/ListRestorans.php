<?php

namespace App\Filament\Admin\Resources\RestoranResource\Pages;

use App\Filament\Admin\Resources\RestoranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRestorans extends ListRecords
{
    protected static string $resource = RestoranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
