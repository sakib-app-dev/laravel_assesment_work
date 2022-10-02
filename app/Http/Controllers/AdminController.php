<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
    public function productStore(Request $request){
        // dd($request->all());

        Product::create([
            'title'=>$request->product_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.product.index')
        ->with('message','Create Successfully...');
    }

    public function productEditForm($id){
        $product=Product::find($id);
        return view('admin.product_edit_form',compact('product'));
    }

    public function productUpdate(Request $request,$id){
       
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
