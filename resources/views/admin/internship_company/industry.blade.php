@extends('layouts.admin') @section('content-header')
<section class="content-header">
    <h1>
        {{ ucwords(request()->route()->getActionMethod()) }} Internship Company
    </h1>
</section>
@endsection {{--{{ dd($company) }}--}}  @section('content-main')
<section class="content page-news">
    <div class="row">
        <div class="col-xs-12">
            <form action="{{route('internshipcompany.store_industry', $company->id)}}" method="post" role="form"  enctype="multipart/form-data"> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="company_name">
                        Industry
                    </label>
                    <select class ="form-control" name="industry_name" id="industry_name">
                            <option value="Management">Management</option>

                        </select>
                </div>
                <div class="btn-container">
                    <a href="#" class="btn btn-danger pull-right">Cancel</a>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection