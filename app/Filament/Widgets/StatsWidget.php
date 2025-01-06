<?php

namespace App\Filament\Widgets;

use App\Models\BookService;
use App\Models\RegisterActivity;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Users', User::count())
                ->description('Total number of users')
                ->descriptionIcon('heroicon-o-users', IconPosition::Before)
                ->url('admin/users')
                ->chart([1,3,5,10,20,40])
                ->color('success'),
            Stat::make('Service booking', BookService::count())
                ->description('Total number of services booking')
                ->descriptionIcon('heroicon-o-document', IconPosition::Before)
                ->url('admin/services')
                ->chart([1,3,5,10,20,40])
                ->color('success'),
            Stat::make('Activity registrations', RegisterActivity::count())
                ->description('Total number of activity registrations')
                ->descriptionIcon('heroicon-o-book-open', IconPosition::Before)
                ->url('admin/activities')
                ->chart([1,3,5,10,20,40])
                ->color('success'),
        ];
    }
}
