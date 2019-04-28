<?php

namespace CarListing\Http\Controllers;

use Illuminate\Http\Request;
use CarListing\Http\Requests\FieldRequest;

class FormController extends Controller
{
    public function create()
    {
    	return view('form/create');
    }

    public function store(FieldRequest $request)
    {
     $validatedData = $request->validated();
        \CarListing\Form::create($validatedData);
         return response()->json('Form is successfully validated and data has been saved');
    }
}
