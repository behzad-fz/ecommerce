@extends('layouts.main')
@section('content')
<div id="admin">
	<h1>
    مدیریت گروه ها
	</h1>
    <p>
        شما میتوانید گروه های محصولات رادر اینجا ویرایش کنید
 	</p>
    		<ul>
    		@foreach($categories as $category)
    			<li>
    			{{$category->name}} -
    			<form action="{{url('admin/categories',$category->id)}}" class="form-inline" method="post">
    				{{method_field('delete')}}
    				@csrf	
    				<input type="hidden" name="id" value="{{$category->id}}">
    				<input type="submit" name="" value="حذف">

    			</form>
    			</li>
    		@endforeach

    		</ul>
    	
    	@if(count($errors))
    		<ul>
    			@foreach($errors->all() as $error)
    			<li style="color: #e3342f">
    			{{$error}}
    			</li>	
    			@endforeach

    		</ul>
    	@endif
  <form action="{{route('CategoriesController.create')}}" method="post" novalidate>
  	@csrf
  	<p>
  	<label>نام</label>
  	<input type="text" name="name">
  	</p>
  	<input type="submit" name="" value="افزودن" class="secondary-cart-btn">

  </form>

</div>
@stop