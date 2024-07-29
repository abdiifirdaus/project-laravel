<?php

namespace App\Filament\Resources\EducationResource\Pages;

use App\Models\education;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\EducationResource;

class EditEducation extends EditRecord
{
    protected static string $resource = EducationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (education $record) {
                    if($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }

                }
            ),
        ];
    }
}
