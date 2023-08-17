@extends('layouts.admin', [
  'page_header' => "Top Students / {$topic->title}",
  'dash' => '',
  'quiz' => '',
  'users' => '',
  'questions' => '',
  'top_re' => 'active',
  'all_re' => '',
  'sett' => ''
])

@section('content')
  <div class="content-block box">
    <div class="box-body table-responsive">
      <table id="topTable" class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Student Name</th>
            <th>Mobile No.</th>          
            <th>Quiz</th>
            <th>Total Question Marks</th>
            <th>Marks You Got</th>
            
          </tr>
        </thead>
        <tbody>
         
            @foreach ($filtStudents as $key => $student)
              <tr>
                <td>
                  {{$key+1}}
                </td>
                <td>{{$student->name}}</td>
                <td>{{$student->mobile ? $student->mobile : '-'}}</td>               
                <td>{{$topic->title}}</td>
                <td>
                  100
                </td>
                <td>
                  {{$student->score}}
                </td>
                
              </tr>
            @endforeach
   
        </tbody>
      </table>
    </div>
  </div>
@endsection
