<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getForms(): array
    {
        return [
            'form' => $this->makeForm()
                ->model(static::getModel())
                ->schema([
                    Card::make()->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('email')->required()->email()->unique(),
                        TextInput::make('password')->required()->password()->same('passwordConfirmation'),
                        TextInput::make('passwordConfirmation')->required()->password()
                    ])
                ])
                ->statePath('data'),
        ];
    }
}
