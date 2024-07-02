@extends('layouts.layout')

@section('title', 'Edit Contact')

@section('content')
<div class="container">
    <div class="my-4">
        <h1 class="mb-4">Form Edit</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="full_name">Full Name:</label>
                        <input type="text" id="full_name" name="full_name" class="form-control" value="{{ $contact->full_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ $contact->phone_number }}" required>
                    </div>
                    <div class=" text-right">
                        <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
