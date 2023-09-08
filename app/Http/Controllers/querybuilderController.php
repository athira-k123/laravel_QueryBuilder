<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class querybuilderController extends Controller
{
    public function index(Request $request)
    {
        //$data=DB::table('studentmarks')->insert([
            //$data=DB::table('studentmarks')->where('age','<',25)->get();
            //$data=DB::table('studentmarks')->where('age','=',25)->first();
            //$data=DB::table('studentmarks')->where('age','=',25)->value("id");
            //$data=DB::table('studentmarks')->where('age','<',26)->where("age",'>',28);
            //$data=DB::table('studentmarks')->max('marks');
            //$data=DB::table('studentmarks')->avg('marks');
            //$data=DB::table('studentmarks')->where('age','=',27)->count();
            //$data=DB::table('studentmarks')->find(27);
            //$data=DB::table('studentmarks')->where('name','=',"athira")->exists();
            //$data=DB::table('studentmarks')->distinct()->get('age');

           /* $data=DB::table('studentmarks')->where("name",'=','avani')->update(
                [
                    "name"=>"anitha",
                    "marks"=>79,
                    "age"=>22
                ]
            );*/

           /* $data=DB::table('studentmarks')->updateOrInsert([
            "id"=>3],
                [
                    "name"=>"rose",
                    "marks"=>85,
                    "age"=>21
                ]
            );*/

            $data=DB::table('studentmarks')->where("name",'=','anitha')->delete();
            dd($data);
        //     [
        //         "name"=>'athira',
        //         "age"=>27,
        //         "marks"=>89
        //     ],
        //     [
        //         "name"=>"avani",
        //         "age"=>25,
        //         "marks"=>79
        //     ]
        // ]
        //     );
    }
}