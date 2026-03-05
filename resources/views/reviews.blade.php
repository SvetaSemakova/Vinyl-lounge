@extends('layouts.app')
@section('content')


<div class="concon">
    <h1>Отзывы</h1>
<div class="review">
@foreach($reviews as $revieww)
<div class="review_text">
    <h3>{{ $revieww->name }}</h3>
        <div class="stars">
        {{ str_repeat('⭐', (int)$revieww->stars) }}
    </div>
    <p>{{ $revieww->text }}</p>
</div>
@endforeach
</div>



<h3 class="about_h2">Оставьте свой отзыв</h3>
<form class="form_contact" id="review-form" method="POST" action="{{ route('reviews.submit') }}">
    @csrf
    <label for="name">Имя пользователя:</label>
    <input type="text" id="name" name="name" placeholder="Введите ваше имя" required />

    <label for="stars">Количество звезд:</label>
    <select id="stars" name="stars" required>
        <option value="1">1 ⭐</option>
        <option value="2">2 ⭐⭐</option>
        <option value="3">3 ⭐⭐⭐</option>
        <option value="4">4 ⭐⭐⭐⭐</option>
        <option value="5">5 ⭐⭐⭐⭐⭐</option>
    </select>

    <label for="review">Ваш отзыв:</label>
    <textarea id="review" name="text" placeholder="Ваш отзыв" required></textarea>

    <div class="btn">
        <button type="submit" class="review_btn">Оставить отзыв</button>
    </div>
</form>
    @if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</section>

</div>
@endsection