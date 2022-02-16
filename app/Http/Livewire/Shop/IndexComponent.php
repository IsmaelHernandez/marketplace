<?php

namespace App\Http\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.shop.index-component', compact('products'));
    }

    public function add_to_cart(Product $product)
    {
        //el userid lo obtenemos del usuario que inicio session
        //agregamos un middlewaree para que no agregue profuctos si no a iniciado session
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        $this->emit('message','El prodcuto se agregado correctamente');
        //escuchamos add_to_cart en card-component
        $this->emitTo('shop.card-component','add_to_cart');
    }
}
