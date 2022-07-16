<?php

namespace App\Http\Controllers\Validation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;


use Validator;
use DB;


class ValidationController extends Controller
{
   
    public function get_val()
    {
        $data['regi'] = User::get();
        return view('validation', $data);
    }
    public function save_new()
    {
        return view('new_registration');
    }

    public function new_validation(Request $request)
    {


        $user = new User;
        $user->name =  $request->post('name');
        $user->email = $request->post('email');
        $user->password =  $request->post('password');      
        if($user->save()){
            $user_address = [
                'user_id'=>$user->id,
                'address'=>$request->address
            ];
            DB::table('address')->insert($user_address);
        }      
        return redirect('/')->with('success', 'created Successfully');   
        
    }
}
