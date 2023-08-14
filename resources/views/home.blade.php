@extends('layouts.app')

@section('head')
  <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
  <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>

<style>
    .video {
      height: 200px;
      border-radius: 30px;
      margin-left: 300px;
    }


    @media (min-width: 601px) and (max-width: 900px) {
            .video {
            height: 200px;
            border-radius: 30px;
            margin-left: 150px;
            }
          }
      
            @media (max-width: 600px) {
              .video {
                height: 109px;
                  border-radius: 27px;
                  margin-left: 47px;
    
               }

              }
            @media (max-width: 200px) {
              .video {
                height: 109px;
                  border-radius: 27px;
                  margin-left: 47px;
    
               }
              }
           

  </style>
@endsection

@section('top_bar')
  <nav class="navbar navbar-default navbar-static-top">
    <div class="logo-main-block">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
          @if ($setting)
          <a href="{{ url('/') }}" title="{{$setting->welcome_txt}}">
          <img src="{{ asset('public/frontend/icon/logo_new.png')}}" style="display: none;" class="mobile_logo" width="100px" height="100px" alt="Brand"></a>
          </a>
          @endif
          </div>
          <div class="col-md-3">
          
        
        </div>
          <div class="col-md-3">
          <video class="video" id="preview"></video>  
        
        </div>
      </div>
      </div>
    </div>
    <div class="nav-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="navbar-header">
              <!-- Branding Image -->
              @if($setting)
                <a class="tt" title="Quick Quiz Home" href="{{url('/')}}"><h4 class="heading">Jisar Foundation</h4></a>
              @endif
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
              <li> <a id="google_translate_element"></a> </li>
                <!-- Authentication Links -->
                @guest
                  <li><a href="{{ route('login') }}" title="Login">Login</a></li>
                  <li><a href="{{ route('register') }}" title="Register">Register</a></li>
                @else
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    
                    
                    <ul class="dropdown-menu" id="dropdown">
                      <!-- @if ($auth->role == 'A')
                        <li><a href="{{url('/admin')}}" title="Dashboard">Dashboard</a></li>
                      @elseif ($auth->role == 'S')
                        <li><a href="{{url('/admin/my_reports')}}" title="Dashboard">Dashboard</a></li>
                      @endif -->
                      <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                      </li>
                    </ul>
                  </li>
                 
                  <!-- <li><a href="{{ route('faq.get') }}">FAQ</a></li>
                @endguest
                  @if(!empty($menus))
                    @foreach($menus as $menu)
                      <li><a href="{{ url('pages/'.$menu->slug) }}">{{$menu->name}}</a></li>
                    @endforeach
                  @endif -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
@endsection

