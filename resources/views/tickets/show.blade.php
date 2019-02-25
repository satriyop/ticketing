@extends('layouts.app')
@section('title', 'View a ticket')

@section('content')
    <div class="container col-md-8">
        <div class="card card-body">
            <div class="content">
                <h2>{!! $ticket->title !!}</h2>
                <p><strong>Status</strong> : {!! $ticket->status ? 'Pending' : 'Answered' !!}</p>
                <p>{!! $ticket->content !!}</p>
                
                <form action="{!! action('TicketsController@destroy', $ticket->slug) !!}" method="post">
                    @csrf
                    <div class="form-group">
                        <a href="{!! action('TicketsController@edit', $ticket->slug) !!}" class="btn btn-secondary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
                
            </div>
        </div>

        @foreach ($comments as $comment)
            <div class="card">
                <div>
                    {{ $comment->content }}
                </div>
            </div>
        @endforeach

        <div class="card card-body">
            <form action="/comment" method="post">
                @csrf
                <input type="hidden" name="post_id" value="{{ $ticket->id }}">
                <input type="hidden" name="user_id" value="{{ $ticket->user_id }}">

                @foreach ($errors as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <legend>Reply</legend>
                <div class="form-group">
                    <div>
                        <textarea name="content" id="content" rows="3" cols="100"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection