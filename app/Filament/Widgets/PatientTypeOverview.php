<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Patient;

class PatientTypeOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Cats', Patient::query()->where('type','cat')->count() ),
            Card::make('Dogs', Patient::query()->where('type','dog')->count() ),
            Card::make('Hamster', Patient::query()->where('type','hamster')->count() ),
        ];
    }
}
