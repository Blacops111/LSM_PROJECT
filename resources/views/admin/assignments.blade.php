@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Assignments</h1>

    <a href="{{ route('assignments.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Assignment</a>
    <table class="min-w-full mt-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">Assignment Title</th>
                <th class="border px-4 py-2">Due Date</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through assignments and display them here -->
        </tbody>
    </table>
</div>
@endsection

        <thead>
            <tr>
                <th class="border px-4 py-2">Assignment Title</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through assignments and display them here -->
        </tbody>
    </table>
</div>
@endsection
