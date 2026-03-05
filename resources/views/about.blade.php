@extends('layouts.app')
@section('content')

<div class="content">
    <div class="about_h2">
        <h1>О Vinyl Lounge</h1>
    </div>
@foreach($about as $us)
    <div class="us">
            <div class="us_img">
                <img src="img/billie_eilish__happier_than_ever_2_lp7.jpg">
            </div>
            <div class="us_text"><p>{{ $us->text }}</p>
            </div>
            
    </div>
@endforeach

@foreach($about as $usus)
    <div class="us_two">
        
            <div class="us_text_two">
                <h2>Почему выбирают нас</h2>
                <p>{{ $usus->texttwo }}</p>
            </div>
            <div class="us_img_two">
                <img src="img/mitski-puberty2_768x768.webp">
            </div>
    </div>
@endforeach

</div>
<div class="gradient_three">
@foreach($about as $ususus)
    <div class="come">
        <h2>Виниловые пластинки — это музыка в чистом виде!</h2>
        <p>{{ $ususus->textthree }}</p>
    </div>
@endforeach
    <div class="content">
        <div class="imgs_cont">
            <img src="img/i.webp">
            <img src="img/blue2.jpg">
        </div>
    </div>
</div>

<div class="payment_methods">
    <h2>Способы оплаты</h2>
    <b><p>Картой онлайн</b> — безопасный и удобный способ оплаты через банковские карты и системы платежей.</p>
    <b><p>СБП</b> — оплата через системы быстрых платежей, максимально быстро и просто.</p>
    <b><p>Наличные</b> — наличными при получении заказа или в магазине.</p>
</div>

<div class="delivery_options">
    <h2>Варианты доставки</h2>
    <b><p>Самовывоз</b> — забрать заказ самостоятельно в нашем магазине по адресу: г. Барнаул, Ленина ул., д. 8 кв.88.</p>
    <b><p>Доставка в Почту России</b> — отправляем заказы по всей России, доставка осуществляется в кратчайшие сроки.</p>
    <b><p>Доставка через СДЭК</b> — быстрая доставка по России с возможностью отслеживания посылки.</p>
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
@endsection
