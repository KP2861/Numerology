@extends('Admin.layouts.app')

@section('content')
<h1>Numerology List</h1>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Created At</th>
            <th>User Names</th>
            <th>User Count</th>
        </tr>
    </thead>
    <tbody>
        @forelse($numerologies as $index => $numerology)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $numerology->name ?? '-' }}</td>
                <td>{{ $numerology->created_at ?? '-' }}</td>
                <td>{{ $numerology->user_names ?? '-' }}</td>
                <td>{{ $numerology->user_count ?? '-' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No numerologies available</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
