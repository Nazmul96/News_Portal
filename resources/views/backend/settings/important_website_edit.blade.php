@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Important Website</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Important Website</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title active">Edit Important Website</h2>
                      <ol class="float-sm-right">
                        <a class="btn btn-success" href="{{route('important_website')}}"><i class="fa fa-list"></i>Important Website List</a>
                      </ol>
                    </div>
                    <!-- /.card-header -->
            <div class="card-body">
             <form action="{{ route('important_website_update',$data->id) }}" method="Post">
              @csrf
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleInputEmail1">Website Name Bangla</label>
                   <input type="text" class="form-control @error('website_name_bn') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="website_name_bn" required="" value="{{$data->website_name_bn}}">
                     @error('website_name_bn')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		              @enderror
                 </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Website Name English</label>
                  <input type="text" class="form-control @error('website_name_en') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="website_name_en" required="" value="{{$data->website_name_en}}">
                    @error('website_name_en')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleInputPassword1">Website Link</label>
                   <input type="text" class="form-control @error('website_link') is-invalid @enderror" id="bangla" name="website_link" required="" value="{{$data->website_link}}">
                      @error('website_link')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		          @enderror
                 </div>
              </div>
       
              <button type="submit" class="btn btn-info">Update</button>
             </form>
        
            </div>
            </div>
            </div>
        </div>
      </div>     
      </section>
</div>
@endsection