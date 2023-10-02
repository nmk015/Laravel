@extends('layouts.main')

@section('main-container')
<!-- navbar -->
<form action="{{url('/')}}/submit" method="post" enctype="multipart/form-data">
  @csrf
  <div class="container">
    <h1>Register as a Student</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
        </div>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile:</label>
            <input type="text" id="mobile" name="mobile" class="form-control" value="{{old('mobile')}}">
        </div>
        @error('mobile')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="class" class="form-label">Class:</label>
            <select id="class" name="class" class="form-select">
            <option value="Class A" {{ old('class') == 'Class A' ? 'selected' : '' }}>Class A</option>
            <option value="Class B" {{ old('class') == 'Class B' ? 'selected' : '' }}>Class B</option>
            <option value="Class C" {{ old('class') == 'Class C' ? 'selected' : '' }}>Class C</option>
            </select>
        </div>
        @error('class')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label class="form-check-label d-block">Subjects:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="subjects[]" value="Math" id="mathCheckbox" {{ in_array('Math', old('subjects', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="mathCheckbox">Math</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="subjects[]" value="Science" id="scienceCheckbox" {{ in_array('Science', old('subjects', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="scienceCheckbox">Science</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="subjects[]" value="History" id="historyCheckbox" {{ in_array('History', old('subjects', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="historyCheckbox">History</label>
            </div>
        </div>
        @error('subjects')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label class="form-check-label d-block">Gender:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Male" id="maleRadio" {{ old('gender') == 'Male' ? 'checked' : '' }}>
                <label class="form-check-label" for="maleRadio">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Female" id="femaleRadio" {{ old('gender') == 'Female' ? 'checked' : '' }}>
                <label class="form-check-label" for="femaleRadio">Female</label>
            </div>
        </div>
        @error('gender')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="profile_pic" class="form-label">Profile Picture:</label>
            <input type="file" id="profile_pic" name="profile_pic" class="form-control">
        </div>
        @error('profile_pic')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea id="address" name="address" class="form-control">{{old('address')}}</textarea>
        </div>

        @error('address')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button class="btn btn-primary registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
@endsection
