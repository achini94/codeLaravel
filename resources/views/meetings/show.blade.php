@extends('meetings.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2> Show Meeting</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('meetings.index') }}"> Back</a>
            </div>

        </div>
    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                <strong>Title:</strong>
                {{ $meeting->title }}

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Date:</strong>
                {{ $meeting->date }}

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Start Time:</strong>
                {{ $meeting->start_time }}
           
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>End Time:</strong>
                {{ $meeting->end_time }}

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Description:</strong>
                {{ $meeting->description }}

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Invitees:</strong>
                {{ $meeting->invitees }}

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Status:</strong>
                {{ $meeting->status }}

            </div>
        </div>

    </div>

@endsection