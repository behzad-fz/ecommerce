@extends('layouts.main')
@section('promo')

    <section id="promo">
        <div id="promo-details">
            <h1>فروش ویژه</h1>
            <p>محصولات بسیار عالی ما<br />
                با تخفیفات ویژه در خدمت شماست دارم الکی متن رو کش میدم.</p>
            <a href="#" class="default-btn">خرید آسان</a>
        </div><!-- end promo-details -->
        <img src={{"img/promo.png"}} alt="Promotional Ad">
    </section><!-- promo -->

    @stop

@section('content')

    <h2>بهترینها</h2>
    <hr>
    <div id="products">
        @foreach($products as $product)
        <div class="product">
            <a href="#"><img src="{{$product->image}}" alt="Product" class="feature"></a>

            <h3><a href="{{$product->id}}">{{$product->title}} <a></h3>

            <p > {{$product->description}}</p>
            <h5>موجودی: <span class="{{app('App\libs\Availablity')->displayclass($product->availablity)}}">
                {{app('App\libs\Availablity')->display($product->availablity)}}
            </span></h5>

            <p >
                <a href="#" class="cart-btn">
                    <span class="price">{{$product->price}} تومان </span>
                    <img src="img/white-cart.gif" alt="Add to Cart">
                    افزویدن به سبد خرید
                </a>
            </p>
        </div>
       
        @endforeach
    </div><!-- end products -->

    @stop
