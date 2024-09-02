@extends('Admin.layouts.app')

@section('content')
<h1>User List</h1>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Numerologies</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $index => $user)
            <tr>
                <td>{{ $users->firstItem() + $index }}</td>
                <td>{{ $user->name ?? '-' }}</td>
                <td>{{ $user->email ?? '-' }}</td>
                <td>{{ $user->created_at ? $user->created_at->format('Y-m-d H:i:s') : '-' }}</td>
                <td>{{ $user->numerology_names ?? '-' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No data access</td>
            </tr>
        @endforelse
    </tbody>
</table>


@endsection
