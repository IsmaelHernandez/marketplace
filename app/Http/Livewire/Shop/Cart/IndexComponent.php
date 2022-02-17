<?php

namespace App\Http\Livewire\Shop\Cart;

use Livewire\Component;
use Darryldecode\Cart\Cart;

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

    public function update_quantity($itemId, $quantity)
    {

        /*Actualizar carrito */
        \Cart::session(auth()->id())->update($itemId,[
            'quantity' => array(
                'relative' => false,
                'value' => $quantity
            ),
        ]);
    }

    public function delete_item($itemId)
    {
        //eliminar
        \Cart::session(auth()->id())->remove($itemId);
        
        //mensaje de eliminacion
    }
}
