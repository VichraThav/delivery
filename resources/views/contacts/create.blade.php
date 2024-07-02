@extends('layouts.layout')

@section('title', 'Create Contact')

@section('content')
<div class="container">
    <div class="my-4">
        <h1 class="mb-4">Form Create</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="full_name">Full Name:</label>
                        <input type="text" id="full_name" name="full_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
