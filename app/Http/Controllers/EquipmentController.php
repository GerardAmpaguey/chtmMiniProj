<?php

namespace App\Http\Controllers;

use App\Equipment;
use App\Borrower;
use App\EquipmentCategory;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
    	$equipments = Equipment::all();
    	return view('equipment.index', compact('equipments'));
    }

    public function create()
    {
    	$equipment_categories = EquipmentCategory::all();
    	return view('equipment.create', compact('equipment_categories'));
    }

    public function store()
    {
    	// validate the form
    	request()->validate([
    		'serial_number' => 'required',
    		'brand' => 'required',
    		'date_bought' => 'required',
    		'equipment_category_id' => 'required',
    	]);
    	// store the model
    	$equipment = Equipment::create(request()->only([
    		'serial_number', 'brand', 'date_bought', 'equipment_category_id'
    	]));
    	// redirect to equipment index
    	return redirect('/equipment');
    }

    public function edit(Equipment $equipment)
    {
        $equipment_categories = EquipmentCategory::all();
        return view('equipment.edit', compact('equipment', 'equipment_categories'));
    }

    public function update(Equipment $equipment)
    {
        request()->validate([
            'serial_number' => 'required',
            'brand' => 'required',
            'date_bought' => 'required',
            'equipment_category_id' => 'required',
        ]);
        $equipment->update(request()->only([
            'serial_number', 'brand', 'date_bought', 'equipment_category_id'
        ]));

        return redirect('/equipment');
    }

    public function delete(Equipment $equipment)
    {
        $equipment->delete();
        return redirect('/equipment');
    }

    public function issue(Equipment $equipment)
    {
        $borrowers = Borrower::all();
        return view('equipment.issue' , compact('equipment','borrowers'));
    }
}
