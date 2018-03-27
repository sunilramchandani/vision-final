@extends('layouts.master')

@section('page-css')
<link rel="stylesheet" href="{{ asset('css/internship-company.css') }}">
@stop

@include('layouts.navbar')
@section('content')
<form action="" method="post" role="form">
 {{csrf_field()}}
<div class = "col-xs-12 whole-page">

@foreach ($featuredimage_workvisa as $featured)
    <img src="{{ URL::asset('image/uploaded_featured_image')}}/{{$featured->main_image}}" class="img img-responsive img-rounded header" alt="Company Banner">
    <img src="{{ URL::asset('image/Arrow.png')}}" class="img img-border" alt="Company Banner">
    <img src="{{ URL::asset('image/img-line.png')}}" class="img img-responsive img-line" alt="Company Banner">
    <div class = "text-inside-header-picture">
        <div class = "dynamic-text-container">
            <div class ="col-md-4 col-xs-12 dynamic-text-container-box">
                <h4>    {{$featured->main_image_description_header}}  </h4>
                <div class = "col-xs-12 p-title">
                    <H1>  {{$featured->main_image_description}}  </H1>
                </div>
                <div class = "col-xs-12 p-head">
                    <p>{{$featured->main_image_description_footer}}</p>
                </div>
            </div>
@endforeach

        </div>
    </div>
    <!--STRICKY APPLY -->
            <div class = "hidden-xs hidden-sm col-md-3 col-md-offset-9 sticky">
          <div class = "col-xs-6">
            <p> Start an <strong> amazing </strong> future with us</p>
          </div>
          <div class = "col-xs-6 button-apply-sticky">
            <a href = "/application" class = "btn applynow-sticky">Apply Now</a>
          </div>
        </div>
     <!-- END OF STICKY -->
      <div class = "container">
        <div class = "col-xs-12">
            <div class = "row text-center what-next-text">
                <h2 id=whatsnext-title>What is Australian Skilled Migration?</h2>
                <div class = "col-xs-6 col-xs-offset-3">
                    <p id=about-next>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tristique neque. In ullamcorper massa et mauris ullamcorper, a euismod nibh mollis. Ut vitae dignissim metus, eget sollicitudin neque.</p>
                </div>
            </div>
        </div>
          <!--first box -->
     @foreach ($last_step as $step)
        <div class = "row">
            <div class = "col-xs-12">
                <div class = "col-xs-12">
                    <div class=" boxshadow box-1 row">
                        <div class="internship-icon col-xs-12 col-md-6 text-center">
                            <img src="{{URL:: asset('image/uploaded_step_image') }}/{{$step->image}}" class = "application-logo">
                        </div>
                        <div class="intership-content col-xs-12 col-md-6">
                            <div class = "col-md-10 col-md-offset-1 col-xs-12">
                                <p id="p-icon" style = "color: #900603;">{!!$step->image_description!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>   
    <div class = "container">
        <div class = "col-xs-12">
            <div class = "row text-center what-next-text">
                <h2 id=whatsnext-title>What's Next?</h2>
                <p id=about-next>Our process is  smooth and easy. We can facilitate your application</p>
                <p id=about-next>and get you to your dream destination as soon as possible!</p>
            </div>
        </div>
          <!-- number 1 -->
     @foreach ($steps as $step)
        <div class = "row">
            <div class = "col-xs-12">
                <div class = "col-xs-12">
                    <div class="text-center boxshadow box-1 row" 
                    @if ($step->step_number == "1")> 
                        <img src="{{URL:: asset('image/circle.png') }}" class = "number-icon"/>
                    @elseif ($step->step_number == "2")> 
                        <img src="{{URL:: asset('image/circle2.png') }}" class = "number-icon"/>
                    @elseif ($step->step_number == "3")> 
                        <img src="{{URL:: asset('image/circle3.png') }}" class = "number-icon"/>
                    @endif
                        <div class="internship-icon col-xs-12 col-md-6">
                            <img src="{{URL:: asset('image/uploaded_step_image') }}/{{$step->image}}" class = "application-logo">
                            <div class = "col-xs-12">
                                <h1 id=reserve-title>{{$step->image_title}}</h1>
                            </div>
                            <div class = "col-md-10 col-md-offset-1 col-xs-12">
                                <p id="p-icon" style = "color: #900603;">{{$step->image_description}}</p>
                            </div>
                        </div>
                        <div class="intership-content col-xs-12 col-md-6">
                            <div class = "col-xs-12 col-md-offset-1 col-md-10">
                                <p id=p-content>{{$step->description}}</p>
                                <div class="button">
                                    @if ($step->sub_description != null)
                                    <a href= "/faq" class="btn locate-me">{{$step->sub_description}}</a>
                                    @endif
                                    @if ($step->button_name != null)
                                    <br>
                                    <br>
                                    <a href= "/faq" class="btn locate-me">{{$step->button_name}}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
 <!--testimony-->
        <div class="container">
            <div class="row testimony-header">
                <div class=" col-xs-8 col-xs-offset-2 about-font text-center">
                     <h3>Our Community</h3>
                     <p>We are proud to have an amazing community of students and professionals who have received the VIP treatment. Listen to their stories</p>
                </div>
            </div>
            <div class = "row testimony-content">
                <div class = "col-xs-8 testimony-description">
                    <blockquote>
                        This program is one of the challenging experiences, joyful events, and new things that ii've learned and molded me to become a better person
                        <cite>Karissa MArie Salengua</cite>
                        <cite>Work & Travel Program, California</cite>
                    </blockquote>
                </div>
                <div class = "col-xs-4">
                     <img src="{{ URL::asset('image/uploaded_featured_image')}}/joy.png" class="img img-responsive img-rounded testimony-picture" alt="Company Banner"/>
                </div>
            </div>
        </div>
<!--end of testimony -->
</div>
</form>
<div class = "filler row" id = "filler">
</div>
