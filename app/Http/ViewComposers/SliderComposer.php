<?php


namespace App\Http\ViewComposers;


use App\Slider;
use Illuminate\View\View;

class SliderComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $sliders = Slider::all();
        $view->with('sliders', $sliders);
    }
}
