<?php

namespace App\Http\Controllers;
use App\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index() {
        $payments = PaymentMethod::all();
        return view('payment_method.payment_methods_list',['payments'=>$payments]) ;
    }
    public function store(Request $request)
    {
        $payment = new PaymentMethod();
        $payment->create($request->all());
        return redirect('/payment_method');
    }
    public function create()
    {
        return view('payment_method.payment_method_add');
    }
    public function edit($id)
    {
        $payment = PaymentMethod::find($id);
        return view('payment_method.payment_method_update',compact('payment'));
    }
    public function update(Request $request)
    {
        $payment = PaymentMethod::find($request->id);
        $payment->update($request->all());
        return redirect('/payment_method');
    }
    public function delete($id)
    {
        $payment = PaymentMethod::find($id);
        $payment->delete();
        return redirect()->back();
    }
    public function search(Request $request){
        $payments = PaymentMethod::where('name','like','%'.$request->name.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function service()
    {

    }
}
