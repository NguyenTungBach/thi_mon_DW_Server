<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function all(){ // Tìm đến tất cả
        try {
            $obj = [
                'data'=> Test::all(),
                'status'=> 201,
                'message'=> 'success get all Test',
            ];
        } catch (\Exception $ex){
            $obj = [
                'status'=> 500,
                'message'=> $ex->getMessage(),
            ];
        }
        return response()->json($obj);
    }

    public function create(Request $request){ // Tạo mới
        try {
            $test = new Test();
            $test->name = $request->name;
            $test->price = $request->price;
            $test->avatar = $request->avatar;
            $test->save();
            $obj = [
                'status'=> 201,
                'message'=> 'success create',
            ];
        } catch (\Exception $ex){
            $obj = [
                'status'=> 500,
                'message'=> $ex->getMessage(),
            ];
        }
        return response()->json($obj);
    }

    public function search(Request $request){ // Tìm theo tên
        $search = $request->get('keyword');
        try {
            $test = Test::where('name','like','%'.$search.'%')->get();
            $obj = [
                'data' => $test,
                'status'=> 201,
                'message'=> 'success search',
            ];
        } catch (\Exception $ex){
            $obj = [
                'status'=> 500,
                'message'=> $ex->getMessage(),
            ];
        }
        return response()->json($obj);
    }
}
