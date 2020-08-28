<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
use App\Models\Publication;
use App\Models\Clients;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Mail;
use Session;
use DB;

class ClientController extends Controller
{

    public function create(Request $request)
    {

        Validator::make($request->all(),
            [
                'company_name' => 'required',
                'company_address' => 'required',
                'company_email' => 'required',
                'contact_no' => 'required',
                'contact_person' => 'required',
                'contact_person_position' => 'required',
                'password' => 'required'
            ]
        )->validate();

        $client = new Clients();
        $client->company_name = $request->input('company_name');
        $client->company_address = $request->input('company_address');
        $client->company_email = $request->input('company_email');
        $client->business_entity = $request->input('business_entity');
        $client->business_nature = $request->input('business_nature');
        $client->business_service = $request->input('business_service');
        $client->contact_person = $request->input('contact_person');
        $client->contact_person_position = $request->input('contact_person_position');
        $client->contact_no = $request->input('contact_no');
        $client->password = $request->input('password');
        $client->created_datetime = Carbon::now();
        $client->save();
    
        $client = Clients::findOrFail($client->client_id);
        $client_id = $client->client_id;

        $data = array(
            'client_id' => $client->client_id,
            'email' => $request->input('company_email')
            );

        Mail::send([], [], function ($message) use ($data) {
            $message->to($data['email'])
              ->subject('Verify Email Address')
              // here comes what you email
              ->setBody('Please click the link to verify your account. <a href="http://abncsite.test/verify/'.$data['client_id'].'">Verify Account</a>', 'text/html'); // for HTML rich messages
          });
                
        $response['stat']='success';
        $response['msg']='<b>Successfully Signup.</b> Please Check your email to verify your account.';
        echo json_encode($response);

    }

    public function verify($id)
    {   
        $client_id = $id;
        $client = Clients::findOrFail($id);
        $client->is_verified = 1;
        $client->update();
        
        return view('login');

    }

}
