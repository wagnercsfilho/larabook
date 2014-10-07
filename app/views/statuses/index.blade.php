@extends('layouts.default')

@section('content')

    <div id="social-timeline" class="row-fluid" style="padding-top: 15px">
        <div class="span9">
            <div class="row-fluid">
                @include ('statuses.partials.publish-status-form')
                <!-- BEGIN SHARED TEXT SECTION -->
                @include ('statuses.partials.statuses')
            </div>
       </div>
        @include ('statuses.partials.navlist')
    </div>

@stop