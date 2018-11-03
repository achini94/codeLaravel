@extends('meetings.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2>Meeting Details</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('meetings.create') }}"> Create New Meeting</a>
            </div>

        </div>
    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

   

    <table class="table">

        <tr>
            <th>Meeting No</th>
            <th>Title</th>
            <th>Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Description</th>
            <th>Invitees</th>
            <th>Status</th>
            <th width="250px">Action</th>
        </tr>

        @foreach ($meetings as $meeting)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $meeting->title }}</td>
            <td>{{ $meeting->date }}</td>
            <td>{{ $meeting->start_time }}</td>
            <td>{{ $meeting->end_time }}</td>
            <td>{{ $meeting->description }}</td>
            <td>{{ $meeting->invitees }}</td>
            <td>{{ $meeting->status }}</td>
            
            <td>
                <form action="{{ route('meetings.destroy',$meeting->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('meetings.show',$meeting->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('meetings.edit',$meeting->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach

    </table>


    {!! $meetings->links() !!}

      
@endsection