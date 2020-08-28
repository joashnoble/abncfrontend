<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
use App\Models\Publication;
use App\Models\Clients;
use App\Models\Quotations;
use Session;
use DB;

class ProfileController extends Controller
{
    public function index(){
        if(Session::has('client_id')){
            $client_id = session('client_id');
            $title = 'Profile';
            $data['profile'] = Clients::
                leftJoin('business_nature', 'business_nature.business_nature_id', '=', 'clients.business_nature')
                ->leftJoin('business_service', 'business_service.business_service_id', '=', 'clients.business_service')
                ->findOrFail($client_id);

            $data['quotations'] = Quotations::leftJoin('status', 'status.status_id', '=', 'quotations.status_id')
                ->where('quotations.client_id', $client_id)
                ->orderBy('quotations.quotation_id', 'desc')->get();
    
            return view('profile')->with('data', $data);
        }else{
            return view('login');
        }
    }

    public function quotation()
    {
        $client_id = session('client_id');
        $quotation_no = rand(100000000,999999999);

        $quotation = new Quotations();
        $quotation->client_id = $client_id;
        $quotation->quotation_no = $quotation_no;
        $quotation->date_generated = date("Y-m-d");
        $quotation->save();
        
        $title = 'Profile';
        $data['profile'] = Clients::
        leftJoin('business_nature', 'business_nature.business_nature_id', '=', 'clients.business_nature')
        ->leftJoin('business_service', 'business_service.business_service_id', '=', 'clients.business_service')
        ->findOrFail($client_id);


        $data['quotations'] = Quotations::leftJoin('status', 'status.status_id', '=', 'quotations.status_id')
            ->where('quotations.client_id', $client_id)
            ->orderBy('quotations.quotation_id', 'desc')->get();

        return view('profile')->with('data', $data);

    }
   
}
