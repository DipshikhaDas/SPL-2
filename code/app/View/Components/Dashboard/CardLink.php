<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardLink extends Component
{

    public $route;
    public $logo;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct($route, $logo, $text)
    {
        $this->route = $route;
        $this->logo = $logo;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.card-link');
    }
}
