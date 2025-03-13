@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Course Management</h1>

    <a href="{{ route('courses.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Course</a>
    <table class="min-w-full mt-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">Course Title</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through courses and display them here -->
        </tbody>
    </table>
</div>
@endsection

        <thead>
            <tr>
                <th class="border px-4 py-2">Course Title</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through courses and display them here -->
        </tbody>
    </table>
</div>
@endsection
