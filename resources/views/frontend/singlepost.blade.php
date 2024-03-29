@extends('layouts.frontend')
@section('meta')
  <meta property="og:url" content="{{Request::fullUrl()}}" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{ $post->title_bn }}" />
  <meta property="og:description" content="{{ $post->details_bn }}" />
  <meta property="og:image" content="{{URL::to($post->image)}}" />
@endsection

@section('content')

	<!-- single-page-start -->
	<section class="single-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">   
					   <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a></li>					   
						<li>
                            <a href="#">
                                @if(session()->get('language') == 'English')
							         {{ $post->category_en }}
                                @else
                                     {{ $post->category_bn }}
                                @endif
                            </a>
                        </li>
						<li>
                            <a href="#">
                                @if(session()->get('language') == 'English')
                                    {{ $post->subcategory_en }}
                                @else
                                    {{ $post->subcategory_bn }}
                                @endif
                            </a>
                        </li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12"> 											
					<header class="headline-header margin-bottom-10">
						<h1 class="headline">
                            @if(session()->get('language') == 'English')
								{{ $post->title_en }}
							@else
								{{ $post->title_bn }}
							@endif
                        </h1>
					</header>
		 
		 
				 <div class="article-info margin-bottom-20">
				  <div class="row">
						<div class="col-md-6 col-sm-6"> 
						 <ul class="list-inline">
						 <li>{{$post->name}}</li>
                         <li><i class="fa fa-clock-o"></i> {{ $post->post_date }}</li>
						 </ul>
						
						</div>
						<div class="col-md-6 col-sm-6 pull-right"> 						
												   
						</div>						
					</div>				 
				 </div>				
			</div>
		  </div>
		  <!-- ******** -->
		  <div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="single-news">
					<img src="{{asset($post->image)}}" alt="{{ $post->title_bn }}"/>
					<h4 class="caption"> 
                        @if(session()->get('language') == 'English')
								{{ $post->title_en }}
                        @else
                            {{ $post->title_bn }}
                        @endif
						<br><br><div class="sharethis-inline-share-buttons" data-href="{{Request::url()}}"></div><br>
                    </h4>
					<p>
                        @if(session()->get('language') == 'English')
                        {!! $post->details_en !!}
                        @else
                            {!! $post->details_bn !!}
                        @endif 
                    </p>
				</div>

				<div class="comment-section " style="width: 100%;"> 
					<!-- Begin .title-style01 -->
					<div class=" comment-title title-style01 ">
					  <h4> Comments</h4>
					</div>
					<!-- End .title-style01 -->
					
					<div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>	
					</div>
				</div><hr>

				@php
				$latest=DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
				$favourite=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(8)->get();
				$highest=DB::table('posts')->inRandomOrder()->orderBy('id','ASC')->limit(8)->get();
			@endphp

			<div class="col-md-4 col-sm-4">
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{asset('public/frontend/assets/img/add_01.jpg')}}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
                    <div class="tab-header">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">
								@if(session()->get('language') == 'English')
							          	Latest News
							    @else
							          	সর্বশেষ
							    @endif</a>
							</li>
							<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">
								@if(session()->get('language') == 'English')
							          	Favourite
							    @else
							          	জনপ্রিয়
							    @endif</a>
							</li>
							<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">
								@if(session()->get('language') == 'English')
							          	Highest Read
							    @else
							          	পঠিত 
							    @endif</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content ">
							<div role="tabpanel" class="tab-pane in active" id="tab21">
								<div class="news-titletab">
									@foreach($latest as $row)

									    <div class="news-title-02">
										    <h4 class="heading-03"><a href="">
										    		@if(session()->get('language') == 'English')
							          					{{ $row->title_en }}
												    @else
												          	{{ $row->title_bn }}
												    @endif
										    </a> </h4>
								     	</div>
								    @endforeach
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab22">
								<div class="news-titletab">
									@foreach($favourite as $row)

									    <div class="news-title-02">
										    <h4 class="heading-03"><a href="">
										    		@if(session()->get('language') == 'English')
							          					{{ $row->title_en }}
												    @else
												          	{{ $row->title_bn }}
												    @endif
										    </a> </h4>
								     	</div>
								    @endforeach
								</div>                                          
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab23">	
								<div class="news-titletab">
								
									@foreach($highest as $row)

									    <div class="news-title-02">
										    <h4 class="heading-03"><a href="">
										    		@if(session()->get('language') == 'English')
							          					{{ $row->title_en }}
												    @else
												          	{{ $row->title_bn }}
												    @endif
										    </a> </h4>
								     	</div>
								    @endforeach
								<div>						                                          
							</div>
						</div>
					</div>
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{asset('public/frontend/assets/img/add_01.jpg')}}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
			</div>
		  </div>
	
			</div>
			@php
			$more=DB::table('posts')->where('cat_id',$post->cat_id)->orderBy('id','DESC')->limit(6)->get();
		 @endphp
		 <!-- ********* -->
		 <div class="row">
			 <div class="col-md-12">
			 <h2 class="heading">
				 @if(session()->get('language') == 'English')
					 More News
				 @else
					 আরো সংবাদ
				 @endif
			 </h2>
		 </div><hr>
		  @foreach( $more as $row)	
			 @php
				 $slug=preg_replace('/\s+/u', '-', trim($row->title_bn));
			 @endphp
				 <div class="col-md-4 col-sm-4">
					 <div class="top-news sng-border-btm">
						 <a href="{{ URL::to('view-post/'.$row->id.'/'.$slug) }}">
							 <img src="{{ asset($row->image) }}" alt="{{ $row->title_bn }}">
						 </a>
						 <h4 class="heading-02" style="height: 60px;">
							 <a href="{{ URL::to('view-post/'.$row->id.'/'.$slug) }}">
								 @if(session()->get('language') == 'English')
									 {{ $row->title_en }}
								 @else
								 {{ $row->title_bn }}
								 @endif
							 </a> 
						 </h4>
					 </div>
				 </div>
		 @endforeach
		 </div>
        
		</div>
	</section>

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=614108756891346&autoLogAppEvents=1" nonce="4Y7Qiinr"></script>

	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=631b0cdeabecf600135ed5b7&product=inline-share-buttons" async="async" data-href="{{Request::url()}}"></script>
    @endsection