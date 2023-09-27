<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tarjeta extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $titulo="(sin titulo)")
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tarjeta',['titulo'=>$this->titulo]);
    }
}
