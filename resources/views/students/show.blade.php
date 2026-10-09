@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Student Details</h2>

        <div>
            <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">
                Edit Student
            </a>

            <a href="{{ route('students.index') }}" class="btn btn-secondary">
                Back to List
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Student #{{ $student->id }}
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 200px;">Full Name</th>
                    <td>{{ $student->name }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $student->email }}</td>
                </tr>

                <tr>
                    <th>Phone</th>
                    <td>{{ $student->phone }}</td>
                </tr>

                <tr>
                    <th>Address</th>
                    <td>{{ $student->address }}</td>
                </tr>

                <tr>
                    <th>Date of Birth</th>
                    <td>{{ $student->date_of_birth->format('Y-m-d') }}</td>
                </tr>

                <tr>
                    <th>Created At</th>
                    <td>{{ $student->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
