@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $title ?? '' }}</h5>
                    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                        @if ($errors->any())
                            <div class="alert alert-danger">{{ $errors->first() }}</div>
                        @endif
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label">Image*</label>
                            <input type="file" class="form-control" id="image" name="image"
                                placeholder="Image Input" accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Name" required value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Email" required value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone*</label>
                            <input type="phone" class="form-control" id="phone" name="phone"
                                placeholder="Enter Phone Number" required value="{{ old('phone') }}">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <div>
                                <input type="radio" id="gender-male" name="gender" value="1"
                                    {{ old('gender') == '1' ? 'checked' : '' }}>
                                <label for="gender-male" class="form-label">Male</label>
                            </div>
                            <div>
                                <input type="radio" id="gender-female" name="gender" value="0"
                                    {{ old('gender') == '0' ? 'checked' : '' }}>
                                <label for="gender-female" class="form-label">Female</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
