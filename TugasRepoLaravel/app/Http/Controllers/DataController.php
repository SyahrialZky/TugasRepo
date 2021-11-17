<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use app\models\rials;
use App\Models\rials\rials as RialsRials;

class DataController extends Controller
{
    public function index()
    {
        // Query Builder 
        $rial = DB::table('rials')->get();
        return view('myTables', ['rial' => $rial]);
        // Eloquent 
        // $rial = \app\models\rials::all();
    }
    public function delete($id)
    {
        $rial = DB::table('rials')->where('id', $id)->delete();
        return redirect()->back();
    }
    public function create()
    {
        return view('create');
    }
    public function createProcess(Request $request)
    {
        return $request;
    }
}
