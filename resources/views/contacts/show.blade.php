@extends('layouts.layout')

@section('title', 'Contact Details')

@section('content')
<div class="container" style="background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
    <div class="my-4">
        <h1 class="mb-4 ">Details</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Full Name:</strong> {{ $contact->full_name }}</p>
                <p><strong>Phone Number:</strong> {{ $contact->phone_number }}</p>
                <br><br>
            </div>
        </div>
    </div>
    <div class=" text-right">
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection
