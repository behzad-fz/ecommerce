<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\product;
use App\models\category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class ProductsController extends Controller
{

	private $product;
	public function __construct(product $product){
		$this->product=$product;

	}

    
		    public function Index(){
		    	$categories= category::all();
		    	$products= product::all();
		        return view('products.index',compact('categories'),compact('products'));
		    }

		public function create(Request $request){
					try{
    					$this->validate($request,product::$rules);
    					}catch(ValidationException $e){

    					return "error";
    					}


    	$this->product->category_id= $request->input('category_id');
    	$this->product->title = $request->input('title');
    	$this->product->description = $request->input('description');
		$this->product->price = $request->input('price');


		$originalImage=$request->file('image');
		$thumbnailImage=Image::make($originalImage);
		$thumbnailPath = public_path().'/thumbnail/products/';
		$originalIPath = public_path().'/img/products/';
		$thumbnailImage->save($originalIPath.time().$originalImage->getClientOriginalName());
		$thumbnailImage->resize(468,249);
		$thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());
		//$this->product->image = 'img/products/'.$filename;
    	$this->product->image ='/thumbnail/products/'.time().$originalImage->getClientOriginalName();
    	$this->product->save();
    	return redirect()->back()->with('massage','محصول  افزوده شد');
		
		}


		public function destroy($id){
		
		if($this->product->find($id)){
			$this->product->find($id)->delete();
			Storage::delete($this->product->image);

			return redirect()->back()->with('massage','محصول  حذف شد');
		}
		return redirect()->back()->with('massage','دوباره تلاش کید');

		}




    
}