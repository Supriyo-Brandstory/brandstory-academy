<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OurSuccessStories extends Component
{
    public $videos;

    public function __construct($videos = [])
    {
        $this->videos = $videos;
    }

    public function render()
    {
        return view('components.our-success-stories');
    }
}
