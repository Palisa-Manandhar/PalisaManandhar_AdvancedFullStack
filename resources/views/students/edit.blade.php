@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
    <h2 class="mb-3">Edit Student</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.update', $student) }}" method="POST">
                @csrf
                @method('PUT')

                @include('students._form', ['buttonText' => 'Update Student'])
            </form>
        </div>
    </div>
@endsection
