<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Labs;
use App\Models\Order;
use App\Models\Patients;
use App\Models\Product;
use App\Models\Students;
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


//product
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
//students
    public function studentForm(){
        return view('admin.student_form');
    }
    public function studentStore(Request $request){
        // dd($request->all());

        Students::create([
            'title'=>$request->student_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.student.index')
        ->with('message','Create Successfully...');
    }

    public function studentEditForm($id){
        $student=Students::find($id);
        return view('admin.student_edit_form',compact('student'));
    }

    public function studentUpdate(Request $request,$id){
       
        $student=Students::find($id);
        $student->update([
            'title'=>$request->student_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.student.index')
        ->with('message','Updated Successfully...');
    }
    public function studentList(){
        $student=Students::all();
        return view('admin.student_tables',compact('student'));
    }
    public function studentShow($id){
        
        $student=Students::find($id);
        return view('admin.student-show',compact('student'));
    }
    public function studentDestroy($id){
        
        $student=Students::find($id);
        $student->delete();
        return redirect()
        ->route('admin.student.index')
        ->with('message','Delete Successfully');
    }
//course
    public function courseForm(){
        return view('admin.course_form');
    }
    public function courseStore(Request $request){
        // dd($request->all());

        Courses::create([
            'title'=>$request->course_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.course.index')
        ->with('message','Create Successfully...');
    }

    public function courseEditForm($id){
        $course=Courses::find($id);
        return view('admin.course_edit_form',compact('course'));
    }

    public function courseUpdate(Request $request,$id){
       
        $course=Courses::find($id);
        $course->update([
            'title'=>$request->course_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.course.index')
        ->with('message','Updated Successfully...');
    }
    public function courseList(){
        $course=Courses::all();
        return view('admin.course_tables',compact('course'));
    }
    public function courseShow($id){
        
        $course=Courses::find($id);
        return view('admin.course-show',compact('course'));
    }
    public function courseDestroy($id){
        
        $course=Courses::find($id);
        $course->delete();
        return redirect()
        ->route('admin.course.index')
        ->with('message','Delete Successfully');
    }
//patient
    public function patientForm(){
        return view('admin.patient_form');
    }
    public function patientStore(Request $request){
        // dd($request->all());

        Patients::create([
            'title'=>$request->patient_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.patient.index')
        ->with('message','Create Successfully...');
    }

    public function patientEditForm($id){
        $patient=Patients::find($id);
        return view('admin.patient_edit_form',compact('patient'));
    }

    public function patientUpdate(Request $request,$id){
       
        $patient=Patients::find($id);
        $patient->update([
            'title'=>$request->patient_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.patient.index')
        ->with('message','Updated Successfully...');
    }
    public function patientList(){
        $patient=Patients::all();
        return view('admin.patient_tables',compact('patient'));
    }
    public function patientShow($id){
        
        $patient=Patients::find($id);
        return view('admin.patient-show',compact('patient'));
    }
    public function patientDestroy($id){
        
        $patient=Patients::find($id);
        $patient->delete();
        return redirect()
        ->route('admin.patient.index')
        ->with('message','Delete Successfully');
    }
//lab
    public function labForm(){
        return view('admin.lab_form');
    }
    public function labStore(Request $request){
        // dd($request->all());

        Labs::create([
            'title'=>$request->lab_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.lab.index')
        ->with('message','Create Successfully...');
    }

    public function labEditForm($id){
        $lab=Labs::find($id);
        return view('admin.lab_edit_form',compact('lab'));
    }

    public function labUpdate(Request $request,$id){
       
        $lab=Labs::find($id);
        $lab->update([
            'title'=>$request->lab_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.lab.index')
        ->with('message','Updated Successfully...');
    }
    public function labList(){
        $lab=Labs::all();
        return view('admin.lab_tables',compact('lab'));
    }
    public function labShow($id){
        
        $lab=Labs::find($id);
        return view('admin.lab-show',compact('lab'));
    }
    public function labDestroy($id){
        
        $lab=Labs::find($id);
        $lab->delete();
        return redirect()
        ->route('admin.lab.index')
        ->with('message','Delete Successfully');
    }
//order
    public function orderForm(){
        return view('admin.order_form');
    }
    public function orderStore(Request $request){
        // dd($request->all());

        Order::create([
            'title'=>$request->order_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.order.index')
        ->with('message','Create Successfully...');
    }

    public function orderEditForm($id){
        $order=Order::find($id);
        return view('admin.order_edit_form',compact('order'));
    }

    public function orderUpdate(Request $request,$id){
       
        $order=Order::find($id);
        $order->update([
            'title'=>$request->order_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.order.index')
        ->with('message','Updated Successfully...');
    }
    public function orderList(){
        $order=Order::all();
        return view('admin.order_tables',compact('order'));
    }
    public function orderShow($id){
        
        $order=Order::find($id);
        return view('admin.order-show',compact('order'));
    }
    public function orderDestroy($id){
        
        $order=Order::find($id);
        $order->delete();
        return redirect()
        ->route('admin.order.index')
        ->with('message','Delete Successfully');
    }







    //else
    public function logIn(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}

/*

student
course
patient
lab
order

*/