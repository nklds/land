<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextElement extends Component
{
    public string $tagName;
    public string $fragmentName;
    public string $bemClass;
    public string $title;
    public string $dataAttributes;
    public string $extra;
    public string $visibleText;
    public string $classList;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $visibleText='',
        $tagName = 'span',
        $fragmentName = '',
        $bemClass = '',
        $title = '',
        $dataAttributes = '',
        $extra = '',
        $classList=''
    )
    {
        $this->tagName = $tagName;
        $this->fragmentName = $fragmentName;
        $this->bemClass = $bemClass;
        $this->title = $title;
        $this->dataAttributes = $dataAttributes;
        $this->extra = $extra;
        $this->visibleText = $visibleText;
        $this->classList = $classList;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.text-element');
    }
}
