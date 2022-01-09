@extends('admin.admin_master')



@section('main_content')
<div class="container">
    <div class="row">
        <h5 class="text-center">Messages</h5>
        <br>
      <div class="col-sm-12">
          
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
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Messages</th>
     
    </tr>
  </thead>
  <tbody>
      @php($i=1)
       @foreach ($contacts as $contact)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$contact->email}}</td>
      <td>{{$contact->subject}}</td>
      <td>{{$contact->message}}</td>
      <td> 
        {{-- <a href="{{url('admin/contact/edit/'.$contact->id)}}" class="btn btn-outline-success">Edit</a> --}}
        <a href="{{url('admin/contact/delete/'.$contact->id)}}" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
   
  </tbody>
  @endforeach
</table>
     
    </div>
    
</div>

@endsection