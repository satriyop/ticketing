@extends('layouts.app')
@section('title', 'Edit Ticket!')
@section('content')
    <div class="container">
        <div class="card card-body">
            <form method="POST"> 
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger"> {{ $error }} </p>
                @endforeach
    
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
    
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <legend>Edit Ticket</legend>
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Title </label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="title" name="title" value="{!! $ticket->title !!}">
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="content" class="col-lg-2 control-label">Content</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" id="content" name="content" rows="3">{!! $ticket->content !!}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="status" {!! $ticket->status?"":"checked" !!}> Close this ticket ?
                    </label>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection