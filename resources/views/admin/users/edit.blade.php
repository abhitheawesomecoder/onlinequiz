@extends('layouts.admin', [
  'page_header' => 'Students',
  'dash' => '',
  'quiz' => '',
  'users' => 'active',
  'questions' => '',
  'top_re' => '',
  'all_re' => '',
  'sett' => ''
])

@section('content')
 <div class="box">
    <div class="box-body">
        <h3>Edit User: {{ $user->name }}
          <a href="{{url()->previous()}}" class="btn btn-gray pull-right"><i class="fa fa-arrow-left"></i> Back</a></h3>
      <hr>

      {!! Form::model($user, ['files' => true, 'method' => 'PATCH', 'action' => ['UsersController@update', $user->id]]) !!}
        
          <div class="row">
            <div class="col-md-6">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Name') !!}
                <span class="required">*</span>
                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter your name']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'Email address') !!}
                <span class="required">*</span>
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eg: info@example.com', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('email') }}</small>
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                {!! Form::label('password', 'Password') !!}
                <span class="required">*</span>
                {!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'Change Your Password']) !!}
                <small class="text-danger">{{ $errors->first('password') }}</small>
              </div>
              <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                  {!! Form::label('role', 'User Role') !!}
                  <span class="required">*</span>
                  {!! Form::select('role', ['S' => 'Student', 'A'=>'Administrator'], null, ['class' => 'form-control select2', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('role') }}</small>
              </div>

               <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label for="image">Choose Profile Picture:</label>
                <input type="file" class="form-control" name="image">
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
              <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                {!! Form::label('mobile', 'Mobile No.') !!}
                {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'eg: +91-123-456-7890']) !!}
                <small class="text-danger">{{ $errors->first('mobile') }}</small>
              </div>
              <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                {!! Form::label('city', 'Enter City') !!}
                {!! Form::text('city', null, ['class' => 'form-control', 'placeholder'=>'Enter Your City']) !!}
                <small class="text-danger">{{ $errors->first('city') }}</small>
              </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Adhar Card Number') !!}
                      
                        {!! Form::number('adhaar_card_num', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter your Adhar Card Number', 'min' => '100000000000', 'max' => '999999999999']) !!}
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
                              <option value="3rd Class" {{ $selectedClass === '3rd Class' ? 'selected' : '' }}>3rd Class</option>
                              <option value="4th Class" {{ $selectedClass === '4th Class' ? 'selected' : '' }}>4th Class</option>
                              <option value="5th Class" {{ $selectedClass === '5th Class' ? 'selected' : '' }}>5th Class</option>
                              <option value="6th Class" {{ $selectedClass === '6th Class' ? 'selected' : '' }}>6th Class</option>
                              <option value="7th Class" {{ $selectedClass === '7th Class' ? 'selected' : '' }}>7th Class</option>
                              <option value="8th Class" {{ $selectedClass === '8th Class' ? 'selected' : '' }}>8th Class</option>
                              <option value="9th Class" {{ $selectedClass === '9th Class' ? 'selected' : '' }}>9th Class</option>
                              <option value="10th Class" {{ $selectedClass === '10th Class' ? 'selected' : '' }}>10th Class</option>
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

              <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                {!! Form::label('address', 'Address') !!}
                {!! Form::textarea('address', null, ['class' => 'form-control', 'rows'=>'5', 'placeholder' => 'Enter Your Address']) !!}
                <small class="text-danger">{{ $errors->first('address') }}</small>
              </div>

                @if($user->image !="")
                <img title="Current image" class="img-circle" width="100px" height="100px" src="{{ url('images/user/'.$user->image) }}" alt="">
                @else
                  <img title="Current image" class="img-circle" width="100px" height="100px" src="{{ url('images/user/default.png') }}" alt="">
                @endif
              
            </div>
          </div>
        
          <div class="btn-group pull-right">
            {!! Form::submit("Update", ['class' => 'btn btn-wave']) !!}
          </div>
      {!! Form::close() !!}
  </div>
</div>
@endsection