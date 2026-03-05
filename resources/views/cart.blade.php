@extends('layouts.app')
@section('content')

<form action="{{ route('logout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="logout">Выйти</button>
</form>
<div class="back">
  
<div class="cart-container">
  <h2 class="cart-title">Моя корзина</h2>
  <div class="cart-items">
    @php $total = 0; @endphp
    @foreach($cart as $item)
    @php
      $total += $item['cost'] * $item['quantity'];
    @endphp
    <div class="cart-item">
      <div class="item-info">
        <img src="{{ asset($item['img']) }}" class="item-image" />
        <div class="item-details">
          <p class="item-name">{{ $item['name'] }}</p>
          <p class="item-price">{{ $item['cost'] }} ₽</p>
          <p class="item-quantity">Количество: {{ $item['quantity'] }}</p>
        </div>
      </div>
      <form method="POST" action="{{ route('cart.remove', $item['product_id']) }}">
        @csrf
        <button class="remove-btn" type="submit">Удалить</button>
      </form>
    </div>
    @endforeach
  </div>
  <div class="cart-summary">
    <p class="total-label">ИТОГ:</p>
    <p class="total-price">{{ $total }} ₽</p>
  </div>
  <button class="checkout-btn">Оформить заказ</button>
</div>
</div>
@endsection