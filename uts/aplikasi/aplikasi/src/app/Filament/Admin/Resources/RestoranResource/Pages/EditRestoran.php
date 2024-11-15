<?php

namespace App\Filament\Admin\Resources\RestoranResource\Pages;

use App\Filament\Admin\Resources\RestoranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRestoran extends EditRecord
{
    protected static string $resource = RestoranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
