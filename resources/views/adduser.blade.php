
@extends('layout')

@section('title')
Add New User
@endsection

@section('content')
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="text" name="username" class="form-control" id="">
    </div>
    <div class="mb-3">
        <label for="useremail" class="form-label">User Email</label>
        <input type="email" name="useremail" class="form-control" id="">

    </div>
    <div class="mb-3">
        <label for="username" class="form-label">User Age</label>
        <input type="number" class="form-control" name="userage" id="">
    
    </div>
     <div class="mb-3">
        <label for="usercity" class="form-label">User City</label>
        <input type="text" class="form-control" name="usercity" id="">
    
    </div>

     <div class="mb-3">
        <input type="submit" class="btn btn-success" value="Save">
    
    </div>

</form>
@endsection
