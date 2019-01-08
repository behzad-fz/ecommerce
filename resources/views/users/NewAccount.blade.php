@extends('layouts.main')

@section('content')
<div id="new-account">
	
    	@if(count($errors))
    		<ul>
    			@foreach($errors->all() as $error)
    			<li style="color: #e3342f">
    			{{$error}}
    			</li>	
    			@endforeach

    		</ul>
    	@endif
                    <h1>ساخت حساب جدید</h1>

                    <form action="{{route('UsersController.create')}}" method="post" novalidate>
                    	@csrf
                        <p>
                            <label for="firstname">
                                <span class="required-field">*</span> نام:
                            </label>
                            <input type="text" id="firstname" name="firstname" required>
                        </p>
                        <p>
                            <label for="lastname">
                                <span class="required-field">*</span> نام خانوادگی:
                            </label>
                            <input type="text" id="lastname" name="lastname" required>
                        </p>
                        <p>
                            <label for="email">
                                <span class="required-field">*</span> ایمیل:
                            </label>
                            <input type="email" id="email" name="email" required>
                        </p>
                        <p>
                            <label for="password">
                                <span class="required-field">*</span> گذر واژه:
                            </label>
                            <input type="password" id="password" name="password" required>
                        </p>
                        <p>
                            <label for="password_confirmation">
                                <span class="required-field">*</span> تکرار گذرواژه:
                            </label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required>
                        </p>
                        <p>
                            <label for="telephone">
                                <span class="required-field">*</span> تلفن:
                            </label>
                            <input type="text" id="telephone" name="telephone" required>
                        </p>

                        <p>تمامی فیلدهای <span class="required-field">*</span> درا الزامی هستند.</p>

                        <hr />

                        <input type="submit" value="ثبت حساب جدید" class="secondary-cart-btn">
                    </form>
                </div><!-- end new-account -->
@stop