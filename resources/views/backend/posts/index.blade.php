@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">All Posts</li>
            </ol>
          </div><!-- /.col -->
         </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
     <div class="card">
        <div class="card-header">
          <h3 class="card-title"> All Posts Table</h3>
          <a class="btn btn-info btn-sm" style="float: right;" href="{{route('post_create')}}">Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>SL</th>
                <th>Category </th>
                <th>SubCategory </th>
                <th>Title </th>
                <th>Thumbnail</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
           @foreach($post as $key=>$row)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{ $row->category_bn }}</td>
              <td>{{ $row->subcategory_bn }}</td>
              <td>{{ $row->title_bn}}</td>
              <td><img src="{{URL::to($row->image)}}" style="height:60px; width: 60px;"></td>
              <td>{{ $row->post_date}}</td> 
              <td>   
                <a href="{{route('post_edit',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                    <a href="{{route('post_delete',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> </a>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>

      
 </div>

</div>
@endsection