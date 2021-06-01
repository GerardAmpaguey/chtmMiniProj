@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Equipment</h5>
        </div>
        <div class="card-body">
            <form action="/equipment/{{ $equipment->id }}/update" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="Serial Number">Serial Number:</label>
                            <input type="text" name="serial_number" placeholder="Serial Number" class='form-control'
                                value="{{ $equipment->serial_number }}" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="Brand">Brand:</label>
                            <input type="text" name="brand" placeholder="Brand" class="form-control"
                                value="{{ $equipment->brand }}" required>                           
                        </div>                      
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="Date Bought">Date Bought:</label>
                            <input type="date" name="date_bought" placeholder="Date Bought" class="form-control"
                                value="{{ $equipment->date_bought }}" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="Equipment Category">Equipment Category</label>
                            <select name="equipment_category_id" id="" class="form-control" required>
                                @foreach($equipment_categories as $category)
                                    {{-- check if category id matches --}}
                                    @if($category->id == $equipment->equipment_category_id)
                                        {{-- yes then select the option --}}
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        {{-- no then just display it --}}
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </form>         
        </div>
    </div>
@endsection
