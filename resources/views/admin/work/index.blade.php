@extends('admin.admin_master')



@section('main_content')
<div class="container">
    <div class="row">
        <h5 class="text-center">work History</h5>
        <br>
      <div class="col-sm-12">
          <a href="{{route('work.create')}}" class="btn btn-success btn-sm">Add Work</a>
      </div>
        <br>
        <div class="col-sm-12">
            @if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>
  
@endif
 @if (Session::has('error'))
<div class="alert alert-danger" role="alert">
  {{Session::get('error')}}
</div>
  
@endif
<br>
        </div>
       
    </div>
</div>

<div class="container">
     
    <div class="row">
      <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Position</th>
      <th scope="col">Job Description</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
      @php($i=1)
       @foreach ($works as $work)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$work->job_title}}</td>
      <td>{{$work->job_description}}</td>
      <td>{{$work->from}}</td>
      <td>{{$work->to}}</td>
      <td> <a href="{{url('admin/work/edit/'.$work->id)}}" class="btn btn-outline-success">Edit</a>
    <a href="{{url('admin/work/delete/'.$work->id)}}" class="btn btn-outline-danger">Delete</a></td>
    </tr>
   
  </tbody>
  @endforeach
</table>
     
    </div>
    
</div>

@endsection