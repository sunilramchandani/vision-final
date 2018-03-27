@extends('layouts.master')

@section('page-css')
<link rel="stylesheet" href="{{ asset('css/faq.css') }}">
@stop

@include('layouts.navbar')

@section('content')
<div class = "whole-page">
@foreach($featuredimage_faq as $featured)
	<img src="{{ URL::asset('image/uploaded_featured_image')}}/{{$featured->main_image}}" class="header">
@endforeach

    <img src="{{ URL::asset('image/Arrow.png')}}" class="img img-border" alt="Company Banner">
    <img src="{{ URL::asset('image/img-line.png')}}" class="img img-responsive img-line" alt="Company Banner">

    <!-- FAQ header -->
    <div class="container">
        <div class="about row">
            <div class="col-xs-12 col-md-offset-4 col-md-4 text-center FAQ-font">
                <h3>Frequently Asked Questions </h3>
                <p>We understand that this is a huge step in your life. Here are the answers to some of your most pressing questions and concerns.</p>
            </div>
        </div>
    </div>

   

	
	<div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
            	<!-- VIDEO -->
        	    <div class="row">
		            <div class="video-div">
						<iframe class = "video-class"
						src="https://www.youtube.com/embed/-GOOqni12e0" frameborder="0" allowfullscreen>
						</iframe>			
					</div>
				</div>
            	<!--Internship -->
            	<div class = "aupair" id = "US Internship">
            		<h4 class = "faq-header">US Internship</h4>
	            	@foreach ($us_internship as $us_internship)
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash{{$us_internship->faq_id}}" class = "down{{$us_internship->faq_id}}"> 
						                   <p><i class="fa fa-angle-right red" aria-hidden="true"></i> {!!$us_internship->question!!}</p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash{{$us_internship->faq_id}}" class="panel-collapse collapse bg-nav navbar-content">
						            <p>{!!$us_internship->answer!!}</p>
						        </div>    
						    </div>  
						</div>
					@endforeach
				</div>
				<!--Spring -->
				<div class = "spring" id = "US W&T Spring">
            		<h4 class = "faq-header">Spring Work & Travel</h4>
	            	@foreach ($spring as $spring)
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash{{$spring->faq_id}}" class = "down{{$spring->faq_id}}"> 
						                   <p><i class="fa fa-angle-right red" aria-hidden="true"></i> {!!$spring->question!!}</p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash{{$spring->faq_id}}" class="panel-collapse collapse bg-nav navbar-content">
						            <p>{!!$spring->answer!!}</p>
						        </div>    
						    </div>  
						</div>
					@endforeach
				</div>
				<!--Summer -->
				<div class = "summer" id = "US W&T Summer">
            		<h4 class = "faq-header">Summer Work & Travel</h4>
	            	@foreach ($summer as $summer)
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash{{$summer->faq_id}}" class = "down{{$summer->faq_id}}"> 
						                   <p><i class="fa fa-angle-right red" aria-hidden="true"></i>  {!!$summer->question!!}</p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash{{$summer->faq_id}}" class="panel-collapse collapse bg-nav navbar-content">
						            <p>{!!$summer->answer!!}</p>
						        </div>    
						    </div>  
						</div>
					@endforeach
				</div>
				<!--aupair -->
				<div class = "aupair" id = "US AuPair">
            		<h4 class = "faq-header">Au Pair</h4>
	            	@foreach ($aupair as $aupair)
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash{{$aupair->faq_id}}" class = "down{{$aupair->faq_id}}"> 
						                    <p><i class="fa fa-angle-right red" aria-hidden="true"></i> {!!$aupair->question!!}</p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash{{$aupair->faq_id}}" class="panel-collapse collapse bg-nav navbar-content">
						            <p>{!!$aupair->answer!!}</p>
						        </div>    
						    </div>  
						</div>
					@endforeach
				</div>
				<!--skilled-->
				<div class = "aupair" id = "AUS Skilled Work Visa">
            		<h4 class = "faq-header">Skilled Work Visa</h4>
	            	@foreach ($skilled as $skilled)
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash{{$skilled->faq_id}}" class = "down{{$skilled->faq_id}}"> 
						                    <p><i class="fa fa-angle-right red" aria-hidden="true"></i> {!!$skilled->question!!}</p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash{{$skilled->faq_id}}" class="panel-collapse collapse bg-nav navbar-content">
						            <p>{!!$skilled->answer!!}</p>
						        </div>    
						    </div>  
						</div>
					@endforeach
				</div>
				<!--AUS Internship -->
				<div class = "aupair" id = "AUS Internship">
            		<h4 class = "faq-header">AUS Internship</h4>
	            	@foreach ($aus_internship as $aus_internship)
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash{{$aus_internship->faq_id}}" class = "down{{$aus_internship->faq_id}}"> 
						                    <p><i class="fa fa-angle-right red" aria-hidden="true"></i> {!!$aus_internship->question!!}</p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash{{$aus_internship->faq_id}}" class="panel-collapse collapse bg-nav navbar-content">
						            <p>{!!$aus_internship->answer!!}</p>
						        </div>    
						    </div>  
						</div>
					@endforeach
				</div>
				<!--Refund-->
				<div class = "aupair" id = "Refunds">
            		<h4 class = "faq-header">Refunds</h4>
	            	@foreach ($refunds as $refunds)
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash{{$refunds->faq_id}}" class = "down{{$refunds->faq_id}}"> 
						                    <p><i class="fa fa-angle-right red" aria-hidden="true"></i> {!!$refunds->question!!}</p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash{{$refunds->faq_id}}" class="panel-collapse collapse bg-nav navbar-content">
						            <p>{!!$refunds->answer!!}</p>
						        </div>    
						    </div>  
						</div>
					@endforeach
				</div>
			</div>
			<!--FILTER -->
		    <div class = "hidden-xs hidden-sm col-md-4 categories-sidebar">
		    	<div class = "col-xs-12">
		        <table class="table table-categories table-borderless table-hover">
		          <thead bgcolor="#800000">
		            <tr>
		              <th class = "header-table text-center">CATEGORIES</th>
		              <th class = "header-table text-center"></th>
		            </tr>
		          </thead>
		          <tbody>
		          	@foreach ($faq_types as $faq_type)
		            <tr class='clickable-row' data-href='/faq?#{{$faq_type}}'>
		              <td>{{$faq_type}}</td>
		              @if ($faq_type == "US Internship")
		              	<td>{{$us_internship_count}}</a></td>
		              @endif
		              @if ($faq_type == "US W&T Summer")  	
		              	<td>{{$summer_count}}</a></td>   	
		              @endif
		              @if ($faq_type == "US W&T Spring")
		              	<td>{{$spring_count}}</a></td>
		              @endif
		              @if ($faq_type == "US AuPair")		             
		              	<td>{{$aupair_count}}</a></td>
		              @endif
		              @if ($faq_type == "AUS Skilled Work Visa")		             
		              	<td>{{$skilled_count}}</a></td>
		              @endif
		              @if ($faq_type == "AUS Internship")		             
		              	<td>{{$aus_internship_count}}</a></td>
		              @endif
		              @if ($faq_type == "Refunds")		             
		              	<td>{{$refunds_count}}</a></td>
		              @endif
		            </tr>
		            @endforeach
		          </tbody>
		        </table>    
		    </div>
		</div>
	</div>



</div>
<div class = "row">
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
	  $('.down').click(function(){
        if ($(this).find('i').hasClass('fa-chevron-circle-right')){
            $('.down').find('i').removeClass('fa-chevron-circle-right');
    
            $('.down').find('i').addClass('fa-chevron-circle-down');
        }
        else{
            $('.down').find('i').removeClass('fa-chevron-circle-down');
    
            $('.down').find('i').addClass('fa-chevron-circle-right');
        }
});
</script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>

  jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
  });
</script>
