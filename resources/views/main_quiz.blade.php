@extends('layouts.app')

@section('head')
  <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
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
    <div class="nav-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="navbar-header">
              <!-- Branding Image -->
              
              @if($topic)
                <h4 class="heading">{{$topic->title}}</h4>
              
              @endif
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">              
              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li id="clock"></li>
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
    <div class="home-main-block">
      <?php 
        $users =  App\Answer::where('topic_id',$topic->id)->where('user_id',Auth::user()->id)->first();
        // dd($users);
        $que =  App\Question::where('topic_id',$topic->id)->first();
      ?>

      @if(empty($users))
        <div id="question_block" class="question-block">
          <question :topic_id="{{$topic->id}}" ></question>
        </div>
        @if(empty($que))
        <div class="alert alert-danger">
          <p>
            No Questions in this quiz <b> {{$topic->title}} </b>
          </p>
          <p>
            <a class="text-danger" href="{{ url('/home')}}"> <u> <i class="fa fa-home" aria-hidden="true"></i> Return Home </u> </a>
          </p>
        </div>
        @endif
      @else
        <div class="alert alert-danger text-center">
          <p>
            You have already submitted the quiz <b> {{$topic->title}}.</b>
          </p>
          <p>
            <a class="text-danger" href="{{ url('/home')}}"> <u> <i class="fa fa-home" aria-hidden="true"></i> Return Home </u> </a>
          </p>
        </div>
      @endif
    </div>
  @endif
</div>
@endsection

@section('scripts')
  <!-- jQuery 3 -->
  <script src="{{asset('public/js/jquery.min.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/js/jquery.cookie.js')}}"></script>
  <script src="{{asset('public/js/jquery.countdown.js')}}"></script>

  @if(!empty($que) && empty($users))
   <script>
    var topic_id = {{$topic->id}};
    var timer = {{$topic->timer}};
     $(document).ready(function() {
      function e(e) {
          (116 == (e.which || e.keyCode) || 82 == (e.which || e.keyCode)) && e.preventDefault()
      }
      setTimeout(function() {
          $(".myQuestion:first-child").addClass("active");
          $(".prebtn").attr("disabled", true); 
      }, 2500), history.pushState(null, null, document.URL), window.addEventListener("popstate", function() {
          history.pushState(null, null, document.URL)
      }), $(document).on("keydown", e), setTimeout(function() {
          $(".nextbtn").click(function() {
              var e = $(".myQuestion.active");
              $(e).removeClass("active"), 0 == $(e).next().length ? (Cookies.remove("time"), Cookies.set("done", "Your Quiz is Over...!", {
                  expires: 1
              }), location.href = "{{$topic->id}}/finish") : ($(e).next().addClass("active"), $(".myForm")[0].reset(),
              $(".prebtn").attr("disabled", false))
          }),
          $(".prebtn").click(function() {  
              var e = $(".myQuestion.active");
              $(e).removeClass("active"),
              $(e).prev().addClass("active"), $(".myForm")[0].reset()
              $(".myQuestion:first-child").hasClass("active") ?  $(".prebtn").attr("disabled", true) :   $(".prebtn").attr("disabled", false);
          })
      }, 700);
      var i, o = (new Date).getTime() + 6e4 * timer;
      if (Cookies.get("time") && Cookies.get("topic_id") == topic_id) {
          i = Cookies.get("time");
          var t = o - i,
              n = o - t;
          $("#clock").countdown(n, {
              elapse: !0
          }).on("update.countdown", function(e) {
              var i = $(this);
              e.elapsed ? (Cookies.set("done", "Your Quiz is Over...!", {
                  expires: 1
              }), Cookies.remove("time"), location.href = "{{$topic->id}}/finish") : i.html(e.strftime("<span>%H:%M:%S</span>"))
          })
      } else Cookies.set("time", o, {
          expires: 1
      }), Cookies.set("topic_id", topic_id, {
          expires: 1
      }), $("#clock").countdown(o, {
          elapse: !0
      }).on("update.countdown", function(e) {
          var i = $(this);
          e.elapsed ? (Cookies.set("done", "Your Quiz is Over...!", {
              expires: 1
          }), Cookies.remove("time"), location.href = "{{$topic->id}}/finish") : i.html(e.strftime("<span>%H:%M:%S</span>"))
      })
  });
  </script>
  @else
  {{ "" }}
  @endif

  
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

 <!-- camera access -->
 <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript">
       var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
    scanner.addListener('scan',function(content){
        alert(content);
        //window.location.href=content;
    });
    Instascan.Camera.getCameras().then(function (cameras){
        if(cameras.length>0){
            scanner.start(cameras[0]);
            $('[name="options"]').on('change',function(){
                if($(this).val()==1){
                    if(cameras[0]!=""){
                        scanner.start(cameras[0]);
                    }else{
                        alert('No Front camera found!');
                    }
                }else if($(this).val()==2){
                    if(cameras[1]!=""){
                        scanner.start(cameras[1]);
                    }else{
                        alert('No Back camera found!');
                    }
                }
            });
        }else{
            console.error('No cameras found.');
            alert('No cameras found.');
        }
    }).catch(function(e){
        console.error(e);
        alert(e);
    });

    // 
    scanner.addListener('scan', function(c){
        document.getElementById('product_id').value = c;
        document.getElementById('form').submit();
    })
    </script>

    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
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
@endsection
