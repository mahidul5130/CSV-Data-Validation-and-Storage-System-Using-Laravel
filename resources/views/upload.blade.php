@extends('layouts.app')

@section('title', 'Upload CSV')

@section('content')
    <div class="container mt-5">
        <h2>Upload CSV</h2>
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="file" class="form-label">Choose CSV File</label>
                <input type="file" class="form-control" id="file" name="file" accept=".csv">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
@endsection