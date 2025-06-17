@extends('students.layout')
@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <form action="{{ url('/student') }}" method="POST" accept-charset="UTF-8">
            @csrf

            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Address</label><br>
            <input type="text" name="address" id="address" class="form-control"><br>
            <label>Mobile</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control"><br>
            <input type="submit" value="Submit" class="btn btn-success">
        </form>
    </div>
</div>
@endsection



