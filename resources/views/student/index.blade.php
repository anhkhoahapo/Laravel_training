@extends('student.layouts.main')

@section('content')

  <div class="container">
    <div class="row">
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
      @endif
      <div class="col-md-6">
        <h2>Student list</h2>
        <p>Dummy students</p>
      </div>
      <div class="col-md-6">
        <a class="btn btn-primary" href={{url('student/create')}}>+</a>
      </div>
    </div>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date of birth</th>
        <th>Address</th>
        <th>Class</th>
        <th></th>
      </tr>
      </thead>
      <tbody>

      @foreach($students as $student)
      <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->DOB}}</td>
        <td>{{$student->address}}</td>
        <td>{{$student->class}}</td>
        <td>
          <a class="btn btn-success" href={{url('student',[$student->id])}}>Show</a>
          <a class="btn btn-primary" href={{url('student/'. $student->id . '/edit')}}>Edit</a>
        </td>
      </tr>
      @endforeach

      </tbody>
    </table>
  </div>

@endsection