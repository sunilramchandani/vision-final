<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InternshipCompany;
use App\Opportunity;
use App\Qualification;
use App\QualificationList;
use App\OpportunityList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\FeaturedImage;
use App\InternshipDuration;
use App\Lib\CompanyLib;
use App\InternshipIndustry;
use App\Models\Testimonials;
use App\Models\Programs;
use App\Rate;
use App\PageStep;
class InternshipCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $internshipCompany_table_filter_state = InternshipCompany::groupBy('state')->get();
        $internshipCompany_table_filter_industry = InternshipIndustry::groupBy('industry_name')->get();
        $internshipCompany_table_filter_duration = InternshipCompany::groupBy('start_date')->get();


        $featuredimage_internship_us = FeaturedImage::where('page_name','internship US')->get();
        $featuredimage_internship_aus = FeaturedImage::where('page_name','internship AUS')->get();
        $steps = PageStep::where('page_name','internship')->get();
        //use $testimonial on foreach
        $get_testimonial_us = DB::table('featuredimage')
            ->where('page_name', 'internship US')
            ->first()
            ->testimonial_id;
        $testimonial_us = Testimonials::where('id', $get_testimonial_us)->get();
        $get_testimonial_aus = DB::table('featuredimage')
            ->where('page_name', 'internship AUS')
            ->first()
            ->testimonial_id;
        $testimonial_aus = Testimonials::where('id', $get_testimonial_aus)->get();
        $rate_us = Rate::where('program', 'Internship')
                        ->where('country', 'United States')
                        ->get();
        $rate_us_1st = Rate::where('program', 'Internship')
                        ->where('country', 'United States')
                        ->orderBy('id','asc')
                        ->pluck('first');
        $rate_us_2nd = Rate::where('program', 'Internship')
                        ->where('country', 'United States')
                        ->orderBy('id','asc')
                        ->pluck('second');
        $rate_us_3rd = Rate::where('program', 'Internship')
                        ->where('country', 'United States')
                        ->orderBy('id','asc')
                        ->pluck('total');
        $rate_au = Rate::where('program', 'Internship')
                        ->where('country', 'Australia')
                        ->get();
        $rate_au_1st = Rate::where('program', 'Internship')
                        ->where('country', 'Australia')
                        ->orderBy('id','asc')
                        ->pluck('first');
        $rate_au_2nd = Rate::where('program', 'Internship')
                        ->where('country', 'Australia')
                        ->orderBy('id','asc')
                        ->pluck('second');
        $rate_au_3rd = Rate::where('program', 'Internship')
                        ->where('country', 'Australia')
                        ->orderBy('id','asc')
                        ->pluck('total');


         if (request()->has('id')){
            $internshipCompany_table = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->where('id', request('id'))
                                    ->get();


            
            $internship_addresses = InternshipCompany::where('id', request('id'))
                                    ->whereNull('deleted_at')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->pluck('housing_address');
            $internship_name = InternshipCompany::where('id', request('id'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('company_name');
            $internship_desc = InternshipCompany::where('id', request('id'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('description');
            $internship_filter = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                ->where('id', request('id'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->get();
            
            $internship_id = InternshipCompany::where('id', request('id'))
                            ->whereNull('deleted_at')
                            ->orderBy('featured','desc')
                            ->orderBy('id', 'ASC')
                            ->pluck('id');
            $internship_image = InternshipCompany::where('id', request('id'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('image');
            $internship_featured = InternshipCompany::where('id', request('id'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('featured');

            $internship_latitude = InternshipCompany::where('id', request('id'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('latitude');
            $internship_longtitude = InternshipCompany::where('id', request('id'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('longtitude');
            
            return view('users.internship.internship', compact('internshipCompany_table_filter_state','internshipCompany_table_filter_industry ','internshipCompany_table_filter_duration','rate_au_3rd','rate_au_2nd','rate_au_1st','rate_us_3rd','rate_us_2nd','rate_us_1st','rate_us','rate_au','internship_latitude','internship_longtitude','internship_featured','testimonial_us','testimonial_aus', 'featuredimage_internship_us', 'featuredimage_internship_aus', 'internshipCompany_table', 'internship_filter','internship_addresses','internship_name','internship_desc','internship_id', 'internship_image','steps'));
        }

       /* else if (request()->has('state')){
            $featuredimage_internship = FeaturedImage::where('page_name','internship')->orderBy('featured','desc')->get();
            $internshipCompany_table = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')->orderBy('featured','desc')->where('country', request('country'))->paginate(4)->appends('country', request('country'));

            
            $internship_addresses = InternshipCompany::where('country', request('country'))->orderBy('featured','desc')->pluck('housing_address');
            $internship_name = InternshipCompany::where('country', request('country'))->orderBy('featured','desc')->pluck('company_name');
            $internship_desc = InternshipCompany::where('country', request('country'))->orderBy('featured','desc')->pluck('description');
            $internship_filter = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')->get();
            $internship_id = InternshipCompany::where('country', request('country'))->orderBy('featured','desc')->pluck('id');
            $internship_image = InternshipCompany::orderBy('featured','desc')->pluck('image');
            
            return view('users.internship.internship', compact('featuredimage_internship', 'internshipCompany_table', 'internship_filter','internship_addresses','internship_name','internship_desc','internship_id', 'internship_image'));

        } */

        else if (request()->has('country')){

            $internshipCompany_table = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->where('country', request('country'))
                                    ->get();

            
            $internship_addresses = InternshipCompany::where('country', request('country'))
                                    ->whereNull('deleted_at')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->pluck('housing_address');
            $internship_name = InternshipCompany::where('country', request('country'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('company_name');
            $internship_desc = InternshipCompany::where('country', request('country'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('description');
            $internship_filter = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                ->where('country', request('country'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->get();
            
            $internship_id = InternshipCompany::where('country', request('country'))
                            ->whereNull('deleted_at')
                            ->orderBy('featured','desc')
                            ->orderBy('id', 'ASC')
                            ->pluck('id');
            $internship_image = InternshipCompany::where('country', request('country'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('image');
            $internship_featured = InternshipCompany::where('country', request('country'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('featured');

            $internship_latitude = InternshipCompany::where('country', request('country'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('latitude');
            $internship_longtitude = InternshipCompany::where('country', request('country'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('longtitude');
            
            return view('users.internship.internship', compact('internshipCompany_table_filter_state','internshipCompany_table_filter_industry','internshipCompany_table_filter_duration','rate_au_3rd','rate_au_2nd','rate_au_1st','rate_us_3rd','rate_us_2nd','rate_us_1st','rate_us','rate_au','internship_latitude','internship_longtitude','internship_featured','testimonial_us','testimonial_aus', 'featuredimage_internship_us', 'featuredimage_internship_aus', 'internshipCompany_table', 'internship_filter','internship_addresses','internship_name','internship_desc','internship_id', 'internship_image','steps'));
        }

        else if (request()->has('industry_name')){

            $get_industry = InternshipIndustry::where('industry_name', request('industry_name'))
                            ->pluck('company_id');

            $internshipCompany_table = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->whereIn('id', $get_industry)
                                    ->get();

            
            $internship_addresses = InternshipCompany::whereIn('id', $get_industry)
                                    ->whereNull('deleted_at')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->pluck('housing_address');
            $internship_name = InternshipCompany::whereIn('id', $get_industry)
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('company_name');
            $internship_desc = InternshipCompany::whereIn('id', $get_industry)
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('description');
            $internship_filter = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                ->whereIn('id', $get_industry)
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->get();
            
            $internship_id = InternshipCompany::whereIn('id', $get_industry)
                            ->whereNull('deleted_at')
                            ->orderBy('featured','desc')
                            ->orderBy('id', 'ASC')
                            ->pluck('id');
            $internship_image = InternshipCompany::whereIn('id', $get_industry)
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('image');
            $internship_featured = InternshipCompany::whereIn('id', $get_industry)
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('featured');

            $internship_latitude = InternshipCompany::whereIn('id', $get_industry)
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('latitude');
            $internship_longtitude = InternshipCompany::whereIn('id', $get_industry)
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('longtitude');
            
            return view('users.internship.internship', compact('internshipCompany_table_filter_state','internshipCompany_table_filter_industry','internshipCompany_table_filter_duration','rate_au_3rd','rate_au_2nd','rate_au_1st','rate_us_3rd','rate_us_2nd','rate_us_1st','rate_us','rate_au','internship_latitude','internship_longtitude','internship_featured','testimonial_us','testimonial_aus', 'featuredimage_internship_us', 'featuredimage_internship_aus', 'internshipCompany_table', 'internship_filter','internship_addresses','internship_name','internship_desc','internship_id', 'internship_image','steps'));
        }

        else if (request()->has('state')){

        
            $internshipCompany_table = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->where('state', request('state'))
                                    ->get();

            
            $internship_addresses = InternshipCompany::where('state', request('state'))
                                    ->whereNull('deleted_at')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->pluck('housing_address');
            $internship_name = InternshipCompany::where('state', request('state'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('company_name');
            $internship_desc = InternshipCompany::where('state', request('state'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('description');
            $internship_filter = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                ->where('state', request('state'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->get();
            
            $internship_id = InternshipCompany::where('state', request('state'))
                            ->whereNull('deleted_at')
                            ->orderBy('featured','desc')
                            ->orderBy('id', 'ASC')
                            ->pluck('id');
            $internship_image = InternshipCompany::where('state', request('state'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('image');
            $internship_featured = InternshipCompany::where('state', request('state'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('featured');

            $internship_latitude = InternshipCompany::where('state', request('state'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('latitude');
            $internship_longtitude = InternshipCompany::where('state', request('state'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('longtitude');
            
            return view('users.internship.internship', compact('internshipCompany_table_filter_state','internshipCompany_table_filter_industry','internshipCompany_table_filter_duration','rate_au_3rd','rate_au_2nd','rate_au_1st','rate_us_3rd','rate_us_2nd','rate_us_1st','rate_us','rate_au','internship_latitude','internship_longtitude','internship_featured','testimonial_us','testimonial_aus', 'featuredimage_internship_us', 'featuredimage_internship_aus', 'internshipCompany_table', 'internship_filter','internship_addresses','internship_name','internship_desc','internship_id', 'internship_image','steps'));
        }
            

        else if (request()->has('duration')){

            $internshipCompany_table = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->where('start_date', request('duration'))
                                    ->get();


            
            $internship_addresses = InternshipCompany::where('start_date', request('duration'))
                                    ->whereNull('deleted_at')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->pluck('housing_address');
            $internship_name = InternshipCompany::where('start_date', request('duration'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('company_name');
            $internship_desc = InternshipCompany::where('start_date', request('du`ation'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('description');
            $internship_filter = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                ->where('start_date', request('duration'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->get();
            
            $internship_id = InternshipCompany::where('start_date', request('duration'))
                            ->whereNull('deleted_at')
                            ->orderBy('featured','desc')
                            ->orderBy('id', 'ASC')
                            ->pluck('id');
            $internship_image = InternshipCompany::where('start_date', request('duration'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('image');
            $internship_featured = InternshipCompany::where('start_date', request('duration'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('featured');

            $internship_latitude = InternshipCompany::where('start_date', request('duration'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('latitude');
            $internship_longtitude = InternshipCompany::where('start_date', request('duration'))
                                ->whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('longtitude');
            
            return view('users.internship.internship', compact('internshipCompany_table_filter_state','internshipCompany_table_filter_industry','internshipCompany_table_filter_duration','rate_au_3rd','rate_au_2nd','rate_au_1st','rate_us_3rd','rate_us_2nd','rate_us_1st','rate_us','rate_au','internship_latitude','internship_longtitude','internship_featured','testimonial_us','testimonial_aus', 'featuredimage_internship_us', 'featuredimage_internship_aus', 'internshipCompany_table', 'internship_filter','internship_addresses','internship_name','internship_desc','internship_id', 'internship_image','steps'));
        }
        else{
            $internshipCompany_table = InternshipCompany::with('opportunity', 'qualifications','internship_industry', 'internship_duration')
                                    ->whereNull('deleted_at')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->get();
        

            $internship_addresses = InternshipCompany::whereNull('deleted_at')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->pluck('housing_address');
            $internship_name = InternshipCompany::whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('company_name');
            $internship_desc = InternshipCompany::whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('description');
            $internship_id = InternshipCompany::whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('id');
            $internship_image = InternshipCompany::whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('image');
            $internship_featured = InternshipCompany::whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('featured');

            $internship_latitude = InternshipCompany::whereNull('deleted_at')
                                ->orderBy('featured','desc')
                                ->orderBy('id', 'ASC')
                                ->pluck('latitude');
            $internship_longtitude = InternshipCompany::whereNull('deleted_at')
                                    ->orderBy('featured','desc')
                                    ->orderBy('id', 'ASC')
                                    ->pluck('longtitude');


            return view('users.internship.internship', compact('internshipCompany_table_filter_state','internshipCompany_table_filter_industry','internshipCompany_table_filter_duration','rate_au_3rd','rate_au_2nd','rate_au_1st','rate_us_3rd','rate_us_2nd','rate_us_1st','rate_us','rate_au','internship_latitude','internship_longtitude', 'testimonial_us','testimonial_aus', 'featuredimage_internship_us', 'featuredimage_internship_aus', 'internshipCompany_table','internship_addresses','internship_name','internship_desc','internship_id','internship_image','internship_featured','steps'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function adminCreate()
    {
    
    $error = false;
    
    $qualification_list = QualificationList::all();
    $opportunity_list = OpportunityList::all();
    $action = route('internshipcompany.save');

    if(request()->isMethod('post')) {
        $data = request()->all();

        $result = CompanyLib::create($data);

        if ($result) {
            return redirect()
                ->route('internshipcompany.list')
                ->with('flash', [
                    'type' => 'success',
                    'message' => 'Successfully Added'
                ]);
        }
    }

    return view('admin.internship_company.form', [
        'error' => $error,
        'action' => $action,
        'qualification_list' => $qualification_list,
        'opportunity_list' => $opportunity_list,

    ]);
    }

    public function adminEdit($id){
        $company = CompanyLib::getById($id);
        $error = false;

        $getid_qualification = DB::table('qualifications')
            ->where('company_id', $id)
            ->pluck('qualification_id');
        
        $qualification_list = DB::table('qualification_list')
            ->wherenotIn('id', $getid_qualification)
            ->get();

        $getid_opportunity = DB::table('opportunity')
            ->where('company_id', $id)
            ->pluck('opportunity_id');
        
        $opportunity_list = DB::table('opportunity_list')
            ->wherenotIn('id', $getid_opportunity)
            ->get();


        if (!$company) {
            return redirect()->route('internshipcompany.list')->with('flash', [
                'type' => 'danger',
                'message' => 'Invalid Company'
            ]);
        }

        if (request()->isMethod('post')) {
            $data = request()->all();

            $result = CompanyLib::update($id, $data);

            if (!$result) {
                $error = [
                    'type' => 'danger',
                    'message' => 'Something went wrong while updating program'
                ];
            } else {
                return redirect()->route('internshipcompany.list')->with('flash', [
                    'type' => 'success',
                    'message' => 'Company was successfully updated'
                ]);
            }
        }

        $action = route('internshipcompany.saveadminedit', $id);

        return view('admin.internship_company.form', [
            'company' => $company,
            'action' => $action,
            'qualification_list' => $qualification_list,
            'opportunity_list' => $opportunity_list,
            'error' => $error
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function adminIndex()
    {
        $limit = request()->get('limit', 10);
        $current_page = request()->get('page', 1);


        $params = [
            'limit' => $limit,
            'current_page' => $current_page
        ];

        $pagination = CompanyLib::getPaginated($params);


        $company = $pagination->items();


        return view('admin.internship_company.list', [
            'company' => $company,
            'paginator' => $pagination

        ]);
    }



    public function delete($id)
    {
        $company = CompanyLib::getById($id);
        

        $data = [
            'type' => 'success',
            'message' => 'Successfully Deleted'
        ];

        $result = $company->delete();
        if(!$result) {
            $data['type'] = 'danger';
            $data['message'] = 'Invalid Company';
        }

        return redirect()->route('internshipcompany.list')->with('flash', $data);
    }

    public function view($id)
    {
        $company = InternshipCompany::with('qualifications', 'opportunity')->find($id);

      


        if(!$company) {
           return redirect()->route('internshipcompany.list')->with('flash', [
               'type' => 'danger',
               'message' => 'Invalid Company'
           ]);
        }

        return view('admin.internship_company.view', compact('company'));
    }

    public function createOpportunity($id)
    {
        $company = CompanyLib::getById($id);

        if(!$company) {
           return redirect()->route('internshipcompany.list')->with('flash', [
               'type' => 'danger',
               'message' => 'Invalid Company'
           ]);
        }

        return view('admin.internship_company.opportunity', [ 'company' => $company]);
    }

    public function storeOpportunity($id, Request $request)
    {
        $company = CompanyLib::getById($id);

        if(!$company) {
           return redirect()->route('internshipcompany.list')->with('flash', [
               'type' => 'danger',
               'message' => 'Invalid Company'
           ]);
        }

        $opportunity = new Opportunity();
        $opportunity->company_id = $id;
        $opportunity->opportunity_name = $request['opportunity_name'];
        $opportunity->status = "Inactive";
        $opportunity->save();

        $success = array('ok'=> 'Success');
        
        return redirect()->route('internship_company.view')->with($success);
    }

    public function deleteOpportunity($id)
    {

        
        $opportunity = Opportunity::find($id)->delete();
        
            return response()->json([
        'success' => 'Record has been deleted successfully!'
    ]);

    }

    public function deleteQualification($id)
    {

        
        $qualification = Qualification::find($id)->delete();
        
            return response()->json([
        'success' => 'Record has been deleted successfully!'
    ]);

    }

    public function enableOpportunity($id)
    {

        
        $opportunity = Opportunity::find($id);

        if($opportunity->status = "Inactive")
        {
        $opportunity->status = "Active";
        $opportunity->save();
        }
        
            return response()->json([
        'success' => 'Record has been deleted successfully!'
    ]);

    }

    public function disableOpportunity($id)
    {

        
        $opportunity = Opportunity::find($id);


        if($opportunity->status = "Active"){
        $opportunity->status = "Inactive";
        $opportunity->save();
        }
            return response()->json([
        'success' => 'Record has been deleted successfully!'
    ]);

    }

    public function disableQualification($id)
    {

        
        $qualification = Qualification::find($id);
        if($qualification->status = "Active"){
        $qualification->status = "Inactive";
        $qualification->save();}
        
            return response()->json([
        'success' => 'Record has been deleted successfully!'
    ]);

    }
    public function enableQualification($id)
    {

        
        $qualification = Qualification::find($id);
        if($qualification->status = "Inactive"){
        $qualification->status = "Active";
        $qualification->save();}
        
            return response()->json([
        'success' => 'Record has been deleted successfully!'
    ]);

    }


    

    public function createQualification($id)
    {
        $company = CompanyLib::getById($id);

        if(!$company) {
           return redirect()->route('internshipcompany.list')->with('flash', [
               'type' => 'danger',
               'message' => 'Invalid Qualification'
           ]);
        }

        return view('admin.internship_company.qualification', [ 'company' => $company]);
    }
    
    public function storeQualification($id, Request $request)
    {
        $company = CompanyLib::getById($id);

        if(!$company) {
           return redirect()->route('internshipcompany.list')->with('flash', [
               'type' => 'danger',
               'message' => 'Invalid Qualification'
           ]);
        }

        $qualification = new Qualification();
        $qualification->company_id = $id;
        $qualification->qualification = $request['qualification'];
        $qualification->status = "Inactive";
        $qualification->save();

        $success = array('ok'=> 'Success');
        
        return redirect()->route('internshipcompany.list')->with($success);
    }

    public function createindustry($id)
    {
        $company = CompanyLib::getById($id);
        return view('admin.internship_company.industry', compact('company'));
    }

    public function storeindustry($id, Request $request)
    {

        $company = CompanyLib::getById($id);

        $industry = new InternshipIndustry;
        $industry->industry_name = $request['industry_name'];
        $industry->company_id = $id;
        $industry->save();
        $success = array('ok'=> 'Success');
        return redirect()->route('internshipcompany.list')->with($success);
    }

    public function viewTrash(){
        $company = InternshipCompany::onlyTrashed()->get();
        return view('admin.internship_company.trash', compact('company'));
    }


    public function restoreTrash($id){
        $company = InternshipCompany::withTrashed()
        ->where('id', $id)
        ->restore();
        $success = array('ok'=> 'Successfully Restored');
        return redirect()->back()->with($success);
    }


    
}
