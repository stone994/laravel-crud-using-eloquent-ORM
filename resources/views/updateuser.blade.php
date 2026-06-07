@extends('layout')

@section('title')
Update User
@endsection

@section('content')

<form action="{{ route('user.update',$users->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">User Name</label>
        <input type="text"
               name="username"
               value="{{ $users->name }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">User Email</label>
        <input type="email"
               name="useremail"
               value="{{ $users->email }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">User Age</label>
        <input type="number"
               name="userage"
               value="{{ $users->age }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">User City</label>
        <input type="text"
               name="usercity"
               value="{{ $users->city }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <input type="submit"
               class="btn btn-danger"
               value="Save">
    </div>

</form>

@endsection