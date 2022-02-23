@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}">Crear Nuevo Estudiante</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->age }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">       
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Editar</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>       
</div>
@endsection