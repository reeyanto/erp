<?php

namespace App\Filament\Resources\Positions\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class PositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Position')
                    ->icon(Heroicon::Briefcase)
                    ->description('Please provide an information of positions')
                    ->schema([
                        TextInput::make('name')
                            ->placeholder('Name')
                            ->required(),
                        Textarea::make('description')
                            ->placeholder('Description')
                            ->rows(3)
                            ->extraInputAttributes(['style' => 'resize:none']),
                        TextInput::make('allowance')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ])
                
            ])->columns(1);
    }
}
