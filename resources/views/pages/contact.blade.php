@extends('layouts.default')

@section('content')


    <h1>This is my contact page</h1>
    <p class="lead">Please use this form to contact site owner.</p>
    <form role="form" action="{{route('contact.store')}}" method="post">

        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" class="form-control" id="Name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" class="form-control" id="Email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body" class="form-control" id="Body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2" onclick="/thankyou">Submit</button>
    </form>

@endsection