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
          <h5>ADD Work</h5>

            {{-- about form code here  --}}
            <form action="{{route('work.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Job Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="job_title" aria-describedby="emailHelp">
    @error('job_title')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
 
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">From</label>
    <input type="date" class="form-control" name="from" id="exampleInputPassword1">
    @error('from')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">To</label>
    <input type="date" class="form-control" name="to" id="exampleInputPassword1">
    @error('to')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Job Description</label>
    <input type="text" class="form-control" name="job_description" id="exampleInputPassword1">
    @error('job_description')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>

@endsection