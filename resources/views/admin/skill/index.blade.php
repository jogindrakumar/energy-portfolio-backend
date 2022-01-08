@extends('admin.admin_master')



@section('main_content')
<div class="container">
    <div class="row">
        <h5 class="text-center">Skill History</h5>
        <br>
      <div class="col-sm-12">
          <a href="{{route('skill.create')}}" class="btn btn-success btn-sm">Add Skill</a>
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
      <th scope="col">Title</th>
      <th scope="col">Level</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
      @php($i=1)
       @foreach ($skills as $skill)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$skill->title}}</td>
      <td>{{$skill->level}}</td>
      <td> 
        <a href="{{url('admin/skill/edit/'.$skill->id)}}" class="btn btn-outline-success">Edit</a>
        <a href="{{url('admin/skill/delete/'.$skill->id)}}" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
   
  </tbody>
  @endforeach
</table>
     
    </div>
    
</div>

@endsection