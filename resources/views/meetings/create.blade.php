@extends('meetings.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Create New Meeting</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('meetings.index') }}"> Back</a>
        </div>

    </div>
</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>

@endif

   

<form action="{{ route('meetings.store') }}" method="POST">

    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
            <div class="form-group">

                <label for="Title" class="col-form-label">Title <span style="color: red;">*</span></label>
                               
                <input type="textarea" class="form-control" id="Title" placeholder="enter title" name="title" required>
                

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <label for="Date" class="col-form-label">Date <span style="color: red;">*</span></label>

                <input type="date" class="form-control" id="Date" name="date" required>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <label for="Time" class="col-form-label">Start Time <span style="color: red;">*</span></label>

                <input type="time" class="form-control" id="Time" name="start_time" required>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <label for="Time" class="col-form-label">End Time <span style="color: red;">*</span></label>

                <input type="time" class="form-control" id="Time" name="end_time" required>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <label for="Description" class="col-form-label">Description </label>

                <input type="textarea" class="form-control" id="Description" placeholder="enter description" name="description">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <label for="Invitees" class="col-form-label">Invitees </label>

                <input type="text" class="form-control" id="Invitees" placeholder="enter invitees" name="invitees">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <label for="Status" class="col-form-label">Status <span style="color: red;">*</span></label>

                <input type="text" class="form-control" id="Status" placeholder="enter status" name="status" required>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Create</button>

        </div>

    </div>

   

</form>

@endsection