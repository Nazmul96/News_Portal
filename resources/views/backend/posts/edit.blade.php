@extends('layouts.app')

@section('content')
<?php
$sub=DB::table('subcategories')->where('category_id',$post->cat_id)->get();
$district=DB::table('districts')->where('division_id',$post->division_id)->get();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.css" integrity="sha512-3uVpgbpX33N/XhyD3eWlOgFVAraGn3AfpxywfOTEQeBDByJ/J7HkLvl4mJE1fvArGh4ye1EiPfSBnJo2fgfZmg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style type="text/css">
  .bootstrap-tagsinput .tag {
    background: #428bca;;
    border: 1px solid white;
    padding: 1 6px;
    padding-left: 2px;
    margin-right: 2px;
    color: white;
    border-radius: 4px;
  }
</style>
<!-- Content Header (Page header) -->
<div class="content-wrapper">   
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Post Update Panel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"> <a class="btn btn-success" href="{{route('post_index')}}"><i class="fa fa-list"></i>Post List</a></li>
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Post Update Panel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Post Update Panel</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form"  action="{{route('post_update',$post->id)}}" method="post"  enctype="multipart/form-data"> 
                    @csrf
                    <div class="card-body">

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Title Bangla</label>
                        <input type="text" class="form-control @error('title_bn') is-invalid @enderror" id="exampleInputEmail1"  name="title_bn" value="{{$post->title_bn}}">

                        @error('title_bn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group  col-md-6">
                        <label for="exampleInputPassword1">Title English</label>
                        <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="exampleInputPassword1" name="title_en" value="{{$post->title_en}}">

                        @error('title_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                  </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Category</label>
                          <select name="cat_id" id="cat_id" class="form-control @error('cat_id') is-invalid @enderror">
                            <option selected="" disabled="">==choose one==</option>
                            @foreach($category as $row)
                                <option value="{{ $row->id }}" <?php if($row->id==$post->cat_id){echo "selected";} ?> >{{ $row->category_bn }} </option>
                            @endforeach
                          </select>
                          
                          <!--for error showing......-->
                          @error('cat_id')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                          @enderror
                      </div>
                      <div class="form-group  col-md-6">
                        <label for="exampleInputPassword1">SubCategory</label>
                        <select name="subcat_id" class="form-control @error('subcat_id') is-invalid @enderror" id="subcat_id">
                          <option selected="" disabled="">==choose one==</option>
                          @foreach($sub as $row)
                                <option value="{{ $row->id }}" <?php if($row->id==$post->subcat_id){echo "selected";} ?> >{{ $row->subcategory_bn }} </option>
                            @endforeach
                        </select>

                         @error('subcat_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                  </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Division</label>
                          <select name="division_id" id="division_id" class="form-control @error('division_id') is-invalid @enderror">
 
                            <option selected="" disabled="">==choose one==</option>
                            @foreach($division as $row)
                              <option value="{{ $row->id }}" <?php if($row->id==$post->division_id){echo "selected";} ?>>{{ $row->division_bn }} </option>
                            @endforeach
                          </select>

                          @error('division_id')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                      <div class="form-group  col-md-6">
                        <label for="exampleInputPassword1">District</label>
                        <select name="district_id" class="form-control @error('district_id') is-invalid @enderror" id="district_id">
                            <option selected="" disabled="">==choose one==</option>
                            @foreach($district as $row)
                                <option value="{{ $row->id }}" <?php if($row->id==$post->district_id){echo "selected";} ?> >{{ $row->district_bn }} </option>
                            @endforeach
                          </select>
                          
                          @error('district_id')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-lg-6">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" >
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <label for="exampleInputFile">Old Image</label>
                <img src="{{ URL::to($post->image) }}" style="height: 50px; width: 70px;">
                <input type="hidden" name="oldimage" value="{{ $post->image }}">
              </div>
               </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Tags Bangla</label>
                        <input type="text" class="form-control @error('tags_bn') is-invalid @enderror" value="{{ $post->tags_bn}}" name="tags_bn" data-role="tagsinput">
                        @error('category_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group  col-md-6">
                        <label for="exampleInputPassword1">Tags English</label>
                        <input type="text" class="form-control  @error('tags_en') is-invalid @enderror" value="{{$post->tags_en}}" name="tags_en" data-role="tagsinput">
                        @error('tags_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                  </div>

                      <div class="form-group  col-md-12">
                        <label for="exampleInputPassword1">Details English</label>
                        <textarea class="form-control textarea @error('details_en') is-invalid @enderror" name="details_en">{{$post->details_en}}</textarea>
                        @error('details_en')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                        <div class="form-group  col-md-12">
                        <label for="exampleInputPassword1">Details Bangla</label>
                        <textarea class="form-control textarea @error('details_bn') is-invalid @enderror" name="details_bn" name="details_bn">{{$post->details_bn}}</textarea>

                        @error('details_bn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                      </div>
                      <hr>
                      <h4 class="text-center">Extra Option</h4>
                    

                    <div class="row">

                      <div class="form-check col-md-6">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="headline" value="1" <?php if($post->headline == 1){echo "checked";} ?> >
                        <label class="form-check-label" for="exampleCheck1">Headline</label>
                      </div>
                      <div class="form-check col-md-6">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2" name="bigthumbnail" value="1" <?php if($post->bigthumbnail == 1){echo "checked";} ?>>
                        <label class="form-check-label" for="exampleCheck2">General big thumbnail</label>
                      </div>

                      <div class="form-check col-md-6">
                        <input type="checkbox" class="form-check-input" id="exampleCheck3" name="first_section" value="1" <?php if($post->first_section == 1){echo "checked";} ?> >
                        <label class="form-check-label" for="exampleCheck3">FirstSection</label>
                      </div>
                      <div class="form-check col-md-6">
                        <input type="checkbox" class="form-check-input" id="exampleCheck4" name="first_section_thumbnail" value="1" <?php if($post->first_section_thumbnail == 1){echo "checked";} ?>>
                        <label class="form-check-label" for="exampleCheck4">FirstSection Big Thumbnail</label>
                      </div>
                  
                </div>
                    <!-- /.card-body -->	
                    <br>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
      </div>
    </section>

  <!-- for subcategory...... -->
    <script type="text/javascript">
         $("#cat_id").change(function(){
      var id = $(this).val();
      $.ajax({
           url: "{{ url("/get-sub-category/") }}/"+id,
           type: 'get',
           success: function(data) {
                $("#subcat_id").empty();
                   $.each(data, function(key,data){
                      $("#subcat_id").append('<option value="'+ data.id +'">'+ data.subcategory_bn +'</option>');
                });
           }
        });
     });
    </script>

  <!-- for District...... -->
  <script type="text/javascript">
    $("#division_id").change(function(){
      var id = $(this).val();
      $.ajax({
        url: "{{ url("/get-district/") }}/"+id,
        type: 'get',
        success: function(data) {
            $("#district_id").empty();
             $.each(data, function(key,data){
               $("#district_id").append('<option value="'+ data.id +'">'+ data.district_bn +'</option>');
            });
        }
    });
  });
  </script>
</div>
@endsection    