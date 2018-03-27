<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;
use App\FeaturedImage;

class faqController extends Controller
{
     public function index(){
        $featuredimage_faq = FeaturedImage::where('page_name','faq')->get();

     	$us_internship = faq::where('faq_type','US Internship')->get();
     	$spring = faq::where('faq_type','US W&T Spring')->get();
     	$summer = faq::where('faq_type','US W&T Summer')->get();
     	$aupair = faq::where('faq_type','US AuPair')->get();
        $skilled = faq::where('faq_type','AUS Skilled Work Visa')->get();
        $aus_internship = faq::where('faq_type','AUS Internship')->get();
        $refunds = faq::where('faq_type','Refunds')->get();
     	$faq_types = faq::distinct('state')->pluck('faq_type');
        $us_internship_count = faq::where('faq_type','US Internship')->get()->count();
        $spring_count = faq::where('faq_type','US W&T Spring')->get()->count();
        $summer_count = faq::where('faq_type','US W&T Summer')->get()->count();
        $aupair_count = faq::where('faq_type','US AuPair')->get()->count();
        $aupair_count = faq::where('faq_type','US AuPair')->get()->count();
        $skilled_count = faq::where('faq_type','AUS Skilled Work Visa')->get()->count();
        $aus_internship_count = faq::where('faq_type','AUS Internship')->get()->count();
        $refunds_count = faq::where('faq_type','Refunds')->get()->count();

        return view('users.FAQ.faq', compact('featuredimage_faq', 'us_internship','summer','spring','aupair','skilled','aus_internship','faq_types','refunds','us_internship_count','summer_count','spring_count','aupair_count','skilled_count','aus_internship_count','refunds_count'));
	}
	
	

    public function adminIndex()
    {
       $faq_table = faq::paginate(10);
       
       return view('admin.faq.list', compact('faq_table'));
    }


    public function adminCreate()
    {
       $faq = faq::all();
       $action = route('faq.adminStore');
       $method = "post";
       return view('admin.FAQ.form', compact('faq', 'action', 'method'));
    }


    public function adminEdit($id)
    {
       $faq = faq::findorFail($id);
       $action = route('faq.adminUpdate', $id);
       $method = "post";
       return view('admin.FAQ.form', compact('faq', 'action', 'method'));
    }



    public function adminStore(Request $request)
    {


        $faq = new faq;
        $faq->faq_type = $request['faq_type'];
        $faq->question = $request['question'];
        $faq->answer = $request['answer'];


        $faq->save();

        $success = array('ok'=> 'Success');
        
        return redirect()->route('faq.adminIndex')->with($success);

    }

    public function adminUpdate(Request $request, $id)
    {
        $faq = faq::findorFail($id);

        $faq->faq_type = $request['faq_type'];
        $faq->question = $request['question'];
        $faq->answer = $request['answer'];



        $faq->save();

        $success = array('ok'=> 'Success');
        
        return redirect()->route('faq.adminIndex')->with($success);

    }

    public function adminDelete($id)
    {
        $faq = faq::findorFail($id)->delete();
        $success = array('ok'=> 'Success');
        
        return redirect()->route('faq.adminIndex')->with($success);

    }
    public function viewTrash(){
        $faq_table = faq::onlyTrashed()->get();
        return view('admin.faq.trash', compact('faq_table'));
    }


    public function restoreTrash($id){
        $faq = faq::withTrashed()
        ->where('faq_id', $id)
        ->restore();
        $success = array('ok'=> 'Successfully Restored');
        return redirect()->back()->with($success);
    }

   
}
