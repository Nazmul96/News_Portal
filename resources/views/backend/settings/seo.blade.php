@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SEO Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SEO Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-6">
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">SEO setting</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('seo_update',$seo->id)}}" method="Post">
                    @csrf
                  <div class="card-body">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input type="text" class="form-control " value="{{ $seo->meta_author }}" aria-describedby="emailHelp" name="meta_author" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meta Title</label>
                        <input type="text" class="form-control " value="{{ $seo->meta_title }}" aria-describedby="emailHelp" name="meta_title" required="">
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Meta Keyword</label>
                        <input type="text" class="form-control " value="{{ $seo->meta_keyword }}" aria-describedby="emailHelp" name="meta_keyword" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meta Description</label>
                        <input type="text" class="form-control " value="{{ $seo->meta_description }}" aria-describedby="emailHelp" name="meta_description" required="">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Google Analytics</label>
                        <input type="text" class="form-control " value="{{ $seo->google_analytics }}" aria-describedby="emailHelp" name="google_analytics" required="">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Alexa Analytics</label>
                        <input type="text" class="form-control " value="{{ $seo->alexa_analytics }}" aria-describedby="emailHelp" name="alexa_analytics" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Google Verification</label>
                        <input type="text" class="form-control " value="{{ $seo->google_verification }}" aria-describedby="emailHelp" name="google_verification" required="">
                      </div>
                     
               
                 </div>
                  <button type="submit" class="btn btn-success btn-block">Update</button>
                </form>
      
                </div>
            </div>
          
          </div>
          
        </div>
      </section>           

</div>
@endsection   