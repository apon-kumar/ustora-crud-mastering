<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fullNameController extends Controller
{
    protected $fullName;
    public function fullName()
    {
        return view('backend.full-name.index');
    }

    public function getFullName(Request $request)
    {
        $this->fullName = $request->first_name ." ". $request->last_name;
        return back()->with([
            'result' => $this->fullName,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        ]);
    }
}
