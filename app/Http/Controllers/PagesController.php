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
        $data['seminars'] =  DB::table('cms_seminars')->where('cms_seminars.is_deleted', 0)->orderBy('seminar_date', 'desc')->take(3)->get();
        $data['industries'] =  DB::table('industries')->where('industries.is_deleted', 0)->get();
        $data['team_deps'] =  DB::table('b_refdepartments')->where('b_refdepartments.is_deleted', 0)->orderBy('department_desc', 'asc')->get();
        $data['team_photos'] = DB::table('cms_team')->leftJoin('b_refdepartments', 'b_refdepartments.department_id', '=', 'cms_team.department_id')
            ->leftJoin('cms_gallery', 'cms_gallery.gallery_id', '=', 'cms_team.gallery_id')
            ->where('cms_team.is_deleted', 0)->orderBy('cms_team.team_id', 'desc')->get();
        $data['carousel_seminar'] =  DB::table('cms_seminars')->where('cms_seminars.is_deleted', 0)->orderBy('seminar_date', 'desc')->take(1)->get()[0];
        $data['news'] = DB::table('cms_newspublication')->leftJoin('cms_gallery', 'cms_gallery.gallery_id', '=', 'cms_newspublication.gallery_id')
        ->where('cms_newspublication.is_deleted', 0)->orderBy('cms_newspublication.news_publish_date', 'desc')->take(3)->get();
        return view('welcome')->with('data', $data);
    }

    public function contactus(){
        return view('contactus');
    }

    public function seminars(){
        $data['seminars'] =  Seminar::leftJoin('cms_gallery', 'cms_gallery.gallery_id', '=', 'cms_seminars.gallery_id')->where('is_deleted', 0)->orderBy('seminar_id', 'desc')->paginate(10);
        $data['news'] = DB::table('cms_newspublication')->where('cms_newspublication.is_deleted', 0)->orderBy('news_publish_date', 'desc')->take(3)->get();
        return view('seminars')->with('data', $data);
    }

    public function seminar($id){
        $data['seminar'] = Seminar::leftJoin('cms_gallery', 'cms_gallery.gallery_id', '=', 'cms_seminars.gallery_id')->findOrFail($id);  
        $data['other_seminars'] =  DB::table('cms_seminars')->where('cms_seminars.is_deleted', 0)->orderBy('seminar_date', 'desc')->take(3)->get();
        return view('seminar')->with('data', $data);
    }

    public function publications(){
        $data['news'] = Publication::leftJoin('cms_gallery', 'cms_gallery.gallery_id', '=', 'cms_newspublication.gallery_id')
        ->where('cms_newspublication.is_deleted', 0)->orderBy('cms_newspublication.news_publish_date', 'desc')->paginate(10);

        $data['seminars'] =  DB::table('cms_seminars')->where('cms_seminars.is_deleted', 0)->orderBy('seminar_date', 'desc')->take(3)->get();
        return view('publications')->with('data', $data);
    }

    public function publication($id){
        $data['publication'] = Publication::leftJoin('cms_gallery', 'cms_gallery.gallery_id', '=', 'cms_newspublication.gallery_id')
        ->findOrFail($id);
        $data['other_publications'] = Publication::where('cms_newspublication.is_deleted', 0)->orderBy('news_publish_date', 'desc')->take(3)->get();
        return view('publication')->with('data', $data);
    }

}
