@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Courses</h2>

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            Add Course
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            @if ($courses->count())
                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Duration (weeks)</th>
                                <th>Fee</th>
                                <th>Difficulty</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->duration }}</td>
                                    <td>{{ number_format((float) $course->fee, 2) }}</td>
                                    <td>{{ $course->difficulty }}</td>
                                    <td>
                                        @if ($course->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('courses.show', $course) }}"
                                           class="btn btn-sm btn-info">View</a>

                                        <a href="{{ route('courses.edit', $course) }}"
                                           class="btn btn-sm btn-warning">Edit</a>

                                        <form action="{{ route('courses.destroy', $course) }}"
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this course?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $courses->links() }}
            @else
                <p class="text-muted mb-0">No courses have been added yet.</p>
            @endif
        </div>
    </div>
@endsection