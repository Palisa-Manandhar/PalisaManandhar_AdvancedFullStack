@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Students</h2>

        <a href="{{ route('students.create') }}" class="btn btn-primary">
            Add Student
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            @if ($students->count())
                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->date_of_birth->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="{{ route('students.show', $student) }}"
                                           class="btn btn-sm btn-info">View</a>

                                        <a href="{{ route('students.edit', $student) }}"
                                           class="btn btn-sm btn-warning">Edit</a>

                                        <form action="{{ route('students.destroy', $student) }}"
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this student?')">
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

                {{ $students->links() }}
            @else
                <p class="text-muted mb-0">No students have been added yet.</p>
            @endif
        </div>
    </div>
@endsection
