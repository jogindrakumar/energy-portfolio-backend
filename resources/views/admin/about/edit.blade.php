@extends('admin.admin_master')



@section('main_content')
<div class="container">
    <div class="row">
        
            <div class="col-sm-6" style="border: solid rgb(186, 248, 115);">
                <h5 class="text-center">Edit about profile</h5>
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>
  
@endif
        <br>

            {{-- about form code here  --}}
            <form action="{{url('admin/about/update/'.$abouts->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$abouts->name}}" name="name" aria-describedby="emailHelp">
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Position</label>
    <input type="text" class="form-control" name="position" value="{{$abouts->position}}"  id="exampleInputPassword1">
    @error('position')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tweet Link</label>
    <input type="text" class="form-control" name="twt_link" value="{{$abouts->twt_link}}"  id="exampleInputPassword1">
    @error('twt_link')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Git Link</label>
    <input type="text" class="form-control" name="git_link"  value="{{$abouts->git_link}}" id="exampleInputPassword1">
    @error('git_link')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">About Description</label>
    <input type="text" class="form-control" name="about" value="{{$abouts->about}}"  id="exampleInputPassword1">
    @error('about')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
   <div class="mb-3">
      <input type="hidden" class="form-control" name="old_img" value="{{$abouts->img}}"  > 
  </div>
   <div class="mb-3">
       <img src="{{asset($abouts->img)}}" alt="" style="height: 100px; width:150px;">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Profile Image</label>
    <input type="file" class="form-control" name="img" value="{{$abouts->img}}" id="exampleInputPassword1">
    @error('img')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-warning">Update profile</button>
</form>
        </div>
   
       
    </div>
</div>

@endsection