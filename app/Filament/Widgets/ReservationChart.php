<?php

namespace App\Filament\Widgets;

use App\Models\RegisterActivity;
use App\Models\Reservation;
use Filament\Widgets\ChartWidget;

class ReservationChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static string $color = 'info';

    protected function getData(): array
    {
        // $reservationsParMois = Reservation::selectRaw('MONTH(start_datetime) as month, COUNT(*) as total')
        //     ->whereYear('start_datetime', now()->year)
        //     ->groupBy('month')
        //     ->orderBy('month')
        //     ->pluck('total', 'month');  // Get associative array with month as key

        // // Init array with number of reservation per month
        // $moisAvecReservations = collect(range(1, 12))->mapWithKeys(function ($month) use ($reservationsParMois) {
        //     return [$month => $reservationsParMois->get($month, 0)];
        // });

        // // Get only values per month
        // $numberReservationPerMonth = $moisAvecReservations->values()->toArray();


        return [
            'datasets' => [
                [
                    'label' => 'Reservations rooms',
                    'data'  => [0,1,20,15,45],
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
