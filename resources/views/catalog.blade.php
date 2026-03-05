@extends('layouts.app')
@section('content')

<div class="catalog_cont">
   <div class="gradient_two">
    <div class="soundtrack">
        <div class="pop_container">
        
            @foreach($items as $item)
                <div class="pop_card">
                    <a href="{{ url('/product/' . $item->id) }}">
                    <img src="{{ asset($item->img) }}" class="pop_img">
                    <h4>{{ $item->name }}</h4>
                    <p class="name">{{ $item->author }}</p>
                    <h3>{{ $item->price }}</h3>
                    </a>
                    <form method="POST" action="{{ route('cart.add', $item->id) }}">
                    @csrf
                    <button class="cart" type="submit">В корзину</button>
                    </form>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection