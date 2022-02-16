<div>
    <a href="{{route('cart')}}" class="btn btn-primary">
        <i class="fas fa-cart-arrow-down fa-sm fa-fw mr-2 text-gray-400"></i>
        Carrito
        {{\Cart::session(auth()->id())->getContent()->count()}}
    </a>
    
</div>
