<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{

    public $name;
    public $username;
    public $text;
    public $time;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $username, $text, $time)
    {
        $this->name = $name;
        $this->username = $username;
        $this->text = $text;
        $this->time = $time;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post');
    }
}
