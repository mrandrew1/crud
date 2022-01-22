<?php

namespace App\Http\Controllers;

use App\Children;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;

class SendController extends Controller
{
    public function send(Request $request) {

        $child = new Children();
        $child->name = $request->name;
        $child->lastname = $request->lastname;
        $child->city = $request->city;
        $child->save();

        $children = Children::
        orderBy('id', 'desc')
        ->get();

        return view('table', [
			'children' => $children,
		]);
    }
    public function del(Request $request) {

        Children::Where("id", $request->id)->delete();
        
        $children = Children::
        orderBy('id', 'desc')
        ->get();

        return view('table', [
			'children' => $children,
		]);
    }

    public function correct(Request $request) {

        Children::
              where('id', $request->id)
              ->update(['name' => $request->name,'lastname' => $request->lastname,'city' => $request->city,]);

        $children = Children::
        orderBy('id', 'desc')
        ->get();

        return view('table', [
			'children' => $children,
		]);
    }
}
