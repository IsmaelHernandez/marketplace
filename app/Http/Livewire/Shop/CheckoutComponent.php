<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;

class CheckoutComponent extends Component
{
    public $fullname, $state, $city, $address, $phone;

    public function render()
    {
        return view('livewire.shop.checkout-component');
    }

    public function make_order()
    {
        
    }
}
