<?php
namespace App\Http\Controllers;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Provider;
use App\State;
use App\City;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProviderController extends Controller {
    public function index() {
        $provider = DB::table('provider')
            ->join('city', 'city.id', '=', 'provider.id_city')
            ->join('state','state.id','=','provider.id_state')
            ->select('provider.id as id_provider','provider.name as provider_name','provider.*','city.name as city','state.name as state','city.*','state.*')
            ->get();
        return view('provider/providers_list',['providers'=>$provider]) ;
    }
    public function store(Request $request)
    {

        $provider = new Provider;
        $provider->name=$request->name;
        $provider->rfc=$request->rfc;
        $provider->email=$request->email;
        $provider->phone=$request->phone;
        $provider->address=$request->address;
        $provider->id_city=$request->city;
        $provider->id_state=$request->state;
        $provider->save();
        return redirect('/provider');
    }
    public function create()
    {
        $state = State::all();
        return view('provider/provider_add',compact('state'));
    }
    public function edit($id)
    {
        $provider = Provider::find($id);
        $states = State::all();
        $stat=State::pluck('id','name')->where('id','=',$provider->id_state);
        $cities=City::all()->where('id_state','=',$provider->id_state);
        return view('provider/provider_update',compact('provider','stat','states','cities'));
    }
    public function update(Request $request)
    {
        $provider = Provider::find($request->id);
        $provider->name=$request->name;
        $provider->rfc=$request->rfc;
        $provider->email=$request->email;
        $provider->phone=$request->phone;
        $provider->address=$request->address;
        $provider->id_city=$request->city;
        $provider->id_state=$request->state;
        $provider->save();
        return redirect('/provider');
    }
    public function delete($id)
    {
        $provider = Provider::find($id);
        $provider->delete();
        return redirect()->back();
    }
    public function search(Request $request){
        $provider = DB::table('provider')
            ->join('city', 'city.id', '=', 'provider.id_city')
            ->join('state','state.id','=','provider.id_state')
            ->where('provider.name','like','%'.$request->name.'%')
            ->select('provider.id as id_provider','provider.name as provider_name','provider.*','city.name as city','state.name as state','city.*','state.*')
            ->get();
        return \View::make('provider/providers_list',['providers'=>$provider]);
    }
    public function city($id)
    {
        $cities= City::all()->where('id_state','=',$id);
        return $cities;
    }
}