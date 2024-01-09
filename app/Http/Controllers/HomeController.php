<?php

namespace App\Http\Controllers;
use App\Models\Wish;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request  $request)
    {
        $data = Wish::paginate(5);
        $to = $request->input('inviteto');
        return view('welcome',compact('to','data'));
    }

    public function loadData(Request $request)
    {
        $items = Wish::paginate(5);
        $to = $request->input('inviteto');
        return response()->json(['data' => $items]);
    }

}
