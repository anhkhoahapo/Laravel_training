@extends('student.layouts.main')

@section('styles')
  <style>
    .form-inline {
      margin-top: 25px;
      text-align: end;
    }
  </style>
@endsection

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
        <form method="get" action={{url('student/search')}} class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Student name" name="n">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>

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
          {!! Form::open(
            [
              'method' => 'DELETE',
              'action'=> ['StudentController@destroy', $student->id],
              'class'=>'form-inline',
              'style'=>'display:inline'
            ]
          ) !!}

            <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>

          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach

      </tbody>
    </table>
  </div>

@endsection