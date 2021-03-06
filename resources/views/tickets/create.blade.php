@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="container col-md-8">
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
                <legend> Submit New Ticket </legend>
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Title </label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Ticket Title">
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="content" class="col-lg-2 control-label">Content</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit Ticket</button>
                <button class="btn btn-secondary">Cancel</button>
            </form>
        </div>
    </div>

@endsection