@extends('layouts.main')



@section('content')
<div id="admin">
	<h1>
		مدیریت محصولات
	</h1>
	<p>
		میتوانید محصولات را ویرایش کنید
	</p>
	<h2>
		محصولات
	</h2>
	<ul>
		@foreach($products as $product)
		<li>
			<img src="/{{$product->image}}" alt="{{$product->name}}" width="50">
			{{$product->title}} -
			<form action="{{url('admin/products',$product->id)}}" class="form-inline" method="post">
				@csrf
				@method('PUT')
				<input type="hidden" name="id" value="{{$product->id}}">
				<select name="availablity">
					@if($product->availablity ==1)
					<option value="1" selected>موجود</option>
					<option value="0"> ناموجود</option>
						@endif
						@if(!$product->availablity ==1)
							<option value="1" selected>موجود</option>
							<option value="0" selected> ناموجود</option>
						@endif
				 </select>
				 <input type="submit" value="به روز رسانی">
			</form>
			-
			<form action="{{url('admin/products',$product->id)}}" class="form-inline" method="post">
				{{method_field('delete')}}
				@csrf
				<input type="hidden" name="id" value="{{$product->id}}">
				<input type="submit" value="حذف">
			</form>


		</li>
		@endforeach
	</ul>





	<h2>
	افزودن محصولات
	</h2>


    	@if(count($errors))
    		<ul>
    			@foreach($errors->all() as $error)
    			<li style="color: #e3342f">
    			{{$error}}
    			</li>	
    			@endforeach

    		</ul>
    	@endif
	<form id="productfrm" action="{{route('ProductsController.create')}}" method="post" enctype="multipart/form-data" novalidate>
		@csrf

		<p>
			<lable>نام گروه   </lable><br>
			<select name="category_id">
				@foreach($categories as $category)
				<option value="{{$category->id}}"> {{$category->name}}</option>
				@endforeach
			</select>
		</p>
		<p>
			<lable>نام   </lable><br>
			<input type="text" name="title">
		</p>
		<p>
			<lable>توضیحات   </lable><br>
			<textarea name="description" style="height: 60px;"></textarea>
		</p>
		<p>
			<lable>قیمت   </lable><br>
			<input type="text" name="price" class="form-price">
		</p>
		<p>
			<lable>تصویر   </lable><br>
			<input type="file" name="image">
		</p>
		
			<input type="submit" value="درج محصول" class="secondary-cart-btn">
		
	</form>
</div>
@stop