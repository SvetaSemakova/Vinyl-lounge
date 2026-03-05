@extends('layouts.app')
@section('content')

<div class="back">
<section class="registration">

  <form class="form_contact_ac" id="registration-form" action="{{ route('register') }}" method="POST">
    @csrf
    <h2 class="about_h2">Регистрация</h2>
    <label for="fullname">Введите ФИО:</label>
    <input type="text" placeholder="ФИО" name="fio" value="{{ old('fio') }}" required>
     @error('fio')<div class="error">{{ $message }}</div>@enderror

    <label for="email">Почта:</label>
    <input type="email" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
    @error('email')<div class="error">{{ $message }}</div>@enderror
    
    <label for="password">Придумайте пароль:</label>
    <input type="password" placeholder="Пароль" name="password" required>
    @error('password')<div class="error">{{ $message }}</div>@enderror

    <div class="auto-a">
        <center> <a href="{{ route('authorization') }}">Уже есть аккаунт? Войти</a> </center>
    </div>
    <div class="btn">
      <button type="submit" class="review_btn"> Зарегистрироваться</button>
    </div>
  </form>
</section>
</div>
@endsection