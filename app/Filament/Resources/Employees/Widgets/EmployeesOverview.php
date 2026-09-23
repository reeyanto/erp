<?php

namespace App\Filament\Resources\Employees\Widgets;

use App\Models\Employee;
use Filament\Support\Enums\IconPosition;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Override;

class EmployeesOverview extends StatsOverviewWidget
{

    #[Override]
    protected function getColumns(): int|array|null
    {
        return 5;
    }


    protected function getStats(): array
    {
        return [
            Stat::make('', Employee::count())
                ->description('All Employees')
                ->descriptionIcon(Heroicon::Users, IconPosition::Before),
            Stat::make('', Employee::where('status', 'active')->count())
                ->description('Active Employees')
                ->descriptionIcon(Heroicon::UserGroup, IconPosition::Before)
                ->descriptionColor('success'),
            Stat::make('', Employee::where('status', 'inactive')->count())
                ->description('Inactive Employees')
                ->descriptionIcon(Heroicon::UserMinus, IconPosition::Before)
                ->descriptionColor('danger'),
            Stat::make('', Employee::where('status', 'trainee')->count())
                ->description('Trainee')
                ->descriptionIcon(Heroicon::UserCircle, IconPosition::Before)
                ->descriptionColor('primary'),
            Stat::make('', Employee::where('status', 'applicant')->count())
                ->description('Applicant')
                ->descriptionIcon(Heroicon::User, IconPosition::Before)
                ->descriptionColor('warning'),
        ];
    }
}
