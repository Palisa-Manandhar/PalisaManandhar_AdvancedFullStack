@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
    <h2 class="mb-3">Add New Student</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name"
                           class="form-control" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                           class="form-control" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone"
                           class="form-control" value="{{ old('phone') }}" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address"
                              class="form-control" rows="3" required>{{ old('address') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" name="date_of_birth" id="date_of_birth"
                           class="form-control" value="{{ old('date_of_birth') }}"
                           max="{{ date('Y-m-d', strtotime('-1 day')) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Save Student</button>

                <a href="{{ route('students.index') }}" class="btn btn-secondary">
                    Cancel
                </a>
            </form>
        </div>
    </div>
@endsection
