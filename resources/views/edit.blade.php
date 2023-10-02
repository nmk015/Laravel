@extends('layouts.main')

@section('main-container')
<!-- navbar -->
@php
$subjects = json_decode($students->subjects);
@endphp
<form action="{{url('/')}}/update-data/{{ $students->student_id }}" method="post" enctype="multipart/form-data" >
  @csrf
  @method('PUT')
  <div class="container">
    <h1>Update Student Data</h1>
    <p>Please edit the fields to Update.</p>
    <hr>

    <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control"value="{{ old('name', $students->name) }}" >
        </div>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile:</label>
            <input type="text" id="mobile" name="mobile" class="form-control" value="{{ old('mobile', $students->mobile) }}">
        </div>
        @error('mobile')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="class" class="form-label">Class:</label>
            <select id="class" name="class" class="form-select">
            <option value="Class A" {{ old('class', $students->class) == 'Class A' ? 'selected' : '' }}>Class A</option>
            <option value="Class B" {{ old('class', $students->class) == 'Class B' ? 'selected' : '' }}>Class B</option>
            <option value="Class C" {{ old('class', $students->class) == 'Class C' ? 'selected' : '' }}>Class C</option>
            </select>
        </div>
        @error('class')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label class="form-check-label d-block">Subjects:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="subjects[]" value="Math" id="mathCheckbox" {{in_array('Math', $subjects)? 'checked':''}}>
                <label class="form-check-label" for="mathCheckbox">Math</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="subjects[]" value="Science" id="scienceCheckbox" {{in_array('Science', $subjects)? 'checked':''}} >
                <label class="form-check-label" for="scienceCheckbox">Science</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="subjects[]" value="History" id="historyCheckbox" {{in_array('History', $subjects)? 'checked':''}}>
                <label class="form-check-label" for="historyCheckbox">History</label>
            </div>
        </div>
        @error('subjects')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label class="form-check-label d-block">Gender:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Male" id="maleRadio"
                {{$students->gender == 'Male' ? 'checked' : '' }}
                >
                <label class="form-check-label" for="maleRadio">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Female" id="femaleRadio"
                {{$students->gender == 'Female' ? 'checked' : '' }}
                >
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
            <textarea id="address" name="address" class="form-control">{{ old('address', $students->address) }}</textarea>
        </div>

        @error('address')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    <hr>

    <button class="btn btn-primary registerbtn">Update</button>
  </div>
</form>
@endsection
