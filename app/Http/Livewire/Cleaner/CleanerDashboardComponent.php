<?php

namespace App\Http\Livewire\Cleaner;

use Livewire\Component;

class CleanerDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.cleaner.cleaner-dashboard-component')->layout('layouts.base');
    }
}
