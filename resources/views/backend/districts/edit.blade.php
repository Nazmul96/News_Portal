@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Districts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Districts</li>
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
                      <h2 class="card-title active">Edit Districts</h2>
                      <ol class="float-sm-right">
                        <a class="btn btn-success" href="{{route('district_index')}}"><i class="fa fa-list"></i>Districts List</a>
                      </ol>
                    </div>
                    <!-- /.card-header -->
            <div class="card-body">
             <form action="{{route('district_update',$district->id)}}" method="Post">
                @csrf
                <div class="form-row"> 
                    <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Districts Name English</label>
                  <input type="text" class="form-control @error('district_en') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="district_en" value="{{$district->district_en}}" required="">
                    @error('district_en')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                </div>
                <div class="form-row"> 
                 <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Districts Name Bangla</label>
                  <input type="text" class="form-control @error('district_bn') is-invalid @enderror" id="bangla" name="district_bn" value="{{$district->district_bn}}"required="">
                     @error('district_bn')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                   @enderror
                  </div>
                </div>
                <div class="form-row"> 
                    <div class="form-group col-md-6">
                   <label for="exampleInputPassword1">Division Name</label>
                   <select class="form-control @error('division_id') is-invalid @enderror" name="division_id">
                       <option disabled="" selected="">==choose one==</option>
                       @foreach ($division as $row)
                       <option value="{{ $row->id }}" <?php if($row->id == $district->division_id) echo "selected"?> >{{ $row->division_en }} | {{ $row->division_bn }}</option>
                       @endforeach
                   </select>
                  </div>
                 </div>
         
                <button type="submit" class="btn btn-info">Submit</button>
             </form>
        
            </div>
            </div>
            </div>
        </div>
      </div>     
      </section>
</div>
@endsection