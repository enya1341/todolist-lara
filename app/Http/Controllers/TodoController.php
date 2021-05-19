<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TodoController extends Controller
{
    public function post(Request $request)
    {
        $param = [
            "list" => $request->list
        ];
        DB::table('todolists')->insert($param);
        return response()->json([
            'message' => 'User created successfully',
            'data' => $param
        ], 200);
    }
    public function put(Request $request)
    {
        $param = [
            "list" => $request->list
        ];
        DB::table('todolists')->where('id',$request->id)->update($param);
        return response()->json([
            'message' => 'User updated successfully',
            'data' => $param
        ], 200);
    }
    public function delete(Request $request)
    {
        DB::table('todolists')->where('id', $request->id)->delete();
        return response()->json([
            'message' => 'Like deleted successfully',
        ], 200);
    }
    public function get(Request $request)
    {
        $list = Todolist::all();
        return response()->json([
            'message' => 'User get successfully',
            'data' => $list
        ], 200);
    }
}
