<?php

namespace App\Http\Controllers;

use App\Person as Person;
use App\Authorization as Authorization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function Page3(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                'Name' => 'required|min:5|max:10',
                'Age' => 'required',
                'Photo' => 'required'
            ]
        );
        $PersonTable = new Person();
        $PersonTable->name=$request->input('Name');
        $PersonTable->age=$request->input('Age');
        $PersonTable->photo=$request->input('Photo');
        $PersonTable->save();
        return view('page3');
    }

    public function Page2(Request $request)
    {
        // $PersonTable = new Person();
        // $rows = $PersonTable->all();

        $rows = DB::table('people')->orderByDesc('name')->get();
        //$rows = DB::table('people')->where('id',1)->value('photo');
        return view('page2',['rows'=>$rows]);
    }

    public function AuthorizationFun(Request $request)
    {
        // dd($request);
        // $rows = DB::table('authorization')->where('login',$request['login'])
        // ->where('password',$request['password'])->first();

        //$rows = DB::table('people')->where('id',1)->value('photo');
        // return view('authorization');
        return view('authorization');
    }

    public function Registration(Request $request)
    {
        $request->validate(
            [
                'login' => 'required|min:5|max:10',
                'password' => 'required|min:5|max:10'               
            ]
        );

        $Table = new authorization();
        $Table->login=$request->input('login');
        $Table->password=$request->input('password');      
        $Table->save();
        return view('authorization');
    }    
}