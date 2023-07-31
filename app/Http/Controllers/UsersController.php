<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Avatar;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $users = \DB::table('users')->where('role','!=' , 'A')->select('id','image','name','email','mobile','role','city','address');

        if($request->ajax()){
          return DataTables::of($users)
          ->addIndexColumn()
          ->addColumn('image',function($row){
            if ($row->image) {
                $image = '<img src="' . asset('/images/user/' . $row->image) . '" alt="Pic" width="50px" class="img-responsive">';
            } else {
                $image = '<img  src="' . Avatar::create(ucfirst($row->name))->toBase64() . '" alt="Pic" width="50px" class="img-responsive">';
            }
            return $image;
          })
          ->addColumn('name',function($row){
            return ucfirst($row->name);
          })
          ->addColumn('email',function($row){
            return $row->email;
          })
          ->addColumn('mobile',function($row){
              return $row->mobile;
          })
          ->addColumn('role',function($row){
              return $row->role == 'S' ? 'Student' : '-';
          })
          ->addColumn('city',function($row){
              return isset($row->city) && $row->city ? $row->city : '-';
          })
          ->addColumn('address',function($row){
            return isset($row->address) && $row->address ? $row->address : '-';
          })
          ->addColumn('action',function($row){
            $btn ='<div class="admin-table-action-block">

                    <a href="' . route('users.edit', $row->id) . '" data-toggle="tooltip" data-original-title="Edit" class="btn btn-primary btn-floating"><i class="fa fa-pencil"></i></a>
                  
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal' . $row->id . '"><i class="fa fa-trash"></i> </button></div>';


                     $btn .= '<div id="deleteModal' . $row->id . '" class="delete-modal modal fade" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="delete-icon"></div>
                      </div>
                      <div class="modal-body text-center">
                        <h4 class="modal-heading">Are You Sure ?</h4>
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                      </div>
                      <div class="modal-footer">
                        <form method="POST" action="' . route("users.destroy", $row->id) . '">
                          ' . method_field("DELETE") . '
                          ' . csrf_field() . '
                            <button type="reset" class="btn btn-gray translate-y-3" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>';
                return $btn;

          })
          ->rawColumns(['image','name','email','mobile','role','city','address','action'])
          ->make(true);
        }
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $user = new User;

          $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'unique:users|min:10',
            'password' => 'required|string|min:6',
          ]);

          $user->name = $request->name;
          $user->email = $request->email;
          $user->mobile = $request->mobile;
          $user->address = $request->address;
          $user->role = $request->role;
          $user->city = $request->city;

          if($request->password !="")
          {
            $user->password = bcrypt($request->password);
          }

          if ($file = $request->file('image'))
          {

          if($user->image !="")
          {
              unlink('images/user/'.$user->image);
          }

          $name = time().$file->getClientOriginalName();

          $file->move('images/user', $name);
          
          $user->image = $name;
      

          }
          try{
            $user->save();
            return back()->with('added', 'User has been added !');

          }catch(\Exception $e){
            return back()->with('deleted',$e->getMessage());
          }

          
        
    }

    
  public function importExcelToDB(Request $request)
  {
    // dd($request->all());
    $validator = Validator::make(
      [
          'student_file' => $request->student_file,
          'extension' => strtolower($request->student_file->getClientOriginalExtension()),
      ],
      [
          'student_file' => 'required',
          'extension' => 'required|in:xlsx,xls,csv',
      ]
  );

  if ($validator->fails()) {
      return back()->withErrors('deleted', 'Invalid file format. Please use xlsx and csv file formats!');
  }

  if ($request->hasFile('student_file')) {
      $file = $request->file('student_file');
      $importedData = Excel::toArray(new StudentsImport, $file);

      if (!empty($importedData) && isset($importedData[0]) && count($importedData[0]) > 0) {
          $importedStudents = 0; // Track the number of imported students

          if((preg_match_all( "/[0-9]/", $row['adhaar_card_num'] ) == 12 )&&(preg_match_all( "/[0-9]/", $row['mobile'] ) == 10 ))
          {  $last4adhar = substr($row['adhaar_card_num'],-4);
             $last4mobile = substr($row['mobile'],-4);
             $password = $last4adhar.$last4mobile;
          }else
             $password = "password";

          foreach ($importedData[0] as $row) {
              // Assuming the column headings in the Excel/CSV file match the field names in the database
              $studentData = [
                  'name' => $row['name'],
                  'email' => $row['email'],
                  'password' => bcrypt($password), // Make sure the passwords are hashed
                  'mobile' => $row['mobile'],
                  'role' => 'S',
                  'class_name' => $row['class_name'],
                  'school_name' => $row['school_name'],
                  'division' => $row['division'],
                  'adhaar_card_num' => $row['adhaar_card_num'],
                  'class_teacher' => $row['class_teacher'],
                  'fav_subject' => $row['fav_subject'],
                  'schooler_ship' => $row['schooler_ship'],
              ];
              // dd($studentData);
              // Check if a student with the same email already exists in the database
              $existingStudent = User::where('email', $studentData['email'])->first();

              if ($existingStudent) {
                  continue; // Skip the student as they already exist in the database
              }

              // Insert the student into the database
              try {
                // Insert the student into the database
                User::create($studentData);
                $importedStudents++;
            } catch (\Exception $e) {
                // Log the error or handle it as needed
                // In this case, we'll just continue with the import process
                continue;
            }
          }

          if ($importedStudents > 0) {
              return back()->with('added', $importedStudents . ' Student(s) Imported Successfully');
          } else {
              return back()->with('deleted', 'All students in the file seem to be duplicates. No new students imported.');
          }
      } else {
          return back()->with('deleted', 'The file seems to be empty. Please check the file.');
      }
  }

  return back()->with('deleted', 'Request data does not have any files to import');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string|email',
          'mobile' => 'sometimes|nullable|min:10'
        ]);

        $input = $request->all();

        if (Auth::user()->role == 'A') 
        {
          $user->name = $request->name;
          $user->email = $request->email;
          $user->mobile = $request->mobile;
          $user->address = $request->address;
          $user->city = $request->city;

          if($request->password !="")
          {
            $user->password = bcrypt($request->password);
          }

          if ($file = $request->file('image'))
          {
            if($user->image !="")
            {
              unlink('images/user/'.$user->image);
            }

            $name = time().$file->getClientOriginalName();
            $file->move('images/user', $name);
            $user->image = $name;      
          }

          $user->save();

        } 
        else if (Auth::user()->role == 'S') 
        {
          $user->name = $request->name;
          $user->email = $request->email;
          $user->mobile = $request->mobile;
          $user->address = $request->address;
          $user->city = $request->city;

          if($request->password !="")
          {
            $user->password = bcrypt($request->password);
          }

            if ($file = $request->file('image'))
            {
              if($user->image !="")
              {
                unlink('images/user/'.$user->image);
              }

              $name = time().$file->getClientOriginalName();
              $file->move('images/user', $name);
              $user->image = $name;
            }

          $user->save();

        }

        return back()->with('updated', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        
        if($user->image !=''){
          unlink('images/user/'.$user->image);
        }
        try{
          $user->delete();
          return back()->with('deleted', 'User has been deleted');
        }catch(\Exception $e){
          return back()->with('deleted',$e->getMessage());
        }
        
    }

}
