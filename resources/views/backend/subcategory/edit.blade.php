@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Subcategories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subcategories</li>
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
                      <h2 class="card-title active">Edit Subcategories</h2>
                      <ol class="float-sm-right">
                        <a class="btn btn-success" href="{{route('subcategory_index')}}"><i class="fa fa-list"></i>Subcategories List</a>
                      </ol>
                    </div>
                    <!-- /.card-header -->
            <div class="card-body">
             <form action="{{route('subcategory_update',$subcategory->id)}}" method="Post">
                @csrf
                <div class="form-row"> 
                    <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Subcategories Name English</label>
                  <input type="text" class="form-control @error('subcategory_en') is-invalid @enderror" id="english" aria-describedby="emailHelp" name="subcategory_en" value="{{$subcategory->subcategory_en}}" required="">
                    @error('subcategory_en')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                </div>
                <div class="form-row"> 
                 <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Subcategories Name Bangla</label>
                  <input type="text" class="form-control @error('subcategory_bn') is-invalid @enderror" id="bangla" name="subcategory_bn" value="{{$subcategory->subcategory_bn}}"required="">
                     @error('subcategory_bn')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                   @enderror
                  </div>
                </div>
                <div class="form-row"> 
                    <div class="form-group col-md-6">
                   <label for="exampleInputPassword1">category Name</label>
                   <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                       <option disabled="" selected="">==choose one==</option>
                       @foreach ($category as $row)
                       <option value="{{ $row->id }}" <?php if($row->id == $subcategory->category_id) echo "selected"?> >{{ $row->category_en }} | {{ $row->category_bn }}</option>
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