@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
    <h2 class="mb-3">Edit Course</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('courses.update', $course) }}" method="POST">
                @csrf
                @method('PUT')

                @include('courses._form', ['buttonText' => 'Update Course'])
            </form>
        </div>
    </div>
@endsection