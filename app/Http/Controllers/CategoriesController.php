<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\category;

class CategoriesController extends Controller
{

	private $category;
	public function __construct(category $category){

		$this->category=$category;

	}

    public function Index(){
    	$categories= $this->category->all();
        return view('categories.index',compact('categories'));

    }

    public function create(Request $request){
    	try{
    $this->validate($request,category::$rules);
    
			}catch(ValidationException $e){

				return "ERROR";
			}

		 if($this->category->create($request->all())){
		 return redirect()->back()->with('massage','گروه جدید افزوده شد');
    	}

    	}

    	public function destroy($id){

    	if( $this->category->find($id)){
    		$this->category->find($id)->delete();
    		 return redirect()->back()->with('massage','گروه مورد نظر حذف شد');
    		}
    		return redirect()->back()->with('massage','دوباره تلاش کنید');
    	}

}
    	
    


