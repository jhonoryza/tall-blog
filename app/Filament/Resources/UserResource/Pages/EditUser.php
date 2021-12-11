<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getForms(): array
    {
        return [
            'form' => $this->makeForm()
                ->model(static::getModel())
                ->schema([
                    TextInput::make('name')->required(),
                ])
                ->statePath('data'),
        ];
    }
}
