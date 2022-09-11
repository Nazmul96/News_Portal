@extends('layouts.frontend')

@section('content')

@php
	$first_section_big=DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
	$first_section_small=DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(8)->get();
@endphp
    <!-- 1st-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<div class="row">
						<div class="col-md-1 col-sm-1 col-lg-1"></div>
						@php
							$slug=preg_replace('/\s+/u', '-', trim($first_section_big->title_bn));
						@endphp
						<div class="col-md-10 col-sm-10">
							<div class="lead-news">
								<div class="service-img"><a href="{{URL::to('view-post/'.$first_section_big->id.'/'.$slug)}}"><img src="{{$first_section_big->image}}" alt="Notebook"></a></div>
								<div class="content">
								<h4 class="lead-heading-01"><a href="{{ URL::to('view-post/'.$first_section_big->id.'/'.$slug) }}">
									@if(session()->get('language')== 'English')
									   {{ $first_section_big->title_en }}
							        @else
									   {{ $first_section_big->title_bn }}
							        @endif
								</a> </h4>
								</div>
							</div>
						</div>
						
					</div>
						<div class="row">
							  @foreach($first_section_small as $row)
							  @php
								$slug=preg_replace('/\s+/u', '-', trim($row->title_bn));
							  @endphp
								<div class="col-md-3 col-sm-3">
									<div class="top-news">
										<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug) }}"><img src="{{$row->image}}" alt="Notebook"></a>
										<h4 class="heading-02" style="height:80px;"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug) }}"> 
											@if(session()->get('language')== 'English')
									           {{ $row->title_en }}
							               @else
									           {{ $row->title_bn }}
							               @endif
											</a> </h4>
									</div>
								</div>
							  @endforeach	
						</div>
					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="add"><img src="assets/img/top-ad.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->	
					
					<!-- news-start -->
					<div class="row">
						@php
							$firstcat=DB::table('categories')->first();

							$firstcatpost=DB::table('posts')->where('cat_id',$firstcat->id)->where('bigthumbnail',1)->orderBY('id','DESC')->first();

							$firstcatpostsmall=DB::table('posts')->where('cat_id',$firstcat->id)->where('bigthumbnail',Null)->orderBY('id','DESC')->limit(3)->get();			
						@endphp

						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title">
									@if(session()->get('language')== 'English')
									    {{ $firstcat->category_en }}
							        @else
									    {{ $firstcat->category_bn }}
							        @endif
									<a href="{{ URL::to('post/'.$firstcat->id.'/'.$firstcat->category_bn)}}"><span>
										@if(session()->get('language')== 'English')	
										  <i class="fa fa-angle-double-right"  aria-hidden="true">More</i>
							            @else
										   <i class="fa fa-angle-double-right" aria-hidden="true">আরও	 </i>
							            @endif
									 </span></a> 
								 </div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="#"><img src="{{asset($firstcatpost->image)}}" alt="Notebook"></a>
											<h4 class="heading-02"><a href="#">
											@if(session()->get('language')== 'English')
												{{ $firstcatpost->title_en }}
											@else
												{{ $firstcatpost->title_bn }}
											@endif
										 </a> </h4>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										@foreach($firstcatpostsmall as $row)
										<div class="image-title">
											<a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
											<h4 class="heading-03"><a href="#">
											@if(session()->get('language')== 'English')
												{{ $row->title_en }}
											@else
												{{ $row->title_bn }}
											@endif
										 </a> </h4>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
						@php
							$secondcat=DB::table('categories')->skip(1)->first();

							$secondcatpost=DB::table('posts')->where('cat_id',$secondcat->id)->where('bigthumbnail',1)->orderBY('id','DESC')->first();

							$secondcatpostsmall=DB::table('posts')->where('cat_id',$secondcat->id)->where('bigthumbnail',Null)->orderBY('id','DESC')->limit(3)->get();			
						@endphp

							<div class="bg-one">
								<div class="cetagory-title">
									@if(session()->get('language')== 'English')
									    {{ $secondcat->category_en }}
							        @else
									    {{ $secondcat->category_bn }}
							        @endif
									<a href="{{ URL::to('post/'.$secondcat->id.'/'.$secondcat->category_bn)}}"><span>
										@if(session()->get('language')== 'English')	
										  <i class="fa fa-angle-double-right"  aria-hidden="true">More</i>
							            @else
										   <i class="fa fa-angle-double-right" aria-hidden="true">আরও	 </i>
							            @endif
									 </span></a> 
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="#"><img src="{{asset($secondcatpost->image)}}" alt="Notebook"></a>
											<h4 class="heading-02"><a href="#">
											@if(session()->get('language')== 'English')
												{{ $secondcatpost->title_en }}
											@else
												{{ $secondcatpost->title_bn }}
											@endif
										 </a> </h4>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										@foreach($secondcatpostsmall as $row)
										<div class="image-title">
											<a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
											<h4 class="heading-03"><a href="#">
											@if(session()->get('language')== 'English')
												{{ $row->title_en }}
											@else
												{{ $row->title_bn }}
											@endif
										 </a> </h4>
										</div>
										@endforeach
										
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-md-3 col-sm-3">
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="assets/img/add_01.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->	
					@php
					  $tv=DB::table('livetv')->first();	
					@endphp

					@if($tv->status==1)
					<!-- youtube-live-start -->	
					<div class="cetagory-title-03">
						@if(session()->get('language')=='English')
							LiveTV
						@else
						   লাইভ টিভি 
						@endif
						
					</div>
					<div class="photo">
						<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
							{!! $tv->embed_code !!}
						</div>
					</div><!-- /.youtube-live-close -->	
					@endif
					<!-- facebook-page-start -->
					<div class="cetagory-title-03">ফেসবুকে আমরা</div>
					<div class="fb-root">
						facebook page here
					</div><!-- /.facebook-page-close -->	
					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add">
								<img src="{{asset('public/frontend/assets/img/add_01.jpg')}}" alt="" />
							</div>
						</div>
					</div><!-- /.add-close -->	
				</div>
			</div>
		</div>
	</section><!-- /.1st-news-section-close -->

	<!-- 2nd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
			 @php
				$thirdcat=DB::table('categories')->skip(2)->first();

				$thirdcatpost=DB::table('posts')->where('cat_id',$thirdcat->id)->where('bigthumbnail',1)->orderBY('id','DESC')->first();

				$thirdcatpostsmall=DB::table('posts')->where('cat_id',$thirdcat->id)->where('bigthumbnail',Null)->orderBY('id','DESC')->limit(3)->get();			
			@endphp

				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">
							@if(session()->get('language')== 'English')
							  {{ $thirdcat->category_en }}
							@else
							  {{ $thirdcat->category_bn }}
							@endif
							<a href="{{ URL::to('post/'.$thirdcat->id.'/'.$thirdcat->category_bn)}}"><span>
							  @if(session()->get('language')== 'English')	
									<i class="fa fa-angle-double-right"  aria-hidden="true">More</i>
							 @else
								 <i class="fa fa-angle-double-right" aria-hidden="true">আরও	 </i>
							 @endif
							 </span></a> 
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{asset($thirdcatpost->image)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="#">
										@if(session()->get('language')== 'English')
											{{ $thirdcatpost->title_en }}
										@else
											{{ $thirdcatpost->title_bn }}
										@endif
									 </a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach($thirdcatpostsmall as $row)
									<div class="image-title">
										<a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
										<h4 class="heading-03"><a href="#">
										@if(session()->get('language')== 'English')
											{{ $row->title_en }}
										@else
											{{ $row->title_bn }}
										@endif
										</a> </h4>
										</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-6">
					@php
						$fourthcat=DB::table('categories')->skip(3)->first();

						$fourthcatpost=DB::table('posts')->where('cat_id',$fourthcat->id)->where('bigthumbnail',1)->orderBY('id','DESC')->first();

						$fourthpostsmall=DB::table('posts')->where('cat_id',$fourthcat->id)->where('bigthumbnail',Null)->orderBY('id','DESC')->limit(3)->get();			
					@endphp

					<div class="bg-one">
						<div class="cetagory-title-02">
							@if(session()->get('language')== 'English')
							  {{ $fourthcat->category_en }}
							@else
							  {{ $fourthcat->category_bn }}
							@endif
							<a href="{{ URL::to('post/'.$fourthcat->id.'/'.$fourthcat->category_bn)}}"><span>
							  @if(session()->get('language')== 'English')	
									<i class="fa fa-angle-double-right"  aria-hidden="true">More</i>
							 @else
								 <i class="fa fa-angle-double-right" aria-hidden="true">আরও	 </i>
							 @endif
							 </span></a> 
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{asset($fourthcatpost->image)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="#">
										@if(session()->get('language')== 'English')
											{{ $fourthcatpost->title_en }}
										@else
											{{ $fourthcatpost->title_bn }}
										@endif
									 </a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach($fourthpostsmall as $row)
									<div class="image-title">
										<a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
										<h4 class="heading-03"><a href="#">
										@if(session()->get('language')== 'English')
											{{ $row->title_en }}
										@else
											{{ $row->title_bn }}
										@endif
										</a> </h4>
										</div>
								@endforeach
								
							</div>
						</div>
				</div>
			</div>
			<!-- ******* -->
			<div class="row">
				@php
					$fifthcat=DB::table('categories')->skip(4)->first();

					$fifthcatpost=DB::table('posts')->where('cat_id',$fifthcat->id)->where('bigthumbnail',1)->orderBY('id','DESC')->first();

					$fifthpostsmall=DB::table('posts')->where('cat_id',$fifthcat->id)->where('bigthumbnail',Null)->orderBY('id','DESC')->limit(3)->get();			
				@endphp
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">
							@if(session()->get('language')== 'English')
							  {{ $fifthcat->category_en }}
							@else
							  {{ $fifthcat->category_bn }}
							@endif
							<a href="{{ URL::to('post/'.$fifthcat->id.'/'.$fifthcat->category_bn)}}"><span>
							  @if(session()->get('language')== 'English')	
									<i class="fa fa-angle-double-right"  aria-hidden="true">More</i>
							 @else
								 <i class="fa fa-angle-double-right" aria-hidden="true">আরও	 </i>
							 @endif
							 </span></a> 
						</div>
						<div class="row">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="top-news">
										<a href="#"><img src="{{asset($fifthcatpost->image)}}" alt="Notebook"></a>
										<h4 class="heading-02"><a href="#">
											@if(session()->get('language')== 'English')
												{{ $fifthcatpost->title_en }}
											@else
												{{ $fifthcatpost->title_bn }}
											@endif
										 </a> </h4>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									@foreach($fifthpostsmall as $row)
										<div class="image-title">
											<a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
											<h4 class="heading-03"><a href="#">
											@if(session()->get('language')== 'English')
												{{ $row->title_en }}
											@else
												{{ $row->title_bn }}
											@endif
											</a> </h4>
											</div>
									@endforeach
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-6">
					@php
						$sixthcat=DB::table('categories')->skip(5)->first();

						$sixthcatpost=DB::table('posts')->where('cat_id',$sixthcat->id)->where('bigthumbnail',1)->orderBY('id','DESC')->first();

						$sixthpostsmall=DB::table('posts')->where('cat_id',$sixthcat->id)->where('bigthumbnail',Null)->orderBY('id','DESC')->limit(3)->get();			
				   @endphp

					<div class="bg-one">
						<div class="cetagory-title-02">
							@if(session()->get('language')== 'English')
							  {{ $sixthcat->category_en }}
							@else
							  {{ $sixthcat->category_bn }}
							@endif
							<a href="{{ URL::to('post/'.$sixthcat->id.'/'.$sixthcat->category_bn)}}"><span>
							  @if(session()->get('language')== 'English')	
									<i class="fa fa-angle-double-right"  aria-hidden="true">More</i>
							 @else
								 <i class="fa fa-angle-double-right" aria-hidden="true">আরও	 </i>
							 @endif
							 </span></a> 
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{asset($sixthcatpost->image)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="#">
										@if(session()->get('language')== 'English')
											{{ $sixthcatpost->title_en }}
										@else
											{{ $sixthcatpost->title_bn }}
										@endif
									 </a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach($sixthpostsmall as $row)
									<div class="image-title">
										<a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
										<h4 class="heading-03"><a href="#">
										@if(session()->get('language')== 'English')
											{{ $row->title_en }}
										@else
											{{ $row->title_bn }}
										@endif
										</a> </h4>
										</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- add-start -->	
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{asset('public/frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{asset('public/frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
				</div>
			</div><!-- /.add-close -->	
			
		</div>
	</section><!-- /.2nd-news-section-close -->
@php

    $country_big=DB::table('posts')->whereNotNull('district_id')->orderBY('id','DESC')->first();
	
	$country_first_three=DB::table('posts')->whereNotNull('district_id')->skip(1)->orderBY('id','DESC')->limit(3)->get();

	$country_last_three=DB::table('posts')->whereNotNull('district_id')->skip(4)->orderBY('id','DESC')->limit(3)->get();

@endphp
	<!-- 3rd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<div class="cetagory-title-02">
						@if(session()->get('language')== 'English')
						Country
						@else
						সারাদেশে
						@endif
						<a href="#"><span>
						@if(session()->get('language')== 'English')	
						<i class="fa fa-angle-double-right"  aria-hidden="true">More</i>
						@else
						<i class="fa fa-angle-double-right" aria-hidden="true">আরও	 </i>
						@endif
					 </span></a> 
					</div>
					@php
						$divisions=DB::table('divisions')->get();
					@endphp
					<div class="row">
						<form action="{{ route('saradesh.news') }}" method="get">
							@csrf
							<div class="row">
								<div class="col-lg-4">
									<select class="form-control" name="division_id" id="division_id" required>
											<option selected="">==choose one==</option>
											@foreach($divisions as $row)
											<option value="{{ $row->id }}">{{ $row->division_bn }}</option>
											@endforeach
									</select>
								</div>
									<div class="col-lg-4">
									<select class="form-control" name="district_id" id="district_id" required>
											<option selected="">==choose one==</option>
									</select>
								</div>
									<div class="col-lg-4">
									<button class="btn btn-success btn-block" type="submit"> খুজুন</button>
								</div>
							</div>
					   </form>
					   <hr>
						<div class="col-md-4 col-sm-4">
							<div class="top-news">
								<a href="#"><img src="{{asset($country_big->image)}}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">
									@if(session()->get('language')== 'English')
										{{ $country_big->title_en }}
									@else
										{{ $country_big->title_bn }}
									@endif
								 </a> </h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
						  @foreach($country_first_three as $row)
							<div class="image-title">
								<a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">
									@if(session()->get('language')== 'English')
										{{ $row->title_en }}
									@else
										{{ $row->title_bn }}
									@endif
								 </a> </h4>
							</div>
						  @endforeach	
						</div>
						<div class="col-md-4 col-sm-4">
							@foreach($country_last_three as $row)
							<div class="image-title">
								<a href="#"><img src="{{asset($row->image)}}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">
									@if(session()->get('language')== 'English')
										{{ $row->title_en }}
									@else
										{{ $row->title_bn }}
									@endif
								 </a> </h4>
							</div>
						  @endforeach
						</div>
					</div>
					<!-- ******* -->
					<br />
		
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="cetagory-title-02"><a href="#">সারাদেশে  <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="bg-gray">
								<div class="top-news">
									<a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
							</div>
						</div>
					
						<div class="col-md-4 col-sm-4">
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add">
								<img src="{{asset('public/frontend/assets/img/top-ad.jpg')}}" alt="" />
							</div>
						</div>
					</div><!-- /.add-close -->	


				</div>

				@php
				$latest=DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
				$favourite=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(8)->get();
				$highest=DB::table('posts')->inRandomOrder()->orderBy('id','ASC')->limit(8)->get();
				@endphp

				<div class="col-md-3 col-sm-3">
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
										@php
										$slug=preg_replace('/\s+/u', '-', trim($row->title_bn));
									    @endphp
									    <div class="news-title-02">
										    <h4 class="heading-03"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug) }}">
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
										@php
										$slug=preg_replace('/\s+/u', '-', trim($row->title_bn));
										@endphp
									    <div class="news-title-02">
										    <h4 class="heading-03"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug) }}">
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
										@php
										$slug=preg_replace('/\s+/u', '-', trim($row->title_bn));
										@endphp
									    <div class="news-title-02">
										    <h4 class="heading-03"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug) }}">
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
					<!-- Namaj Times -->
					@php
					$prayer=DB::table('namaz')->first();
					@endphp
					<div class="cetagory-title-03">
						@if(session()->get('language')=='English')
						Prayer times
						@else
						নামাজের সময়সূচি 
						@endif
					</div>
					<table class="table">
						<tr>
							<th>
							@if(session()->get('language')== 'English')
							  Fajr
							@else
							  ফজর 
							@endif
							</th>
							<th>
							@if(session()->get('language')== 'English')
								{{$prayer->fajr}}
							@else
							{{$prayer->fajr_bn}}
							@endif
							</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('language')== 'English')
							  Johr
							@else
							  যোহর 
							  @endif
							</th>
							<th>
							@if(session()->get('language')== 'English')
								{{$prayer->johr}}
							@else
								{{$prayer->johr_bn}}
							@endif
							</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('language')== 'English')
							  Asor
							@else
							  আছর 
							  @endif
							</th>
							<th>
							@if(session()->get('language')== 'English')
								{{$prayer->asor}}
							@else
								{{$prayer->asor_bn}}
							@endif
							</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('language')== 'English')
							  Magrib
							@else
							  মাগরিব  
							  @endif
							</th>
							<th>
							@if(session()->get('language')== 'English')
								{{$prayer->magrib}}
							@else
							    {{$prayer->magrib_bn}}
							@endif
							</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('language')== 'English')
							  Esha
							@else
							  এশা 
							  @endif
							</th>
							<th>
							@if(session()->get('language')== 'English')
								{{$prayer->esha}}
							@else
								{{$prayer->esha_bn}}
							@endif
							</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('language')== 'English')
							  Jummah
							@else  
							  জুম্মা
							@endif
							</th>
							<th>
							@if(session()->get('language')== 'English')
								{{$prayer->jummah}}
							@else
								{{$prayer->jummah_bn}}
							@endif
							</th>
						</tr>
					</table>
					<!-- Namaj Times -->
					<div class="cetagory-title-03">পুরানো সংবাদ  </div>
					<form action="" method="post">
						<div class="old-news-date">
						   <input type="text" name="from" placeholder="From Date" required="">
						   <input type="text" name="" placeholder="To Date">			
						</div>
						<div class="old-date-button">
							<input type="submit" value="খুজুন ">
						</div>
				   </form>
				   <!-- news -->
				   <br><br><br><br><br>
				   <div class="cetagory-title-04">
					@if(session()->get('language')=='English')
					Important Websites
					@else
					গুরুত্বপূর্ণ ওয়েবসাইট
					@endif 
				    </div>
					@php
					  $website=DB::table('important_websites')->get(); 
					@endphp
				   <div class="">
					@foreach($website as $row)
				   	<div class="news-title-02">
				   		<h4 class="heading-03"><a href="{{$row->website_link}}"><i class="fa fa-check" aria-hidden="true"></i>
						@if(session()->get('language')=='English')
							{{$row->website_name_en}}
						@else
						    {{$row->website_name_bn}}
						@endif
						</a>
					   </h4>
				   	</div>
					@endforeach
				   </div>

				</div>
			</div>
		</div>
	</section><!-- /.3rd-news-section-close -->
	


	


	


	<!-- gallery-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<div class="gallery_cetagory-title"> 
						@if(session()->get('lang') == 'english')
								Photo Gallery
						@else
								ফটো গ্যালারি
						@endif
					</div>
			@php
			$photobig=DB::table('photos')->where('type',1)->orderBy('id','DESC')->first();
			$photosmall=DB::table('photos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
			@endphp
					<div class="row">
	                    <div class="col-md-8 col-sm-8">
	                        <div class="photo_screen">
	                            <div class="myPhotos" style="width:100%">
									<img src="{{ asset($photobig->photo)}}"  alt="Avatar">
							    </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-4">
	                        <div class="photo_list_bg">
								@foreach($photosmall as $row)
	                            <div class="photo_img photo_border active">
	                                <img src="{{ asset($row->photo)}}" alt="image" onclick="currentDiv(1)">
	                                <div class="heading-03">
	                                   {{ $row->title }}
	                                </div>
	                            </div>
	                            @endforeach

	                        </div>
	                    </div>
	                </div>

	                <!--=======================================
                    Video Gallery clickable jquary  start
                ========================================-->

                            <script>
                                    var slideIndex = 1;
                                    showDivs(slideIndex);

                                    function plusDivs(n) {
                                      showDivs(slideIndex += n);
                                    }

                                    function currentDiv(n) {
                                      showDivs(slideIndex = n);
                                    }

                                    function showDivs(n) {
                                      var i;
                                      var x = document.getElementsByClassName("myPhotos");
                                      var dots = document.getElementsByClassName("demo");
                                      if (n > x.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = x.length}
                                      for (i = 0; i < x.length; i++) {
                                         x[i].style.display = "none";
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                                      }
                                      x[slideIndex-1].style.display = "block";
                                      dots[slideIndex-1].className += " w3-opacity-off";
                                    }
                                </script>

                <!--=======================================
                    Video Gallery clickable  jquary  close
                =========================================-->

				</div>
				<div class="col-md-4 col-sm-5">
					<div class="gallery_cetagory-title">
						@if(session()->get('lang') == 'english')
						    Video Gallery
						    
						@else
							ভিডিও  গ্যালারি 
						@endif
					</div>
			@php
			$videobig=DB::table('videos')->where('type',1)->orderBy('id','DESC')->first();
			$videosmall=DB::table('videos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
			@endphp		
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="video_screen">
                                <div class="myVideos" style="width:100%">
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
										<iframe width="853" height="480" src="https://www.youtube.com/embed/{{  $videobig->embed_code }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="gallery_sec owl-carousel">

								@foreach($videosmall as $row)
                                <div class="video_image" style="width:100%" onclick="currentDivs(1)">
                                   <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                    <iframe width="200" height="140" src="https://www.youtube.com/embed/{{  $row->embed_code }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                </div>
                                @endforeach>

                            </div>
                        </div>
                    </div>


                    <script>
                        var slideIndex = 1;
                        showDivss(slideIndex);

                        function plusDivs(n) {
                          showDivss(slideIndex += n);
                        }

                        function currentDivs(n) {
                          showDivss(slideIndex = n);
                        }

                        function showDivss(n) {
                          var i;
                          var x = document.getElementsByClassName("myVideos");
                          var dots = document.getElementsByClassName("demo");
                          if (n > x.length) {slideIndex = 1}
                          if (n < 1) {slideIndex = x.length}
                          for (i = 0; i < x.length; i++) {
                             x[i].style.display = "none";
                          }
                          for (i = 0; i < dots.length; i++) {
                             dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                          }
                          x[slideIndex-1].style.display = "block";
                          dots[slideIndex-1].className += " w3-opacity-off";
                        }
                    </script>

				</div>
			</div>
		</div>
	</section><!-- /.gallery-section-close -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		  $('select[name="division_id"]').on('change', function(){
			  var division_id = $(this).val();
			  if(division_id) {
				  $.ajax({
					  url: "{{  url('/get/subdist/frontend/') }}/"+division_id,
					  type:"GET",
					  dataType:"json",
					  success:function(data) {
						 $("#district_id").empty();
							   $.each(data,function(key,value){
								   $("#district_id").append('<option value="'+value.id+'">'+value.district_bn+'</option>');
							   });
					  },
					 
				  });
			  } else {
				  alert('danger');
			  }
		  });
	  });
 </script>
 
@endsection