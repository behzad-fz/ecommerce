@extends('layouts.main')

@section('search-keyword')

            <section id="search-keyword">
                <h1>نتایج جستجو <span>"{{$keyword}}"</span></h1>
            </section><!-- end search-keyword -->
@stop

@section('content')
 <div id="search-results">
 					@foreach($results as $result)
                    <div class="product">
                        <a href="/{{$result->id}}"><img src="{{URL::asset($result->image)}}" alt="Product" class="feature"></a>

                        <h3><a href="/{{$result->id}}">{{$result->title}}</a></h3>

                        <p>{{$result->description}}</p>

                        <h5>موجودی: <span class="{{app('App\libs\Availablity')->displayclass($result->availablity)}}">{{app('App\libs\Availablity')->display($result->availablity)}}</span></h5>

                        <p>
                            <a href="/{{$result->id}}" class="cart-btn">
                                <span class="price">تومان {{$result->price}}</span>
                                 <img src="{{URL::asset('img/white-cart.gif')}}" alt="Add to Cart">
                                  افرودن به سبد
                            </a>
                        </p>

                        <p class="wish">
                            <a href="">
                                <img src="{{URL::asset('img/wish.gif')}}" alt="Add to Wishlist">
                                 بعدا میخریم
                            </a>
                        </p>
                    </div>
                    @endforeach
                    
                </div><!-- end search-results -->         		
@stop