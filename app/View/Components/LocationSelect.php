<?php

namespace App\View\Components;

use App\Models\Location;
use Illuminate\View\Component;

class LocationSelect extends Component
{
    public $locations;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->locations = Location::all('id', 'name')->sortBy('name');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.location-select');
    }
}
