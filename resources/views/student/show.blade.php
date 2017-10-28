@extends('student.layouts.main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 bg-info">
        <h1>{{$student->name}}'s info</h1>
        <p>Date of birth: {{$student->DOB}}</p>
        <p>Address: {{$student->address}}</p>
        <p>Class: {{$student->class}}</p>
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
      </div>
    </div>
  </div>
@endsection