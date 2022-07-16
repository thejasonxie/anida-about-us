<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Box extends Component
{
    /**
     * The image source of Banner.
     *
     * @var string
     */
    public $imgSrc;

    /**
     * The title of Banner.
     *
     * @var string
     */
    public $title;

    /**
     * The message of Banner.
     *
     * @var string
     */
    public $message;


    /**
     * Create a new component instance.
     *
     * @param string $imgSrc
     * @param string $title
     * @param string $message
     * @return void
     */
    public function __construct($imgSrc, $title, $message)
    {
        $this->imgSrc = $imgSrc;
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.box');
    }
}
