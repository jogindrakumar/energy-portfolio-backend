@extends('admin.admin_master')



@section('main_content')
<div class="container">
    <div class="row">
        <h5 class="text-center">ALL Project</h5>
        <br>
      <div class="col-sm-12">
          <a href="{{route('project.create')}}" class="btn btn-success btn-sm">Add Project</a>
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
      
     @foreach ($projects as $project)

            {{-- about table show here  --}}
          <div class="card" style="width: 18rem;">
  <img src="{{asset($project->project_img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$project->project_title}}</h5>
    
    <a href="{{url('admin/project/edit/'.$project->id)}}" class="btn btn-warning">Edit</a>
    <a href="{{url('admin/project/delete/'.$project->id)}}" class="btn btn-danger">Delete</a>
  </div>
  
</div>

@endforeach
    </div>
    
</div>

@endsection