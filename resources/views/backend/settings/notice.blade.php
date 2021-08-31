@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Notice Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Notice Settings</li>
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
                    <h4 class="modal-title">Notice Settings</h4>
                     @if($notice->status == 1)   
                      <a href="{{route('deactive_notice',$notice->id)}}" style="float: right" class="btn btn-danger">Deactive</a>
                     @else
                     <a href="{{route('active_notice',$notice->id)}}" style="float: right" class="btn btn-success">Active</a>
                     @endif
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('notice_update',$notice->id)}}" method="Post">
                    @csrf
                  <div class="card-body">  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Notice Bangla</label>
                        <textarea type="text" class="form-control " aria-describedby="emailHelp" name="notice" required="">  
                            {{ $notice->notice }}
                        </textarea>

                        <label for="exampleInputEmail1">Notice English</label>
                        <textarea type="text" class="form-control " aria-describedby="emailHelp" name="notice_en" required="">  
                            {{ $notice->notice_en }}
                        </textarea>

                        @if($notice->status == 1)
                          <small class="text-success">Now Notice are Active</small>
                        @else    
                          <small class="text-danger">Now Notice are Deactive</small>
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