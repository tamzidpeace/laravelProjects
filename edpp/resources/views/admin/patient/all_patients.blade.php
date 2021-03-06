@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <h1>All Patients</h1>

        <div class="col-md-8">
            <table class="table table-bordered">
                <tr class="info">
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Status</th>
                </tr>

                @foreach ($patients as $patient)

                <tr>
                    <td><a href="/admin/patient/{{$patient->id}}/details">{{$patient->name}}</a></td>
                    <td>{{$patient->phone}}</td>
                    <td>{{$patient->status}}</td>
                </tr>

                @endforeach
            </table>
        </div>

    </div>
</div>

@endsection