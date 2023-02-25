<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
use App\Models\admin;
use App\Models\msg;


class AccountController extends Controller
{
    public function accountRegisterpage(){
        return view('Accounts/createAccount');
    }

    public function createAccount(Request $request){
        $request->validate([
            'account_owner' => 'required',
            'account_name' => 'required',
            'account_type' => 'required',
            'account_number' => 'required',
            'status' => 'required',
            'rating' => 'required',
            'phone_number' => 'required',
            'ownership' => 'required',
            'SIC_code' => 'required',
            'modified_by' => 'required',
            'current_balance' => 'required',
            'due_date' => 'required',
            'amount_past_due' => 'required',
            'unbilled_charges' => 'required',
            'arrangements_pending' => '',
            'address' => 'required',
            'pin' => 'required | max:4',
            'DOB' => 'required',
        ]);

        $create = account::create($request->all());
        if($create){
            return redirect()->route('accountRegisterpage')->with('success','The data has been added');
        } else{
            return redirect()->route('accountRegisterpage')->with('fail','Somethings is wrong.');
        }
    }

    public function allAccounts(){
        $data = account::all();
        return view('Accounts.allAccounts', ['list' => $data]);
    }






    public function accountDataAccessForm($id){
        $data = account::find($id);
        return view('Accounts.accountDataAccessForm', ['id'=>$data]);
    }

    public function grantAccessAccount(Request $req, $id){
        $pin = 1234;
        if($req->pin == $pin){
            $data = admin::where('id','=',session('LoggedUser'))->first();
            $acc = account::find($id);
            $msg = msg::where('acc_id',$id)->first();
            //return $msg;
            return view('Accounts.updateAccount', ['mesg'=>$msg,'account'=>$acc, 'info'=>$data]);
        }else{
            return redirect()->back()->with('fail')->withInput();
        }
    }

    public function updateaccountpage($id)
    {
        $data = admin::where('id','=',session('LoggedUser'))->first();
        $acc = account::find($id);
        $msg = msg::where('acc_id','=',$id);

        return view('Accounts.updateAccount', ['account'=>$acc, 'info'=>$data, 'mesg'=>$msg]);
    }


    public function updateaccount(Request $req, $id)
    {
        $data=account::find($id);
        $data->account_owner = $req->account_owner;
        $data->account_name = $req->account_name;
        $data->account_type = $req->account_type;
        $data->account_number = $req->account_number;
        $data->status = $req->status;
        $data->rating = $req->rating;
        $data->phone_number = $req->phone_number;
        $data->ownership = $req->ownership;
        $data->SIC_code = $req->SIC_code;
        $data->modified_by = $req->modified_by;
        $data->current_balance = $req->current_balance;
        $data->due_date = $req->due_date;
        $data->amount_past_due = $req->amount_past_due;
        $data->unbilled_charges = $req->unbilled_charges;
        $data->arrangements_pending = $req->arrangements_pending;
        $data->address = $req->address;
        $data->save();
        return redirect()->route('accountlist');
    }


    public function deleteaccount($id)
    {
        $acc = account::find($id);
        $acc->delete();
        return redirect()->back();
    }
}
