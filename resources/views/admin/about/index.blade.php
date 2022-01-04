@extends('admin.admin_master')



@section('main_content')
<div class="container">
    <div class="row">
        <h1 class="text-center">About</h1>
        <div class="col-sm-12">
            {{-- about table show here  --}}
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Tweet Link</th>
      <th scope="col">Git Link</th>
      <th scope="col">About</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      @foreach ($abouts as $about )
        
     
      <td>{{$about->name}}</td>
      <td>{{$about->position}}</td>
      <td>{{$about->twt_link}}</td>
      <td>{{$about->git_link}}</td>
      <td>{{$about->about}}</td>
      <td><img src="{{asset($about->img)}}" alt="" style="height: 50px;Width:50px;"></td>
      
      <td><a href="{{url('admin/about/edit/'.$about->id)}}" class="btn btn-warning">Edit</a></td>
       
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
        <div class="col-sm-4">
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>
  
@endif
          <h5>ADD About</h5>

            {{-- about form code here  --}}
            <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Position</label>
    <input type="text" class="form-control" name="position" id="exampleInputPassword1">
    @error('position')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tweet Link</label>
    <input type="text" class="form-control" name="twt_link" id="exampleInputPassword1">
    @error('twt_link')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Git Link</label>
    <input type="text" class="form-control" name="git_link" id="exampleInputPassword1">
    @error('git_link')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">About Description</label>
    <input type="text" class="form-control" name="about" id="exampleInputPassword1">
    @error('about')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Profile Image</label>
    <input type="file" class="form-control" name="img" id="exampleInputPassword1">
    @error('img')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>

@endsection