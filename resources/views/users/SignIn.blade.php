@extends('layouts.main')

@section('content')
<section id="signin-form">
 <h1>قبلا ثبت نام کرده ام</h1>
                <form action="{{url('users/signin')}}" method="post">
                	@csrf
                    <p>
                        <img src="{{URL::asset('img/email.gif')}}" alt="Email Address">
                        <input type="email" name="email" placeholder="ایمیل">
                    </p>
                    <p>
                        <img src="{{URL::asset('img/password.gif')}}" alt="Password">
                        <input type="password" name="password" placeholder="*********">
                    </p>

                    <button type="submit" class="secondary-cart-btn">
                        ورود به سامانه
                    </button>
                </form>
            </section><!-- end signin-form -->
            <section id="signup">
                <h2>ثبت نام نکرده ام</h2>
                <h3>شما به راحتی با چند مرحله ساده میتوانید ثبت نام کنید</h3>

                <a href="{{url('users/newaccount')}}" class="default-btn">ثبت نام جدید</a>
                </section><!--- end signup -->
@stop