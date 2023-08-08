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
  @if ($auth->role == 'A')
    <div class="margin-bottom">
      <button type="button" class="btn btn-wave" data-toggle="modal" data-target="#createModal">Add Student</button>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#AllDeleteModal">Delete All Students</button>
      <button type="button" class="btn btn-wave" data-toggle="modal" data-target="#importStudents">Import Students</button>
    </div>
    <!-- All Delete Button -->
    <div id="AllDeleteModal" class="delete-modal modal fade" role="dialog">
      <!-- All Delete Modal -->
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="delete-icon"></div>
          </div>
          <div class="modal-body text-center">
            <h4 class="modal-heading">Are You Sure ?</h4>
            <p>Do you really want to delete "All these records"? This process cannot be undone.</p>
          </div>
          <div class="modal-footer">
            {!! Form::open(['method' => 'POST', 'action' => 'DestroyAllController@AllUsersDestroy']) !!}
                {!! Form::reset("No", ['class' => 'btn btn-gray', 'data-dismiss' => 'modal']) !!}
                {!! Form::submit("Yes", ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
    <!-- Create Modal -->
    <div id="createModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Student</h4>
          </div>
          {!! Form::open(['files' => true,'method' => 'POST', 'action' => 'UsersController@store']) !!}
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Student Name') !!}
                    <span class="required">*</span>
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Your Name']) !!}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                  </div>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', 'Email address') !!}
                    <span class="required">*</span>
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eg: info@examlpe.com', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::label('password', 'Password') !!}
                    <span class="required">*</span>
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'Enter Your Password', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                  </div>
                  <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                      {!! Form::label('role', 'User Role') !!}
                      <span class="required">*</span>
                     <select name="role" id="" class="select2 form-control">
                       <option value="S">Student</option>
                       <option value="A">Admin</option>
                     </select>
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
                      
                              <option value="3rd Class">3rd Class</option>
                              <option value="4th Class">4th Class</option>
                              <option value="5th Class">5th Class</option>
                              <option value="6th Class">6th Class</option>
                              <option value="7th Class">7th Class</option>
                              <option value="8th Class">8th Class</option>
                              <option value="9th Class">9th Class</option>
                              <option value="10th Class">10h Class</option>
                        
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
                    {!! Form::textarea('address', null, ['class' => 'form-control', 'rows'=>'5', 'placeholder' => 'Enter Your address']) !!}
                    <small class="text-danger">{{ $errors->first('address') }}</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="btn-group pull-right">
                {!! Form::reset("Reset", ['class' => 'btn btn-default']) !!}
                {!! Form::submit("Add", ['class' => 'btn btn-wave']) !!}
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <!-- Import Students -->
  <div id="importStudents" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Import Students (Excel File With Exact Header of DataBase Field)</h4>
        </div>

        <!-- Modal to import question -->
        {!! Form::open(['method' => 'POST', 'action' => 'UsersController@importExcelToDB', 'files' => true]) !!}
          <div class="modal-body">
            
            <div class="form-group{{ $errors->has('student_file') ? ' has-error' : '' }}">
              {!! Form::label('student_file', 'Import Students Via Excel File', ['class' => 'col-sm-3 control-label']) !!}
              <span class="required">*</span>
              <div class="col-sm-9">
                {!! Form::file('student_file', ['required' => 'required']) !!}
                <p class="help-block">Only Excel File (.CSV and .XLS)</p>
                <small class="text-danger">{{ $errors->first('student_file') }}</small>
              </div>
            </div>
          </div>

     

          <!-- Reset and Import button -->
          <div class="modal-footer">
            <div class="btn-group pull-right">
              {!! Form::reset("Reset", ['class' => 'btn btn-default']) !!}
              {!! Form::submit("Import", ['class' => 'btn btn-wave']) !!}
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
    <div class="content-block box">
      <div class="box-body table-responsive">
        <table id="usersTable" class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>User Image</th>
              <th>Student Name</th>
              <th>Email</th>
              <th>Mobile No.</th>
              <th>User Role</th>
              <th>City</th>
              <th>Address</th>
              <th>Actions</th>
            </tr>
          </thead>
           @if ($users)
          <tbody>

          </tbody>
           @endif
        </table>
      </div>
    </div>
  @endif
@endsection
@section('scripts')
<script>
  $(function () {

    var table = $('#usersTable').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      autoWidth: false,
      scrollCollapse: true,


      ajax: "{{ route('users.index') }}",
      columns: [

      {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
      {data: 'image', name: 'image',searchable: false},
      {data: 'name', name: 'name'},
      {data: 'email', name: 'email'},
      {data: 'mobile', name: 'mobile'},
      {data: 'role', name: 'role'},
      {data: 'city', name: 'city'},
      {data: 'address', name: 'address'},
      {data: 'action', name: 'action',searchable: false}
      ],
      dom : 'lBfrtip',
      buttons : [
      'csv','excel','pdf','print'
      ],
      order : [[0,'desc']]
    });

  });
</script>
@endsection
