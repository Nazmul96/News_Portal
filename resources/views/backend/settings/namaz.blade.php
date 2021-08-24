@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Namaz Time Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Namaz Time Settings</li>
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
                    <h3 class="card-title">Namaz Time Settings</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('namaz_update',$namaz->id)}}" method="Post">
                    @csrf
                  <div class="card-body">  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fajr</label>
                        <input type="text" class="form-control " value="{{ $namaz->fajr }}" aria-describedby="emailHelp" name="fajr" required="">
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Johr</label>
                        <input type="text" class="form-control " value="{{ $namaz->johr }}" aria-describedby="emailHelp" name="johr" required="">
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Asor</label>
                        <input type="text" class="form-control " value="{{ $namaz->asor }}" aria-describedby="emailHelp" name="asor" required="">
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">magrib</label>
                        <input type="text" class="form-control " value="{{ $namaz->magrib }}" aria-describedby="emailHelp" name="magrib" required="">
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Esha</label>
                        <input type="text" class="form-control " value="{{ $namaz->esha }}" aria-describedby="emailHelp" name="esha" required="">
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Jummah</label>
                        <input type="text" class="form-control " value="{{ $namaz->jummah }}" aria-describedby="emailHelp" name="jummah" required="">
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