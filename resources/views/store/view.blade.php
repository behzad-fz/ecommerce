@extends('layouts.main')

@section('content')
  <div id="product-image">
                    <img src="{{$product->image}}" alt="Product">
                </div><!-- end product-image -->
                <div id="product-details">
                    <h1>{{$product->title}}</h1>
                    <p>{{$product->description}}</p>

                    <hr />

                    <form action="{{$product->id}}" method="post">
                    	@csrf
                        <label for="qty">تعداد:</label>
                        <input type="text" id="qty" name="qty" value="1" maxlength="2">

                        <button type="submit" class="secondary-cart-btn">
                            <img src="img/white-cart.gif" alt="Add to Cart" />
                             افزودن به کارت
                        </button>
                    </form>
                </div><!-- end product-details -->
                <div id="product-info">
                    <p class="price">{{$product->price}}  تومان</p>
                    <p>موجودی: <span class=""{{app('App\libs\Availablity')->displayclass($product->availablity)}}"">{{app('App\libs\Availablity')->display($product->availablity)}}</span></p>
                    <p>کد محصول: <span>32321</span></p>
                </div><!-- end product-info -->

@stop