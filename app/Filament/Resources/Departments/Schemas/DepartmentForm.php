<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Department Information')
                    ->icon(Heroicon::BuildingLibrary)
                    ->description('Please provide information of every department')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('name')
                            ->placeholder('Name')
                            ->required(),
                        Textarea::make('description')
                            ->placeholder('Description')
                            ->rows(6)
                            ->extraInputAttributes(['style' => 'resize:none']),
                    ]),

                Section::make('Additional Information')
                    ->description('Contact Detail')
                    ->schema([
                        Textarea::make('address')
                            ->placeholder('Address')
                            ->rows(3)
                            ->extraInputAttributes(['style' => 'resize:none']),
                        TextInput::make('email')
                            ->placeholder('Email address')
                            ->label('Email address')
                            ->email(),
                        TextInput::make('phone_number')
                            ->placeholder('Phone Number')
                            ->tel(),
                    ])
            ])->columns(3);
    }
}
