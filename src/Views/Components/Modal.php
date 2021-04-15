<?php

namespace JGile\LivewireComponents\Views\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    protected $id;
    public string $maxWidth;

    public function __construct($id = null, $maxWidth = '2xl')
    {
        $this->setMaxWidth($maxWidth);
        $this->id = $id;
    }

    public function setMaxWidth($maxWidth)
    {
        switch ($maxWidth ?? '2xl') {
            case 'sm':
                $this->maxWidth = 'sm:max-w-sm';
                break;
            case 'md':
                $this->maxWidth = 'sm:max-w-md';
                break;
            case 'lg':
                $this->maxWidth = 'sm:max-w-lg';
                break;
            case 'xl':
                $this->maxWidth = 'sm:max-w-xl';
                break;
            case '2xl':
            default:
                $this->maxWidth = 'sm:max-w-2xl';
                break;
        }
    }

    public function render()
    {
        return view("livewire-components::components.modal");
    }
}