@extends('layouts.main')

@section('content')
  <div id="contact-us">
                    <h1>تماس با ما</h1>

                    <hr />

                    <p>آدرس:</p>

                    <p>
                        <span>فروشگاه</span><br />
                        یک کشور خوب<br />
                        شهری بهتر<br />
                        اینجا به شماره 90014
                    </p>

                    <p>برای پشتیبانی خدمات بهمان زنگ بزنید: <span>1-800-8888</span></p>

                    <p>یا اگر هزینه دارد ایمیل بزنید <a href="mailto:support@shop.com">ایمیل ما</a>.</p>
                    <p>
                    		<form action="{{url('store/contact')}}" method="post">
                    			@csrf
                    			<p>
                    				<label>ایمیل</label> <br>
                    				<input type="text" name="email">
                    			</p>
                    			<p>
                    				<label>پیام</label> <br>
                    				<textarea name="body" style="height: 80px;"></textarea>
                    			</p>
                    			<input type="submit" value="ارسال" class="secondary-cart-btn">
                    		</form>

                    </p>

                    <hr />

                    <p class="note">* برای کسب اطلاعات بیشتر همواره به 118 میتوانید زنگ بزنید.</p>
                </div><!-- end contact-us -->
@stop