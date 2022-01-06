@extends('admin.admin_master')



@section('main_content')
<div class="container">
    <div class="row">
        
            <div class="col-sm-6" style="border: solid rgb(186, 248, 115);">
                <h5 class="text-center">Edit  project</h5>
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>
  
@endif
        <br>

            {{-- about form code here  --}}
            <form action="{{url('admin/project/update/'.$projects->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$projects->project_title}}" name="project_title" aria-describedby="emailHelp">
    @error('project_title')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
 
  
   <div class="mb-3">
      <input type="hidden" class="form-control" name="old_img" value="{{$projects->project_img}}"  > 
  </div>
   <div class="mb-3">
       <img src="{{asset($projects->project_img)}}" alt="" style="height: 100px; width:150px;">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Project Image</label>
    <input type="file" class="form-control" name="project_img" value="{{$projects->img}}" id="exampleInputPassword1">
    @error('project_img')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-warning">Update project</button>
</form>
        </div>
   
       
    </div>
</div>

@endsection