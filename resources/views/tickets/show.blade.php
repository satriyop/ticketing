@extends('layouts.app')
@section('title', 'View a ticket')

@section('content')
    <div class="container col-md-8">
        <div class="card card-body">
            <div class="content">
                <h2>{!! $ticket->title !!}</h2>
                <p><strong>Status</strong> : {!! $ticket->status ? 'Pending' : 'Answered' !!}</p>
                <p>{!! $ticket->content !!}</p>
    
                <a href="{!! action('TicketsController@edit', $ticket->slug) !!}" class="btn btn-secondary">Edit</a>
                
                <form action="{!! action('TicketsController@destroy', $ticket->slug) !!}" method="post">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection