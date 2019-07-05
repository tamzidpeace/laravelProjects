@extends('layouts.hospital')


@section('content')

<h2><strong>Pending Appointments</strong></h2>

<table class="table table-bordered">
    <tr class="info">
        <th>#</th>
        <th>Doctor</th>
        <th>Patient</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Period</th>
        <th>Status</th>
        <th>Action</th>
        <th>Action</th>
    </tr>

    @foreach ($pending_appointments as $pa)
    <tr>
        <td> {{$pa->id}} </td>
        <td> {{$pa->doctor->name}} </td>
        <td> {{$pa->patient_name}} </td>
        <td> {{$pa->patient_email}} </td>
        <td> {{$pa->patient_phone}} </td>
        <td> {{$pa->date}} </td>
        <td> {{$pa->period}} </td>
        <td> {{$pa->status}} </td>
        <td> {{-- accept button --}}
            {!! Form::open(['action' => ['HospitalController@acceptAppointment', $pa->id], 'method' =>'patch'])
            !!}

            <div class="form-group">
                {!! Form::submit('Accept', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </td>

        <td>
            {{-- reject button --}}
            {!! Form::open(['action' => ['HospitalController@rejectAppointment', $pa->id], 'method' =>'delete'])
            !!}

            <div class="form-group">
                {!! Form::submit('Reject', ['class' => 'btn btn-danger']) !!}
            </div>

            {!! Form::close() !!}
        </td>

    </tr>
    @endforeach

</table>

@endsection