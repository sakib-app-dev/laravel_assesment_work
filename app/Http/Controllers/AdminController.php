<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }
    public function categoryForm(){
        return view('admin.forms');
    }
    public function categoryList(){
        return view('admin.tables');
    }
    public function categoryDelete(){
        
    }



    public function productForm(){
        return view('admin.product_form');
    }
    public function productStore(ProductRequest $request){
        // dd($request->all());

        // $validated = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        // ]);

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|unique:products|max:255|min:3',
        // ]);
 
        // if ($validator->fails()) {
        //     // return redirect('product/form')
        //     return back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }else{

            Product::create([
                'title'=>$request->title,
                'category'=>$request->category,
                'is_active'=>$request->is_active ? true : false,
                'description'=>$request->description
            ]);
        
            return redirect()
            ->route('admin.product.index')
            ->with('message','Create Successfully...');
        // } 
    }

    public function productEditForm($id){
        $product=Product::find($id);
        return view('admin.product_edit_form',compact('product'));
    }

    public function productUpdate(ProductRequest $request,$id){
       
        $product=Product::find($id);
        $product->update([
            'title'=>$request->product_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.product.index')
        ->with('message','Updated Successfully...');
    }
    public function productList(){
        $product=Product::all();
        return view('admin.product_tables',compact('product'));
    }
    public function productShow($id){
        
        $product=Product::find($id);
        return view('admin.product-show',compact('product'));
    }
    public function productDestroy($id){
        
        $product=Product::find($id);
        $product->delete();
        return redirect()
        ->route('admin.product.index')
        ->with('message','Delete Successfully');
    }


    public function logIn(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}
