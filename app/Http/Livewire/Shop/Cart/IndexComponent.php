<?php

namespace App\Http\Livewire\Shop\Cart;

use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        //enviar todo el contenido de carrito de compra
        $cart_items = \Cart::session(auth()->id())->getContent();
        return view('livewire.shop.cart.index-component', compact('cart_items'))
        ->extends('layouts.template')
        ->section('content');
    }
}
