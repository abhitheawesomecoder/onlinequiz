@extends('layouts.app')

<style>
  .login-page {
    width: 1000px !important;
  }
  .login-page .form {
    max-width: 1000px !important;
}
</style>
@section('head')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>
@endsection

@section('content')
  <div class="container">
    <div class="login-page">
      
      <div class="logo">
        @if ($setting)
          <a href="{{url('/')}}" title="{{$setting->welcome_txt}}">
            <img src="{{asset('/images/logo/'.$setting->logo)}}" class="img-responsive login-logo" alt="{{$setting->welcome_txt}}">
          </a>
        @endif
      </div>

 
      <h3 class="user-register-heading text-center">Register</h3>
      <form class="form login-form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
    <div class="row">
      <div class="col-md-6">

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          {!! Form::label('name', 'Student Name')  !!}
          <span style="color: red;">*</span>
          {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter your name']) !!}
          <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          {!! Form::label('email', 'Email address') !!}
          <span style="color: red;">*</span>
          {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eg: foo@bar.com']) !!}
          <small class="text-danger">{{ $errors->first('email') }}</small>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          {!! Form::label('password', 'Password') !!}
          <span style="color: red;">*</span>
          {!! Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Enter Password']) !!}
          <small class="text-danger" style="color: red; background-color: #FFF;">{{ $errors->first('password') }}</small>
        </div>
        
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          {!! Form::label('password_confirmation', 'Confirm Password') !!}
          <span style="color: red;">*</span>
          {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Confirm Password']) !!}
          <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          {!! Form::label('name', 'Class Teacher Name') !!}
          <span style="color: red;">*</span>
          {!! Form::text('class_teacher', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Class Teacher Name']) !!}
          <small class="text-danger">{{ $errors->first('class_teacher') }}</small>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          {!! Form::label('name', 'Division') !!}
          <span style="color: red;">*</span>
          {!! Form::text('division', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter your Division']) !!}
          <small class="text-danger">{{ $errors->first('division') }}</small>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          {!! Form::label('name', 'Fav Subject') !!}
          <span style="color: red;">*</span>
          {!! Form::text('fav_subject', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Fav Subject']) !!}
          <small class="text-danger">{{ $errors->first('fav_subject') }}</small>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          {!! Form::label('name', 'Mobile Number') !!}
          <span style="color: red;">*</span>
          {!! Form::number('mobile', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter your Mobile Number']) !!}
          <small class="text-danger">{{ $errors->first('mobile') }}</small>
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          {!! Form::label('name', 'Adhar Card Number') !!}
        
          {!! Form::number('adhaar_card_num', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter your Adhar Card Number']) !!}
          <small class="text-danger">{{ $errors->first('adhaar_card_num') }}</small>
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          {!! Form::label('name', 'School Name') !!}
          <span style="color: red;">*</span>
          {!! Form::text('school_name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter your School Name']) !!}
          <small class="text-danger">{{ $errors->first('school_name') }}</small>
        </div>

        <div class="form-group{{ $errors->has('class_name') ? ' has-error' : '' }}">
        {!! Form::label('class_name', 'Class') !!}
        <span style="color: red;">*</span>
        <select class="form-control" name="class_name" required>
         
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                <option value="5th">5th</option>
                <option value="6th">6th</option>
                <option value="7th">7th</option>
                <option value="8th">8th</option>
                <option value="9th">9th</option>
                <option value="10th">10h</option>
           
        </select>
        <small class="text-danger">{{ $errors->first('class_name') }}</small>
    </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          {!! Form::label('name', 'Schoolership Exam Given Before') !!}
          <span style="color: red;">*</span>
          <select class="form-control" name="schooler_ship" required>
         
                <option value="yes">Yes</option>
                <option value="no">No</option>
           
        </select>
          <small class="text-danger">{{ $errors->first('schooler_ship') }}</small>
        </div>
  </div>
  </div>
        <div class="mr-t-20">
          <button type="submit" class="btn btn-wave">Create Account</button>
          <a href="{{url('/login')}}" class="text-center btn-block" title="Already Have Account">Already Have Account ?</a>
        </div>
      </form>
      </div>
     
</div>



@endsection
