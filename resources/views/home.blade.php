@extends('layouts.app')
@section('content')

    <div class="banner_img"><img class="banner" src="img/banner.png">
        <button class="banner_button"> <a href="{{url('/catalog')}}">Перейти в каталог</a></button>
    </div>


    <div class="gradient-container">
    <div class="popular">
        <h2>ПОПУЛЯРНОЕ</h2>
        <div class="pop_container">
    @foreach($products as $product)
    <div class="pop_card">
        <a href="{{ url('/product/' . $product->id) }}">
        <img src="{{ asset($product->img) }}" class="pop_img">
        <h4><b>{{ $product->name }}</b></h4>
        <p class="name">{{ $product->author }}</p>
        <h3>{{ $product->price }} Р</h3>
        </a>
        <form method="POST" action="{{ route('cart.add', $product->id) }}">
          @csrf
          <button class="cart" type="submit">В корзину</button>
        </form>
    </div>
    @endforeach
</div>
    </div>


<div class="authors">
    <h2>ТОП АВТОРОВ</h2>
    <div class="circcont">
        @foreach($author as $aut)
        <div class="circle">
                <img src="{{ asset($aut->img) }}" width="200px">
                <div class="border"></div>
                <p class="author_name">{{ $aut->name }}</p>
        </div>
        @endforeach
    </div>
    </div>
</div>


<div class="gradient_two">
    <div class="soundtrack">
        <h2>Саундтреки к фильмам и сериалам</h2>
        <div class="pop_container">
        @foreach($soundtrack as $sound)
            <div class="pop_card">
                <a href="{{ url('/product/' . $sound->id ) }}">
                <img src="{{ asset($sound->img) }}" class="pop_img">
                <h4 class="ssound"><b>{{ $sound->name }}</b></h4>
                <h3>{{ $sound->price }} P</h3>
                </a>
                <form method="POST" action="{{ route('cart.add', $sound->id) }}">
                @csrf
                <button class="cart" type="submit">В корзину</button>
                </form>
            </div>
        @endforeach
        </div>
    </div>



    <div class="soundtrack">
        <h2>Саундтреки к аниме</h2>
        <div class="pop_container">
        @foreach($anime as $ani)
            <div class="pop_card">
                <a href="{{ url('/product/' . $ani->id) }}">
                <img src="{{ asset($ani->img) }}" class="pop_img">
                <h4><b>{{ $ani->name }}</b></h4>
                <h3>{{ $ani->price }} P</h3>
                </a>
                <form method="POST" action="{{ route('cart.add', $ani->id) }}">
                @csrf
                <button class="cart" type="submit">В корзину</button>
                </form>
            </div>
        @endforeach
        </div> 
    </div>
</div>

<div class="maincontact">
    <h1>СВЯЗАТЬСЯ С НАМИ</h1>
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
        <div class="name_info">
            <input type="text" placeholder="Введите ваш Email">
            <input type="text" placeholder="Введите ваше имя">
        </div>
            <textarea placeholder="Введите ваш вопрос"></textarea>
        <div class="btn">
            <button class="quest_btn">Отправить</button>
        </div>
    </div>
</div>
</div>

<h1>ОТЗЫВЫ</h1>
<div class="review">
@foreach($reviews as $review)
<div class="review_text">
    <h3>{{ $review->name }}</h3>
    <div class="stars">
        {{ str_repeat('⭐', (int)$review->stars) }}
    </div>
    <p>{{ $review->text }}</p>
</div>
@endforeach


</div>
<div class="btn">
<a href="{{ route('reviews') }}"><button class="review_btn">Оставить отзыв</button></a>
</div>


<hr><hr class="hr1">


<div class="deviz">
    <img class="star" src="img/Star.png">
    <h2>Пусть каждая пластинка расскажет свою историю — присоединяйся к музыке!</h2>
    <img class="star" src="img/Star.png">
</div>
@endsection