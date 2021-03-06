@extends('layouts.app')

@section('content')


{{-- Search bar portion start --}}
<div class="doctor-head">
  {{-- search bar  for emergency service--}}

  <div class="row">
    {{-- search form --}}
    {!! Form::open(['action' => 'EmergencyController@emergencySearch', 'method' =>'GET'])
    !!}

    {{-- testing input group --}}
    <div class="doctor-search">
      <div class="input-group">
        <input style="font-weight:bold;" type="text" name="search" class="form-control"
          placeholder="Search for Emergency Service by Name or Address.">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit"> <span style="font-weight:bold;" class="">Search</span>
          </button>
        </span>
      </div><!-- /input-group -->
    </div>

    {!! Form::close() !!}
  </div>
</div>
{{-- end of search bar portion --}}



{{-- start of list the emergency service hospital --}}
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-info hospital-panel">
        <div class="panel-heading" id="specialist-panel-heading">
            <h3 style="font-weight:bold; color:white" class="panel-title">Available Hospitals</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">

                @if ((count($hospitals) <= 0)) <li class="list-group-item">
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h3> <strong>Oh snap!</strong>No Hospital Available.</h3>
                        </li>


                        @else
                        @foreach ($hospitals as $hospital)
                        <li class="list-group-item">
                            <div class="">
                                <img class="img-thumbnail hospital-image"
                                    src="/images/es_image/{{$hospital->photo}} " alt="">
                            </div>

                            <div class="hospital-deatils">
                                <a href="/edpp/hospital/details/{{$hospital->id}}">
                                    <h3> {{$hospital->name}} </h3>
                                </a>
                                <h4> Phone: {{$hospital->phone}} </h4>
                                <h4> Address: {{$hospital->address}} </h4>
                            </div>
                        </li>
                        @endforeach

                        {{-- {{ $hospitals->links() }} --}}

                        @endif
            </ul>


        </div>
    </div>
    </div>



    {{-- sidebar --}}
    <div class="col-md-4">
      <div class="sidebar">
        <div class="panel panel-default">
          <div class="panel-heading" id="sidebar-title">
            <h3 style="font-weight:bold; color:white" class="panel-title">Want to include your hospital for Emergency
              Service?</h3>
          </div>
          <div class="panel-body">

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse mollitia aliquid officiis quasi
              qui perferendis dignissimos commodi, quod dicta neque. Aliquid dolor fugit minus pariatur
              sapiente. Reprehenderit placeat ipsam quas.</p>
            <a href="/edpp/emergency/emergency-form" class="btn btn-success" role="button">Yes</a>
            <a href="#" class="btn btn-danger" role="button">No</a>
          </div>
        </div>
      </div>
      <div class="sidebar">
        <div class="panel panel-default">
          <div class="panel-heading" id="sidebar-title">
            <h3 style="font-weight:bold; color:white" class="panel-title">Health Tips</h3>
          </div>
          <div class="panel-body">

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse mollitia aliquid officiis quasi
              qui perferendis dignissimos commodi, quod dicta neque. Aliquid dolor fugit minus pariatur
              sapiente. Reprehenderit placeat ipsam quas.</p>
          </div>
        </div>
      </div>
    </div> {{-- end of sidebar --}}
  </div>
  {{-- end of specialist section --}}
  @endsection