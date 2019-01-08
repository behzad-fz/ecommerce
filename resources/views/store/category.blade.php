@extends('layouts.main')

@section('promo')
<section id="promo-alt">
                <div id="promo1">
                    <h1>مک بوک جدید آمد ...</h1>
                    <p>با قیمت فوق العاده <span class="bold"> همین امروز!</span></p>
                    <a href="#" class="secondary-btn">بیشتر</a>
                    <img src="{{URL::asset('img/macbook.png')}}" alt="MacBook Pro">
                </div><!-- end promo1 -->
                <div id="promo2">
                    <h2>iPhone 5 <br>در فروشگاه موجود است!</h2>
                    <a href="">بیشتر <img src="img/right-arrow.gif" alt="Read more"></a>
                    <img src="{{URL::asset('img/iphone.png')}}" alt="iPhone">
                </div><!-- end promo2 -->
                <div id="promo3">
                    <img src="{{URL::asset('img/thunderbolt.png')}}" alt="Thunderbolt">
                    <h2>27"<br>نمایشگر Thunderbolt.<br>سادگی و زیبایی.</h2>
                    <a href="#">بیشتر <img src="{{URL::asset('img/right-arrow.gif')}}" alt="Read more" /></a>
                </div><!-- end promo3 -->
            </section><!-- promo-alt -->

@stop

@section('content')
<h2>{{$category[0]->name}}</h2>
                <hr>

                <aside id="categories-menu">
                    <h3>گروه ها</h3>
                    <ul>
                         @foreach($catnav as $cat)
                <a href="{{$cat->id}}">
                    <li>{{$cat->name}} </li>
                </a>
                @endforeach
                    </ul>
                </aside><!-- end categories-menu -->

                <div id="listings">
                
                      @foreach($products as $product)
        <div class="product">
            <a href="#"><img src="{{URL::asset($product->image)}}" alt="Product" class="feature"></a>

            <h3><a href="{{url('/',$product->id)}}">{{$product->title}} <a></h3>

            <p > {{$product->description}}</p>
            <h5>موجودی: <span class="{{app('App\libs\Availablity')->displayclass($product->availablity)}}">
                {{app('App\libs\Availablity')->display($product->availablity)}}
            </span></h5>

            <p >
                <a href="#" class="cart-btn">
                    <span class="price">{{$product->price}} تومان </span>
                    <img src="{{URL::asset('img/white-cart.gif')}}" alt="Add to Cart">
                    افزویدن به سبد خرید
                </a>
            </p>
        </div>
       
        @endforeach
                                     
                </div><!-- end listings -->

<div id="pagination" ">
					 @foreach ($products as $product)
        		{{ $product->name }}
    			 @endforeach
  		 
    			 {{ $products->links() }}
    
             	   </div> 
             
              
@stop
