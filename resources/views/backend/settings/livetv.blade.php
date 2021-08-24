@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">LiveTV Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">LiveTV Settings</li>
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
                <div class="modal-header">
                    <h4 class="modal-title">LIVETV Settings</h4>
                     @if($livetv->status == 1)   
                      <a href="{{route('deactive_livetv',$livetv->id)}}" style="float: right" class="btn btn-danger">Deactive</a>
                     @else
                     <a href="{{route('active_livetv',$livetv->id)}}" style="float: right" class="btn btn-success">Active</a>
                     @endif
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('livetv_update',$livetv->id)}}" method="Post">
                    @csrf
                  <div class="card-body">  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Embed Code</label>
                        <textarea type="text" class="form-control " aria-describedby="emailHelp" name="embed_code" required="">  
                            {{ $livetv->embed_code }}
                        </textarea>
                        @if($livetv->status == 1)
                          <small class="text-success">Now LiveTV are Active</small>
                        @else    
                          <small class="text-danger">Now LiveTV are Deactive</small>
                        @endif  
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