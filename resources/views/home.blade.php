@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    {{-- You are logged in! --}}
                  <pre>
                    {{-- {{ dd(json_encode(LaraFlash::allByPriority())) }} --}}
                  </pre>
                  <p>You are not a registered Rancho Web Designs client.</p>
				  <p>Please call <a href="tel:9494563310">(949)456-3310</a> to schedule an appointment.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
