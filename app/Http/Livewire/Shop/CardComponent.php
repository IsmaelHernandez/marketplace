<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;

class CardComponent extends Component
{
    public $cart;

    protected $listener = ['add_to_cart'];

    public function add_to_cart(){
        
    }

    public function render()
    {
        return view('livewire.shop.card-component');
    }
}
