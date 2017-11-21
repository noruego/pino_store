<?php

namespace App\Http\Controllers;
use App\Metodo_pago;
use Illuminate\Http\Request;

class Metodo_pagoController extends Controller
{
    public function index() {
        $metodo = Metodo_pago::all();
        return view('metodo_list',['metodo'=>$metodo]) ;
    }
    public function store(Request $request)
    {
        $metodo = new Metodo_pago();
        $metodo->nombre = $request->nombre;
        $metodo->descripcion = $request->descripcion;
        $metodo->save();
        return redirect('/metodo');
    }
    public function create()
    {
        return view('metodo_add');
    }
    public function edit($id)
    {
        $metodo = Metodo_pago::find($id);
        return view('metodo_update',compact('metodo'));
    }
    public function update(Request $request)
    {
        $metodo = Metodo_pago::find($request->id);
        $metodo->nombre = $request->nombre;
        $metodo->descripcion = $request->descripcion;
        $metodo->save();
        return redirect('/metodo');
    }
    public function delete($id)
    {
        $metodo = Metodo_pago::find($id);
        $metodo->delete();
        return redirect()->back();
    }
    public function search(Request $request){
        $metodo = Metodo_pago::where('nombre','like','%'.$request->name.'%')->get();
        return \View::make('metodo_list',['metodo'=>$metodo]);
    }
    public function service()
    {

    }
}
