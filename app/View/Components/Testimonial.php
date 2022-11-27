<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Testimonial extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $testimonialName, $testimonialText, $testimonialTitle, $testimonialImg, $class;


    public function __construct($testimonialTitle, $testimonialText, $testimonialName, $testimonialImg, $class='')
    {
      $this->testimonialTitle = $testimonialTitle;
      $this->testimonialText = $testimonialText;
      $this->testimonialName = $testimonialName;
      $this->testimonialImg = $testimonialImg;
      $this->class = $class;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial');
    }
}
