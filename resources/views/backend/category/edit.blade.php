@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
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
                      <h2 class="card-title active">Edit category</h2>
                      <ol class="float-sm-right">
                        <a class="btn btn-success" href="{{route('category_index')}}"><i class="fa fa-list"></i>Category List</a>
                      </ol>
                    </div>
                    <!-- /.card-header -->
            <div class="card-body">
             <form action="{{ route('category_update',$category->id) }}" method="Post">
              @csrf
              <div class="form-row"> 
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Category Name English</label>
                  <input type="text" class="form-control " value="{{ $category->category_en }}" aria-describedby="emailHelp" name="category_en" required="">
                </div>
              </div>
              <div class="form-row"> 
                <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Category Name Bangla</label>
                <input type="text" class="form-control " value="{{ $category->category_bn }}"  name="category_bn" required="">
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