@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Assignments</h1>
    <a href="{{ route('assignments.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Assignment</a>
    <table class="min-w-full mt-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Description</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assignments as $assignment)
            <tr>
                <td class="border px-4 py-2">{{ $assignment->title }}</td>
                <td class="border px-4 py-2">{{ $assignment->description }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('assignments.edit', $assignment) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('assignments.destroy', $assignment) }}" method="POST" style="display:inline;">
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
