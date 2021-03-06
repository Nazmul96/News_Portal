@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Video gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Video gallery</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Video gallery</h3>
          <button class="btn btn-info btn-sm" style="float: right;"  data-toggle="modal" data-target="#modal-default">Add New</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL</th>
              <th>Title</th>
              <th>Type</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
           @foreach($video as $key=>$row)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{ $row->title }}</td>
              <td>
                @if($row->type == 1)
                      <span class="badge badge-success">Big Video</span>
                      @else
                      <span class="badge badge-info">Small Video</span>
                      @endif
              </td>
              <td>
                    <a href="{{route('video_edit',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                    <a href="{{route('video_delete',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> </a>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>

      <!--category added modal-->
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Insert New Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="{{route('video_store')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="title" required="">
                      @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Embed Code</label>
                   <input type="text" class="form-control" id="english" aria-describedby="emailHelp" name="embed_code" required="">
                     
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Type</label>
                  <select class="form-control" name="type" required>
                        <option value="1">Big Video</option>
                        <option value="0">Small Video</option>
                  </select>
                     
                  </div>
         
                <button type="submit" class="btn btn-success btn-block">Submit</button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

</div>
@endsection