<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Paginacion extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public int $numPage=10,public string $url="http://localhost/xxx", public int $curPage=1)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.paginacion',['numPage'=>$this->numPage,'url'=>$this->url,'curPage'=>$this->curPage]);
    }
}
