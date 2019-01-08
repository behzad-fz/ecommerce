<?php

namespace App\Http\Controllers;

use App\models\product;
use Illuminate\Http\Request;
use App\models\category;
Use Mail;
use App\Mail\OrderShipped;

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

   public function search(Request $request) {

    $keyword = $request->input('search');
    $results= $this->product->where('title','LIKE','%'.$keyword.'%')->get();
      return view('store.search',compact('results'),compact('keyword'));

   }


   public function contact(){

    return view('store.contact');
   }

   public function email(Request $request){
            $this->validate($request,[
'email' => 'required',
'body' => 'required'
        ]);

    $email = $request->input('email');
    $body=$request->input('body');
    $address="fazelasl@yahoo.com";

    Mail::to($address)->send(new OrderShipped($email,$body));
       return redirect()->back()->with('massage','ایمیل ارسال شد');
   }
}
