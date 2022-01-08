@extends('admin.admin_master')



@section('main_content')
<div class="container">
    <div class="row">
        
            <div class="col-sm-6" style="border: solid rgb(186, 248, 115);">
                <h5 class="text-center">Edit  work</h5>
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>
  
@endif
        <br>

            {{-- about form code here  --}}
            <form action="{{url('admin/work/update/'.$works->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Job Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="job_title" value="{{$works->job_title}}" aria-describedby="emailHelp">
    @error('job_title')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
 
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">From</label>
    <input type="date" class="form-control" name="from" value="{{$works->from}}" id="exampleInputPassword1">
    @error('from')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">To</label>
    <input type="date" class="form-control" name="to" value="{{$works->to}}" id="exampleInputPassword1">
    @error('to')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Job Description</label>
    <input type="text" class="form-control" name="job_description" value="{{$works->job_description}}" id="exampleInputPassword1">
    @error('job_description')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-warning">Update work</button>
</form>
        </div>
   
       
    </div>
</div>

@endsection