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
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td><a href="{{url('about/edit/')}}" class="btn btn-warning">Edit</a></td>
      
    </tr>
    
  </tbody>
</table>
        </div>
        <div class="col-sm-4">

          <h5>ADD About</h5>

            {{-- about form code here  --}}
            <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
    @error('position')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tweet Link</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
    @error('twt_link')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Git Link</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
    @error('git_link')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">About Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
    @error('about')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Profile Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1">
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