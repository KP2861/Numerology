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
                <!-- Cast $index to integer and ensure correct calculation -->
                <td>{{ intval($numerologies->currentPage() - 1) * intval($numerologies->perPage()) + intval($index) + 1 }}</td>
                <td>{{ $numerology['name'] ?? '-' }}</td>
                <td>{{ $numerology['created_at'] ?? '-' }}</td>
                <td>{{ $numerology['user_names'] ?? '-' }}</td>
                <td>{{ $numerology['user_count'] ?? '-' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No numerologies available</td>
            </tr>
        @endforelse
    </tbody>
</table>

<!-- Custom Pagination Controls -->
<div class="pagination">
    @if ($numerologies->onFirstPage())
        <span class="page-link disabled">Previous</span>
    @else
        <a class="page-link" href="{{ $numerologies->previousPageUrl() }}" rel="prev">Previous</a>
    @endif

    @if ($numerologies->hasMorePages())
        <a class="page-link" href="{{ $numerologies->nextPageUrl() }}" rel="next">Next</a>
    @else
        <span class="page-link disabled">Next</span>
    @endif
</div>
@endsection
