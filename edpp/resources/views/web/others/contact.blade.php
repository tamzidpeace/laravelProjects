@extends('layouts.app')

@section('content')

{{-- Top bar portion start --}}
<div class="contact-head">
    {{-- contact bar  for hospital--}}
    <div class="contact">
        <h1>CONTACT</h1>
        <h3>Contact With Us or Report Any Issue</h3>
    </div>
</div>
{{-- end of top bar portion --}}

{{-- contact body --}}

{{-- report form --}}
<div class="col-md-8">
    <div class="sidebar">
        <div class="panel panel-default">
            <div class="panel-heading" id="sidebar-title">
                <h3 style="font-weight:bold; color:white" class="panel-title">Report-Suggestion Form</h3>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse mollitia aliquid officiis quasi
                    qui perferendis dignissimos commodi, quod dicta neque. Aliquid dolor fugit minus pariatur
                    sapiente. Reprehenderit placeat ipsam quas.</p>
            </div>
        </div>
    </div>
</div>

{{-- our address --}}
<div class="col-md-4">
    <div class="sidebar">
        <div class="panel panel-default">
            <div class="panel-heading" id="sidebar-title">
                <h3 style="font-weight:bold; color:white" class="panel-title">Phone-Address</h3>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse mollitia aliquid officiis quasi
                    qui perferendis dignissimos commodi, quod dicta neque. Aliquid dolor fugit minus pariatur
                    sapiente. Reprehenderit placeat ipsam quas.</p>
            </div>
        </div>
    </div>
</div>

@endsection