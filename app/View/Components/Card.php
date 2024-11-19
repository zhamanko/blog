<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $avtor;
    public $img;
    public $date;
    public $likes;
    
    public function __construct($title = null, $avtor = null, $img = null, $date = null, $likes = null)
    {
        $this->title = $title;
        $this->avtor = $avtor;
        $this->img = $img; 
        $this->date = $date;      
        $this->likes = $likes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
