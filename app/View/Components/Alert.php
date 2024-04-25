<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public string $message
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
<div class="position-fixed top-0 start-0 m-5 z-3 alert alert-{{$type}}" role="alert" {{$attributes}}>
  {{$message}}
</div>
blade;
    }
}
