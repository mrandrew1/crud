<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Children;

class ApiController extends Controller
{	
	public function get() {

        $children = Children::
        orderBy('id', 'desc')
        ->get();

        return $children;
    }

	public function create(Request $request) {

        $child = new Children();
        $child->name = $request->name;
        $child->lastname = $request->lastname;
        $child->city = $request->city;
        $child->save();

        $children = Children::
        orderBy('id', 'desc')
        ->get();


        return $children;
    }
    public function del($id) {
		
        Children::Where("id", $id)->delete();
        
        $children = Children::
        orderBy('id', 'desc')
        ->get();

        return $children;
    }

    public function correct(Request $request) {

        Children::
              where('id', $request->id)
              ->update(['name' => $request->name,'lastname' => $request->lastname,'city' => $request->city,]);

        $children = Children::
        orderBy('id', 'desc')
        ->get();

        return  $children;
    }
}
