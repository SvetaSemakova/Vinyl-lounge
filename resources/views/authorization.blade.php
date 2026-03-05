@extends('layouts.app')
@section('content')

<div class="back">
<section class="registration">

<form class="form_contact_ac" action="{{ route('login') }}" method="POST">
    @csrf
    <h2 class="about_h2">Вход</h2>
    <label for="email">Почта:</label>
    <input type="email" id="email" name="email" placeholder="Введите вашу почту" required />

    <label for="password">Введите пароль:</label>
    <input type="password" id="password" name="password" placeholder="Ваш пароль" required />

    <div class="auto-a">
        <center><a href="{{ route('register') }}">Еще нет аккаунта? Зарегистрироваться</a></center>
    </div>

    <div class="btn">
        <button type="submit" class="review_btn">Войти</button>
    </div>

    
</form>
</section>
</div>
@endsection