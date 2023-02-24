<?php

namespace App\Http\Controllers;
use App\Models\clients;
use App\Models\account;

use DB;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function clientregister(){
        $acc = account::all();
        return view('Customers.clientnew',['acc'=>$acc]);
    }

    public function clientlist(){
        $list = clients::all();
        return view('Customers.allClients',['clist' => $list]);
    }

    public function clientcreate(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email',
            'account_number' => 'required',
            'password' => 'required',
            ]);

        $create = clients::create($request->all());
        if($create){
            return back()->with('Success','The Account Has Been Created Successfully');
        } else {
            return back()->with('Fail','Something went wrong');
        }
    }



    public function cltloginpage(){
        if(session('LoggedUser')){
            return view('Customers/clientprofile');
            // return redirect()->route('Dashboard');
        } elseif(session('LoggedClient')){
            return redirect()->route('clientprofile');
        } else{
            return view('Customers.clientlogin');
        }
    }



    public function clientlogin(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $admin = clients::where('email','=',$request->email)->first();

        if(!$admin){
            return back()->with('fail','Invalid Credentials');
        }else{
                if($request->password == $admin->password){
                    $request->session()->put('LoggedClient',$admin->id);
                    return redirect('clientprofile');
                } else {
                    return back()->with('fail','Incorrect Password');
                }
            }
        }


    public function Clogout(){
        if(session()->has('LoggedClient')){
            session()->pull('LoggedClient');
        }
        return view('Customers.clientlogin');
    }


    public function profile(){
        $clnt = clients::where('id','=',session('LoggedClient'))->first();

        $data = clients::where('id','=',session('LoggedClient'))->first();

        $data = $data->select('clients.*', 'account.*')
                        ->leftjoin('account','account.account_number','clients.account_number')
                        ->where('clients.id','=',session('LoggedClient'))
                        ->get();
         if($data){
            // return $data;
            return view('Customers.clientprofile',['info'=>$data, 'client'=>$clnt]);
        } else {
            return redirect('/clientlogin');
        }
    }



    public function deleteclient($id)
    {
        $user = clients::find($id);
        $user->delete();
        return redirect()->back();
    }










    public function clientDataAccessForm($id){
        $data = clients::find($id);
        return view('Customers.clientDataAccessForm', ['id'=>$data]);
    }

    public function grantAccessClient(Request $req, $id){
        $pin = 1234;
        if($req->pin == $pin){
            $user = clients::find($id);
            $acc = account::all();
            return view('Customers.updateClient', ['users'=>$user, 'acc' => $acc]);
        }else{
            return redirect()->back()->with('fail')->withInput();
        }
    }


    public function updateclient($id)
    {
        $user = clients::find($id);
        $acc = account::all();
        return view('Customers.updateClient', ['users'=>$user, 'acc' => $acc]);
    }


    public function update(Request $req, $id)
    {
        $data=clients::find($id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->account_number = $req->account_number;
        $data->save();

        return redirect()->route('clientlist');
    }





    public function selfUpdate($id)
    {
        $data = clients::where('id','=',session('LoggedClient'))->first();
        $acc = account::find($id);
        return view('Customers.clientSelfUpdate', ['account'=>$acc, 'info'=>$data]);
    }

    public function selfUpdateVal(Request $req, $id)
    {
        $data=account::find($id);
        $data->phone_number = $req->phone_number;
        $data->pin = $req->pin;
        $data->modified_by = $req->modified_by;
        $data->address = $req->address;
        $data->save();
        return redirect()->back()->with("Account Updated Successfully");
    }






    public function changePasswordPage($id)
        {
            $data=clients::find($id);
            return view('/changePassword', ['data' => $data]);
        }

    public function changePassword(Request $req, $id){
        $data = clients::find($id);
        if($req->password != $req->confirm_password)
        {
            return redirect()->back()->with('fail', 'Passwords Do not match!');
        }
        else
        {
        $data->password = $req->password;
        $data->save();
        return redirect()->route('clientprofile')->with('success','Password Has Been Updated');
        }
    }


}
