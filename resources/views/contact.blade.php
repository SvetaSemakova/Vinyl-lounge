@extends('layouts.app')
@section('content')

<div class="concon">
    <h1>Контакты</h1>
    <div class="cent">
    <div class="maincontact">
    <div class="cont_info">
    @foreach($contacts as $contact)
        <div class="contact">
            <p>Email <br>
            <b>{{ $contact->email }}</b></p>

            <p>Phone<br>
            <b>{{ $contact->phone }}</b></p>

            <p>Address<br>
            <b>{{ $contact->address }}</b></p>
        </div>
    @endforeach

        
    <div class="form_contact">
        <form action="{{ route('contact.submit') }}" method="POST">
    @csrf
        <div class="name_info">
            <input type="text" name="email" placeholder="Введите ваш Email" required>
            <input type="text" name="name" placeholder="Введите ваше имя" required>
        </div>
        <textarea name="text" placeholder="Введите ваш вопрос" required></textarea>
        <div class="btn">
            <button type="submit" class="quest_btn">Отправить</button>
        </div>
    </div>
    @if(session('success'))
</form>

    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    </div>
    </div>
</div>
</div>
@endsection