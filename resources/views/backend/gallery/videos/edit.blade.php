@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">video gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">video gallery</li>
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
                      <h2 class="card-title active">Edit video gallery</h2>
                      <ol class="float-sm-right">
                        <a class="btn btn-success" href="{{route('video_index')}}"><i class="fa fa-list"></i>video gallery List</a>
                      </ol>
                    </div>
                    <!-- /.card-header -->
            <div class="card-body">
             <form action="{{route('video_update',$data->id)}}" method="Post" enctype="multipart/form-data">
              @csrf
              <div class="form-row"> 
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Title </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="title" required="" value="{{$data->title}}">
                      @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
              </div>
              <div class="form-row"> 
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Embed Code</label>
                    <input type="text" class="form-control" id="english" aria-describedby="emailHelp" name="embed_code" required="" value="{{$data->embed_code}}">
                 </div>
              </div>


              <div class="form-row"> 
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Type</label>
                    <select class="form-control" name="type" required>
                        <option value="1" <?php if($data->type==1){echo "selected";} ?>>Big Video</option>
                        <option value="0" <?php if($data->type==0){echo "selected";} ?>>Small video</option>
                    </select>    
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