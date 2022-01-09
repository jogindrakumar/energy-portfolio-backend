@extends('master_welcome')
@section('main_content')

<div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <div class="card">
                        <div class="card-block">
                            <h2>About me</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    @foreach ($abouts as $about )
                                        
                                    
                                    <p><img src="{{asset($about->img)}}" class="img-responsive" alt=""></p>
                                </div>
                                <div class="col-md-8">

                                    <p>{{$about->about}}
                                        </p>
                                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-block">
                            <h2>Projects</h2>
                            <div class="row">
                                @foreach ($projects as $project )
                                    
                               
                                <div class="col-md-4">
                                    <img src="{{asset($project->project_img)}}" class="img-responsive" alt="">
                                    <h3 class="h5">{{$project->project_title}}</h3>
                                    <p>June 2017</p>
                                </div>
                              
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-block">
                            <h2>Work</h2>
                            @foreach ($works as $work )
                                
                           
                            <div class="work-experience">
                                <small class="date">From {{$work->from}} ----To----  {{$work->to}}</small>
                                <h3 class="h5 date-title">{{$work->job_title}}- <a href="http://en.orson.io" title="Create professionnal website">Orson.io</a></h3>


                                <p>{{$work->job_description}}</p>
                            </div>

                           @endforeach
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-block">
                            <h2>Education</h2>
                            <div class="row">
                                @foreach ($educations as $education)
                                    
                               
                                <div class="col-md-4">
                                    <div class="education-experience">
                                        {{-- <small class="date">2017-2015</small> --}}
                                        <h3 class="h5 date-title">{{$education->title}}</h3>
                                        <p>{{$education->from}}</p>
                                    </div>

                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-block">
                            <h2>Skills & Level</h2>
                            <div class="row">
                                @foreach ($skills as $skill )
                                    
                               
                                <div class="col-md-4">
                                    <div class="language-experience">
                                        <h3 class="h5">{{$skill->title}}  <small><span class="badge rounded-pill"> {{$skill->level}}</span></small></h3>
                                    </div>
                                </div>
                                 @endforeach
                                
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-block">
                            <h2>Projects</h2>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="{{asset('frontend/assets/images/img-05.jpg')}}" class="img-responsive" alt="...">
                                        <div class="carousel-caption">
                                            <h3 class="h5">Jules for Bastion</h3>
                                            <p>2017</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/assets/images/img-06.jpg')}}" class="img-responsive" alt="...">
                                        <div class="carousel-caption">
                                            <h3 class="h5">Jules for Bastion</h3>
                                            <p>2017</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="{{asset('frontend/assets/images/img-08.jpg')}}" class="img-responsive" alt="...">
                                        <div class="carousel-caption">
                                            <h3 class="h5">Jules for Bastion</h3>
                                            <p>2017</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-block">
                            <h2>Social Network</h2>
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="social-buttons"><a href="https://twitter.com/" title=""><span class="social-round-icon fa-icon"><i class="fa fa-twitter"></i></span>@jkumar</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p class="social-buttons"><a href="https://www.linkedin.com/" title=""><span class="social-round-icon fa-icon"><i class="fa fa-linkedin"></i></span>jogindra kumar</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p class="social-buttons"><a href="https://dribbble.com/" title=""><span class="social-round-icon fa-icon"><i class="fa fa-dribbble"></i></span>jogindra kumar</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
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
                        <div class="card-block">
                            <h2>Contact</h2>
                            <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data" class="reveal-content">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                     @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                     @error('subject')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" placeholder="Enter your message"></textarea>
                                     @error('message')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class=" btn btn-primary">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endsection