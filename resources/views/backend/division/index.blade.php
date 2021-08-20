@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Divisions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Divisions</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title"> Divisions Table</h3>
          <button class="btn btn-info btn-sm" style="float: right;"  data-toggle="modal" data-target="#modal-default">Add New</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL</th>
              <th>Division Name Bangla</th>
              <th>Division Name English</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
           @foreach($data as $key=>$row)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{ $row->division_bn }}</td>
              <td>{{ $row->division_en }}</td>
              <td>
                    <a href="{{route('division_edit',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                    <a href="{{route('division_delete',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i> </a>
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
              <h4 class="modal-title">Insert New Division</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
               <form action="{{route('division_store')}}" method="Post">
               	@csrf
                 <div class="form-group">
                   <label for="exampleInputEmail1">Division Name English</label>
                   <input type="text" class="form-control @error('division_en') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="division_en" required="">
                     @error('division_en')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		          @enderror
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">Division Name Bangla</label>
                   <input type="text" class="form-control @error('division_bn') is-invalid @enderror" id="bangla" name="division_bn" required="">
                      @error('division_en')
		              <span class="invalid-feedback" role="alert">
		                  <strong>{{ $message }}</strong>
		              </span>
		          @enderror
                 </div>
          
                 <button type="submit" class="btn btn-primary btn-block">Submit</button>
               </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

</div>
@endsection