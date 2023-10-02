@extends('layouts.main')

@section('main-container')
<!-- navbar -->
    <div class="container">
      <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                
                <th>Class</th>
                <th>Subjects</th>
                <th>Gender</th>
                <th>Profile_pic</th>
                <th>Address</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->mobile}}</td>
               
                <td>{{$student->class}}</td>
                <td> @php
                    $subjects = json_decode($student['subjects']);
                    if ($subjects) {
                        echo implode(', ', $subjects);
                    } else {
                        echo 'No subjects available';
                    }
                    @endphp
                <td>{{$student->gender}}</td>
                <td> @if($student->profile_pic)
                        <img src="{{ asset('/storage/' . $student->profile_pic) }}" alt="Profile Picture" width="100" height="100">
                    @else
                        No Image
                    @endif</td>
                <td>{{$student->address}}</td>
                <td><a href="{{url('student/delete/')}}/{{$student->student_id}}"><button class="btn btn-danger">delete</button></a>
                <td><a href="{{route('student.edit', ['id' => $student->student_id])}}"><button class="btn btn-success">edit</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    @endsection
