<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TodoController extends Controller
{
    public function post(Request $request)
    {
        echo "<script>console.log( 'test' );</script>";
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
        DB::table('todolists')->update($param);
        return response()->json([
            'message' => 'User updated successfully',
            'data' => $param
        ], 200);
    }
    public function delete(Request $request)
    {
        DB::table('todolists')->where('list', $request->list)->delete();
        return response()->json([
            'message' => 'Like deleted successfully',
        ], 200);
    }
    public function get(Request $request)
    {
        if ($request->has('list')) {
            $items = DB::table('todolists')->where('list', $request->list)->get();
        return response()->json([
            'message' => 'User got successfully',
            'data' => $items
        ], 200);
        } else {
            return response()->json(['status' => 'not found'], 404);
        }
    }
}
