@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Learning Materials</h1>

    <a href="{{ route('materials.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Upload New Material</a>
    <table class="min-w-full mt-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">Material Title</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through materials and display them here -->
        </tbody>
    </table>
</div>
@endsection

        <thead>
            <tr>
                <th class="border px-4 py-2">Material Title</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through materials and display them here -->
        </tbody>
    </table>
</div>
@endsection
