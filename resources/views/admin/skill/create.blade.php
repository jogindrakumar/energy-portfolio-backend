@extends('admin.admin_master')



@section('main_content')
<div class="container">
    <div class="row">
      
        <div class="col-sm-12">
            {{-- about table show here  --}}
     
        </div>
        <div class="col-sm-4">
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>
  
@endif
          <h5>ADD skill</h5>

            {{-- about form code here  --}}
            <form action="{{route('skill.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp">
    @error('title')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
 
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Level</label>
    <select name="level" id="level">
  <option value="beginner">Beginner</option>
  <option value="intermediate">Intermediate</option>
  <option value="advance">Advance</option>
  <option value="expert">Expert</option>
</select>
    @error('level')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>

@endsection