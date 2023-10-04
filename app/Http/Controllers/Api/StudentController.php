<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Student;
use Validator;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students=Student::all();

        if(count($students)>0)
        {
            $data=
            [
                'status'=>200,
                'students'=>$students,
            ];
            return response()->json($data);
        }else{
            $data=
            [
                'status'=>404,
                'students'=>'Students Record :: EMPTY',
            ];
            return response()->json($data);
        }
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),
        [
        'photo'=>'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'name'=>'required',
        'class'=>'required',
        'subject'=>'required',
        'roll_no'=>'required | unique:students',
        'phone_no'=>'required'

        ]);
if($validate->fails())
{
    $data=
    [
        'status'=>422,
        'error'=>$validate->messages(),
    ];
    return response()->json($data);

}else{
    $image = $request->file("photo");
    $new_name =$request->roll_no.".png";
   
   $image->move(public_path("images/students"), $new_name);
    $student=Student::create([
        'photo'=>$new_name,
        'name'=>$request->name,
        'class'=>$request->class,
        'subject'=>$request->subject,
        'roll_no'=>$request->roll_no,
        'phone_no'=>$request->phone_no,
    ]);
    if($student){
        $data=
    [
        'status'=>200,
        'success'=>'Student Record Save',
    ];
    return response()->json($data);
    }else{
        $data=
        [
            'status'=>404,
            'success'=>'Oops! Something Went Wrong',
        ];
        return response()->json($data);
    }
}
     
    }

    public function delete($id)
    {
        $get_student=DB::table('students')->where('id',$id)->first();

        if($get_student)
        {
            $to_delete=[
                'name'=>$get_student->name,
                'roll_no'=>$get_student->roll_no,
                'phone_no'=>$get_student->phone_no
            ];
            if (File::exists('images/students/'.$get_student->roll_no.'.png')) {
                File::delete('images/students/'.$get_student->roll_no.'.png');
            }
            $delete=DB::table('students')->where('id',$get_student->id)->delete();
         if($delete){
            $data=
            [
                'status'=>200,
                'message'=>'Record Deleted',
                'student'=>$to_delete,
            ];
            return response()->json($data);
         }else{
            $data=
            [
                'status'=>404,
                'message'=>'Opps! Something Went Wrong',
            ];
            return response()->json($data);
         }
         }else{
            $data=
            [
                'status'=>300,
                'message'=>'No Record Found',
            ];
            return response()->json($data);
        }
    }
    
}
