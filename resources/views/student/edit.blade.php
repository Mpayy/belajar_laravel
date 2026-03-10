@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $title ?? '' }}</h5>
                    <form action="{{ route('student.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3"> <label class="form-label">Current Image</label><br>
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
                            <input type="text" class="form-control" name="name"
                                value="{{ old('name', $student->name) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email*</label>
                            <input type="email" class="form-control" name="email"
                                value="{{ old('email', $student->email) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone"
                                value="{{ old('phone', $student->phone) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div>
                                <input type="radio" id="gender-male" name="gender" value="1"
                                    {{ old('gender', $student->gender) == '1' ? 'checked' : '' }}>
                                <label for="gender-male" class="form-label">Male</label>
                            </div>
                            <div>
                                <input type="radio" id="gender-female" name="gender" value="0"
                                    {{ old('gender', $student->gender) == '0' ? 'checked' : '' }}>
                                <label for="gender-female" class="form-label">Female</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Change</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
