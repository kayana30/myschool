@extends('students.layout')
@section('content')
<div class="card">
    <div class="card-header">Student Details</div>
    <div class="card-body">

        <form action="{{ url('student/' . $student->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <label>Name</label><br>
            <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control"><br>
            <label>Address</label><br>
            <input type="text" name="address" id="address" value="{{ $student->address }}" class="form-control"><br>
            <label>Mobile</label><br>
            <input type="text" name="mobile" id="mobile" value="{{ $student->mobile }}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>
@endsection

