<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use Illuminate\Support\Facades\Validator;
use Session;
use DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type=1)
    {
        // $service = Service::select('*')
        //             ->leftJoin('services_type', 'services_type.service_type_id', '=', 'services.service_type_id')
        //             ->leftJoin('b_refcategory', 'b_refcategory.category_id', '=', 'services_type.category_id')
        //             ->where('services.is_deleted', 0)
        //             ->where('services.is_active', $type)
        //             ->orderBy('services.service_id', 'desc')->get();
        // return Reference::collection($service);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        Validator::make($request->all(),
            [
                'email' => 'required',
                'pword' => 'required'
            ]
        )->validate();

        $email = $request->input('email');
        $pword = $request->input('pword');

        $result = Clients::select('*')
                    ->where('company_email', $email)
                    ->where('password', $pword)
                    ->where('is_deleted', FALSE)
                    ->where('is_verified', TRUE)
                    ->where('is_active', TRUE)
                    ->get();
        
        if(count($result) > 0){

            session()->put('client_id', $result[0]->client_id);
            session()->put('company_name', $result[0]->company_name);
            session()->save();

            $response['stat']='success';
            $response['msg']='Login Successfully.';
            echo json_encode($response);
        }else{
            $response['stat']='error';
            $response['msg']='Invalid email or password.';
            echo json_encode($response);
        }
    }

    
    public function logout()
    {
        Session::forget('client_id');
        Session::forget('company_name');
        return view('login');
    }
}
