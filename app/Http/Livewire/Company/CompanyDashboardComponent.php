<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;

class CompanyDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.company.company-dashboard-component')->layout('layouts.base');
    }
}
