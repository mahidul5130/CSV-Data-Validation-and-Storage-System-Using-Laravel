@extends('layouts.app')

@section('title', 'Upload Summary')

@section('content')
    <div class="container mt-5">
        <h2>Summary Report</h2>
        <div class="row">
            <div class="col-md-6">
                <!-- Summary statistics -->
                <p>Total Data: {{ $summary['totalData'] }}</p>
                <p>Total Successfully Uploaded: {{ $summary['totalUploaded'] }}</p>
                <p>Total Duplicate: {{ $summary['totalDuplicate'] }}</p>
                <p>Total Invalid: {{ $summary['totalInvalid'] }}</p>
                <p>Total Incomplete: {{ $summary['totalIncomplete'] }}</p>
            </div>
        </div>

        <h2>Invalid Records</h2>
        <!-- Table for displaying invalid records -->
        <table class="table">
            <thead>
                <tr>
                    <th>Record</th>
                    <th>Errors</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invalidRecords as $record)
                <tr>
                    <td>{{ implode(', ', $record['record']) }}</td>
                    <td>{{ implode(', ', $record['errors']) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Duplicate Records</h2>
        <!-- Table for displaying duplicate records -->
        <table class="table">
            <thead>
                <tr>
                    <th>Record</th>
                    <th>Existing User</th>
                </tr>
            </thead>
            <tbody>
                @foreach($duplicateRecords as $record)
                <tr>
                    <td>{{ implode(', ', $record['record']) }}</td>
                    <td>{{ implode(', ', $record['existing_user']->toArray()) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection