@extends('master')
@section('title', 'Contact')
@section('content')
    <div class="container col-md-8">
        <form method="POST"> 
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger"> {{ $error }} </p>
            @endforeach
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <legend> Submit New Ticket </legend>
            <div class="form-group">
                <label for="formGroupExampleInput">Title </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Ticket Title">
              </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Submit Ticket</button>
            <button class="btn btn-secondary">Cancel</button>
        </form>
    </div>

@endsection