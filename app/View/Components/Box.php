<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Box extends Component
{
    /**
     * Create a new component instance.
     */
    public $total, $caption, $icon, $url, $bg;
    public function __construct($total, $caption, $icon, $url, $bg)
    {
        $this->total = $total;
        $this->caption = $caption;
        $this->icon = $icon;
        $this->url = $url;
        $this->bg = $bg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.box', [
            "total" => $this->total,
            "caption" => $this->caption,
            "icon" => $this->icon,
            "url" => $this->url,
            "bg" => $this->bg,
        ]);
    }
}
