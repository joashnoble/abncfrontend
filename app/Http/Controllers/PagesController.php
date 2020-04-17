<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
use App\Models\Publication;
use DB;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel';
        $data['seminars'] =  DB::table('cms_seminars')->orderBy('seminar_date', 'desc')->take(3)->get();
        $data['carousel_seminar'] =  DB::table('cms_seminars')->orderBy('seminar_date', 'desc')->take(1)->get()[0];
        $data['news'] = DB::table('cms_newspublication')->orderBy('news_publish_date', 'desc')->take(3)->get();
        return view('welcome')->with('data', $data);
    }

    public function contactus(){
        return view('contactus');
    }

    public function seminars(){
        $data['seminars'] =  DB::table('cms_seminars')->orderBy('seminar_date', 'desc')->paginate(2);
        $data['news'] = DB::table('cms_newspublication')->orderBy('news_publish_date', 'desc')->take(3)->get();
        return view('seminars')->with('data', $data);
    }

    public function seminar($id){
        $data['seminar'] = Seminar::findOrFail($id);
        $data['other_seminars'] =  DB::table('cms_seminars')->orderBy('seminar_date', 'desc')->take(3)->get();
        return view('seminar')->with('data', $data);
    }

    public function publications(){
        $data['news'] = DB::table('cms_newspublication')->orderBy('news_publish_date', 'desc')->paginate(2);
        $data['seminars'] =  DB::table('cms_seminars')->orderBy('seminar_date', 'desc')->take(3)->get();

        return view('publications')->with('data', $data);
    }

    public function publication($id){
        $data['publication'] = Publication::findOrFail($id);
        $data['other_publications'] = Publication::orderBy('news_publish_date', 'desc')->take(3)->get();
        return view('publication')->with('data', $data);
    }

}
