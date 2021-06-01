@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Utensils</h5>
        </div>
        <div class="card-body">
            <a href="/utensils/create" class="btn btn-primary">Add Utensil</a>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($utensils as $utensil)
                        <tr>
                            <td>{{ $utensil->name }}</td>
                            <td>{{ $utensil->unit }}</td>
                            <td>{{ $utensil->quantity }}</td>
                            <td>{{ $utensil->utensil_category->name }}</td>
                            <td>
                                <ul>
                                    <li><a href="/utensils/{{ $utensil->id }}/edit">Edit</a></li>
                                    <li><a href="/utensils/{{ $utensil->id }}/delete">Delete</a></li>
                                 </ul>
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
