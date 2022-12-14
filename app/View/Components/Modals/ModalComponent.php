<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;

class ModalComponent extends Component
{
    public $id,$title,$content;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.modal-component');
    }
}