@section('content')
<div class="container">
  @if ($auth)
  
    <div class="quiz-main-block">
      <!-- instruction box -->
      <div class="row">
        @if ($topics)
          @foreach ($topics as $topic)
          @if($topic->title == auth()->user()->class_name)
          <div id="cartSection" class="col-md-4">
              <div class="topic-block">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">{{$topic->title}}</span>
                    <p title="{{$topic->description}}">{{str_limit($topic->description, 120)}}</p>
                    <div class="row">
                      <div class="col-xs-6 pad-0">
                        <ul class="topic-detail">
                          <li>Right Answer Mark<i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                          <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                          <li>Wrong Answer Mark<i class="fa fa-long-arrow-right"></i></li>
                        </ul>
                      </div>
                      <div class="col-xs-6">
                        <ul class="topic-detail right">
                          <li>{{$topic->per_q_mark}}</li>
                          <li>
                            @php
                                //$qu_count = 0;
                                $qu_count = 50;
                            @endphp
                         {{--   @foreach($questions as $question)
                              @if($question->topic_id == $topic->id)
                                @php 
                                  $qu_count++;
                                @endphp
                              @endif
                            @endforeach --}}
                            {{$topic->per_q_mark*$qu_count}}
                          </li>
                          <li>
                            {{$qu_count}}
                          </li>
                          <li>
                            {{$topic->timer}} minutes
                          </li>

                          <li class="amount">
                            @if(!empty($topic->amount))
                            {{-- <i class="{{$setting->currency_symbol}}"></i> {{$topic->amount}}   --}}
                             @else
                               -0.50
                            @endif
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>


               <div class="card-action text-center">
                  
                  @if (Session::has('added'))
                    <div class="alert alert-success sessionmodal">
                      {{session('added')}}
                    </div>
                  @elseif (Session::has('updated'))
                    <div class="alert alert-info sessionmodal">
                      {{session('updated')}}
                    </div>
                  @elseif (Session::has('deleted'))
                    <div class="alert alert-danger sessionmodal">
                      {{session('deleted')}}
                    </div>
                  @endif

                    @if($auth->topic()->where('topic_id', $topic->id)->exists())
                      <a href="{{route('start_quiz', ['id' => $topic->id])}}" class="btn btn-block" title="Start Quiz">Start Exam </a>
                    @else
                      {!! Form::open(['method' => 'POST', 'action' => 'PaypalController@paypal_post']) !!} 
                        {{ csrf_field() }}
                        <input type="hidden" name="topic_id" value="{{$topic->id}}"/>
                         @if(!empty($topic->amount)) 

                        <button type="submit" class="btn btn-default">Pay  <i class="{{$setting->currency_symbol}}"></i>{{$topic->amount}}</button>
                          @else 

                          <a href="{{route('start_quiz', ['id' => $topic->id])}}" style="background-color:black>" class="btn btn-block" title="Start Quiz">Start Exam </a>

                        @endif

                      {!! Form::close() !!}
                    @endif
                  </div>


                {{--   <div class="card-action">
                    @php 
                      $a = false;
                      $que_count = $topic->question->count();
                      $ans = $auth->answers;
                      $ans_count = $ans ? $ans->where('topic_id', $topic->id)->count() : null;
                      if($que_count && $ans_count && $que_count == $ans_count){
                        $a = true;
                      }
                    @endphp
                    <a href="{{$a ? url('start_quiz/'.$topic->id.'/finish') : route('start_quiz', ['id' => $topic->id])}}" class="btn btn-block" title="Start Quiz">Start Quiz
                    </a>
                  </div> --}}
                </div>
              </div>
          </div>
            @endif
          @endforeach
        @endif
      </div>
    </div>
  @endif
  @if (!$auth)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="home-main-block">
              @if ($setting)
                <h1 class="main-block-heading text-center">Jisar Foundation</h1>
              @endif
                <blockquote>
                  Please <a href="{{ route('login') }}">Login</a> To Jissar Foundation >>>
                </blockquote>
            </div>
        </div>
    </div>
  @endif
</div>


@endsection

@section('scripts')

<script>
   $(document).ready(function() {
       $('.sessionmodal').addClass("active");
       setTimeout(function() {
           $('.sessionmodal').removeClass("active");
      }, 4500);
    });
</script>


 @if($setting->right_setting == 1)
  <script type="text/javascript" language="javascript">
   // Right click disable
    $(function() {
    $(this).bind("contextmenu", function(inspect) {
    inspect.preventDefault();
    });
    });
      // End Right click disable
  </script>
@endif

@if($setting->element_setting == 1)
<script type="text/javascript" language="javascript">
//all controller is disable
      $(function() {
      var isCtrl = false;
      document.onkeyup=function(e){
      if(e.which == 17) isCtrl=false;
}

      document.onkeydown=function(e){
       if(e.which == 17) isCtrl=true;
      if(e.which == 85 && isCtrl == true) {
     return false;
    }
 };
      $(document).keydown(function (event) {
       if (event.keyCode == 123) { // Prevent F12
       return false;
  }
      else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
     return false;
   }
 });
});
     // end all controller is disable
 </script>



@endif

@if($auth)
 
<!-- camera access -->
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script type="text/javascript">
    function showCartSection() {
        document.getElementById("cartSection").style.display = "block";
    }

    function hideCartSection() {
        document.getElementById("cartSection").style.display = "none";
    }

    // Function to check camera access and show/hide cart section accordingly
    function checkCameraAccess() {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                // Camera access is allowed
                showCartSection();

                // Display camera preview in the video element
                const videoElement = document.getElementById("preview");
                videoElement.srcObject = stream;

                // Create a track ended event listener to handle manual closing of the camera
                stream.getVideoTracks()[0].onended = function () {
                    hideCartSection();
                };

                var scanner = new Instascan.Scanner({ video: videoElement, scanPeriod: 5, mirror: false });
                scanner.addListener('scan', function (content) {
                    alert(content);
                    //window.location.href=content;
                });

                Instascan.Camera.getCameras().then(function (cameras) {
                    // Your existing camera code here
                    // ...
                }).catch(function (e) {
                    console.error(e);
                    alert(e);
                });

                // Rest of your existing code for scanner

            })
            .catch(function (err) {
                // Camera access is not allowed or not available
                hideCartSection();
            });
    }

    // Call the checkCameraAccess function when the page loads
    document.addEventListener('DOMContentLoaded', checkCameraAccess);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,hi,mr',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            multilanguagePage: true
        }, 'google_translate_element');
    }
</script>

@endif
@endsection
