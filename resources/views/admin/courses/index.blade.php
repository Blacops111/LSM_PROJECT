@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Courses</h1>
    <a href="{{ route('courses.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Course</a>
    <table class="min-w-full mt-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Description</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td class="border px-4 py-2">{{ $course->title }}</td>
                <td class="border px-4 py-2">{{ $course->description }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('courses.edit', $course) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
