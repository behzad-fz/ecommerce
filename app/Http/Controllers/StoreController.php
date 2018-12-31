<?php

namespace App\Http\Controllers;

use App\models\product;
use Illuminate\Http\Request;
use App\models\category;

class StoreController extends Controller
{
    private $product;
    public function __construct(product $product)
    {
        $this->product=$product;
    }

    public function Index(){
       $products= $this->product->all()->take(4);
        return view('store.index',compact('products'));

    }



   Public function View($pid){
   	$product= $this->product->find($pid);
   	return view('store.view',compact('product'));
   }

   public function AddCart(){


   }

   public function Category($cid){
            $products=$this->product->where('category_id',$cid)->paginate(3);
            $category=category::where('id',$cid)->get();

    return view('store.category',compact('products'),compact('category'));


   }
}
