<?php

namespace App\Http\Controllers;
use App\Borrower;
use Illuminate\Http\Request;


class BorrowersController extends Controller
{
    public function index(){
    	$borrowers = Borrower::all();
    	return view('borrowers.index',compact('borrowers'));
    }

    public function create(){
    	return view('borrowers.create');
    }

    public function store(){
    	request()->validate([
    		'id_number' => 'required|unique:borrowers',
    		'first_name'=>'required',
    		'middle_name'=>'required',
    		'last_name'=>'required',
    		'year'=>'required',
    		'course'=>'required'

    	]);

    	Borrower::create(request()->only([
    		'id_number','first_name','middle_name','last_name','year','course']));

    	return redirect('/borrowers');
    }
}
