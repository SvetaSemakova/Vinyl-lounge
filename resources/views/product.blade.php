@extends('layouts.app')
@section('content')

<div class="container">
    <div class="title_prod">
        <h3>{{ $album->author }}</h3>
        <h1>{{ $album->name }}</h1>
    </div>
    <div class="product">
        <div class="images-container">
            <div class="vinyl-background">
            <img src="{{ asset('img/icons/vinyl.png') }}" alt="Виниловая пластинка" />
            </div>
            <div class="album-cover">
            <img src="{{ asset($album->img) }}" alt="Обложка альбома" />
            </div>
        </div>
@foreach($genres as $genre)
        <div class="product-info">
        <h2>Информация о товаре</h2>
        <p><strong>Автор:</strong> {{ $album->author }}</p>
        <p><strong>Год выпуска:</strong> {{ $genre->year }}</p>
        <p><strong>Страна выпуска:</strong> {{ $genre->country }}</p>
        <p><strong>Жанр:</strong> {{ $genre->genre }}</p>
        @endforeach
        <form method="POST" action="{{ route('cart.add', $album->id) }}">
            @csrf
            <button class="add-to-cart" type="submit">Добавить в корзину</button>
        </form>
        </div>

    </div>
</div>

<section class="tracklist">
    <div class="track_cont">
        <div class="list_tracks">
            <h2>Список песен</h2>
            @foreach($songs as $song)
            <div class="track"><p>{{ $song->song }}</p></div>
            @endforeach
        </div>
    </div>
</section>

<h1>{{ $album->author }}</h1>
  <section class="author_block">
    <div class="author-img">
    @foreach($authors as $auth)
      <img src="{{ asset($auth->img) }}"/>
    </div>
    <div class="author-info"> 
        <div class="author-description">
            <p>{{ $auth->discription }}</p>
    @endforeach
        </div>
    </div>
  </section>
</div>

<div class="other">
<h1>Вам может быть интересно</h1>


        <div class="pop_container">
        @foreach($other as $oth)
            <div class="pop_card">
                <a href="{{ url('/product/' . $oth->id ) }}">
                <img src="{{ asset($oth->img) }}" class="pop_img">
                <h3>{{ $oth->name }}</h3>
                </a>
            </div>
        @endforeach
        </div>
</div>

@endsection