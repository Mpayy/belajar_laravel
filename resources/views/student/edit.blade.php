@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $title ?? '' }}</h5>
                <form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
<div class="row mb-3">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="name" class="form-label">Name*</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name"
                value="{{ $student->name }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone*</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone"
                value="{{ $student->phone }}">
        </div>
        {{-- <div class="mb-3"> <label class="form-label">Current Image</label><br>
            @if ($student->image)
            <img src="{{ asset('uploads/students/' . $student->image) }}" width="80">
            @else
            <p>No image</p>
            @endif
        </div> --}}
        <div class="mb-3">
            <label for="image" class="form-label">Image*</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ asset('uploads/students/' . $student->image) }}" alt="" width="100">
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email"
                    value="{{ $student->email }}">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label d-block">Gender*</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="1" {{ $student->gender
                    ==
                    '1' ? 'checked' : '' }}>
                    <label for="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="0" {{ $student->gender
                    ==
                    '0' ? 'checked' : '' }}>
                    <label for="form-check-label" for="female">Female</label>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control"
                placeholder="Enter Your Address">{{ $student->address }}</textarea>
        </div>
    </div>
</div>
{{-- <div class="mb-3"> <label class="form-label">Current Image</label><br>
    @if ($student->image)
    <img src="{{ asset('uploads/students/' . $student->image) }}" width="80">
    @else
    <p>No image</p>
    @endif
</div>
<div class="mb-3">
    <label for="image" class="form-label">Change Image</label>
    <input type="file" class="form-control" name="image" accept="image/*">
</div>
<div class="mb-3">
    <label class="form-label">Name*</label>
<input type="text" class="form-control" name="name" value="{{ old('name', $student->name) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email*</label>
<input type="email" class="form-control" name="email" value="{{ old('email', $student->email) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
<input type="text" class="form-control" name="phone" value="{{ old('phone', $student->phone) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div>
<input type="radio" id="gender-male" name="gender" value="1" {{ old('gender', $student->gender) == '1' ? 'checked' : ''
}}>
<label for="gender-male" class="form-label">Male</label>
                            </div>
                            <div>
<input type="radio" id="gender-female" name="gender" value="0" {{ old('gender', $student->gender) == '0' ? 'checked' :
'' }}>
<label for="gender-female" class="form-label">Female</label>
</div>
</div> --}}
<button type="submit" class="btn btn-primary">Save Change</button>
<a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                    </form>
</div>
</div>
</div>
</div>
@endsection