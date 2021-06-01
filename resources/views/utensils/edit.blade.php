@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Utensils</h5>
        </div>
        <div class="card-body">
            <form action="/utensils/{{ $utensil->id }}/update" method = 'POST'>
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" name='name' required value="{{ $utensil->name }}">
                        </div>                        
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Unit:</label>
                            <input type="text" class="form-control" name='unit' required value="{{ $utensil->unit }}"> 
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Quantity:</label>
                            <input type="number" class="form-control" name='quantity' required value="{{ $utensil->quantity }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Category:</label>
                            <select name="utensil_category_id" id="" class="form-control" required>
                                @foreach($utensil_categories as $category)
                                    @if($category->id == $utensil->utensil_category_id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>         
        </div>
    </div>
@endsection
