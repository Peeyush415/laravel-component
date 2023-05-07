<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $position;
    public $message;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $message, $position)
    {
        $this->type = $type;
        $this->position = $position;
        $this->message = $message;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }

    public function typeClasses($type) {
        return [
            'info'    => 'bg-blue-500 border-blue-700',
            'warning' => 'bg-yellow-500 border-yellow-700',
            'error'   => 'bg-red-500 border-red-700',
            'success' => 'bg-green-500 border-green-700',
        ][$type];
    }

    public function possitionClasses($position) {
        return [
            'bottom-right' => 'bottom-4 right-4',
            'bottom-left'  => 'bottom-4 left-4',
            'top-right'    => 'top-4 right-4',
            'top-left'     => 'top-4 left-4',
        ][$position];
    }
}
