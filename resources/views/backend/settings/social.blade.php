@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Social Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Social Setting</li>
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
                    <h3 class="card-title">Social setting</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('social_update',$social->id)}}" method="Post">
                    @csrf
                  <div class="card-body">  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" class="form-control " value="{{ $social->facebook }}" aria-describedby="emailHelp" name="facebook" required="">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="text" class="form-control " value="{{ $social->twitter }}" aria-describedby="emailHelp" name="twitter" required="">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Linkedin</label>
                    <input type="text" class="form-control " value="{{ $social->linkedin }}" aria-describedby="emailHelp" name="linkedin" required="">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" class="form-control " value="{{ $social->instagram }}" aria-describedby="emailHelp" name="instagram" required="">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Youtube</label>
                    <input type="text" class="form-control " value="{{ $social->youtube }}" aria-describedby="emailHelp" name="youtube" required="">
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