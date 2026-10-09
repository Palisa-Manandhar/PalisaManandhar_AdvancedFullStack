@extends('layouts.app')

@section('title', 'Course Details')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Course Details</h2>

        <div>
            <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">
                Edit Course
            </a>

            <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                Back to List
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Course #{{ $course->id }}
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 200px;">Course Name</th>
                    <td>{{ $course->name }}</td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td>{{ $course->description }}</td>
                </tr>

                <tr>
                    <th>Duration</th>
                    <td>{{ $course->duration }} weeks</td>
                </tr>

                <tr>
                    <th>Fee</th>
                    <td>{{ number_format((float) $course->fee, 2) }}</td>
                </tr>

                <tr>
                    <th>Difficulty</th>
                    <td>{{ $course->difficulty }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if ($course->is_active)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-secondary">Inactive</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Created At</th>
                    <td>{{ $course->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
