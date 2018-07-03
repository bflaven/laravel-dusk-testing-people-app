@extends('layouts.master')
 
@section('title', $title)
 
@section('sidebar')
    @parent
    // you can add something here
@endsection
 
@section('content')
    
    <!-- edit.blade.php -->
    <h1 id="myHeader">{{ $title }}</h1>
 
    {!! Form::model($people, [
        'method' => 'PATCH',
        'route' => ['people.update', $people->id]
    ]) !!}
 
<table border="0">
        <tr>
            <td>{!! Form::label('fullname', 'Name', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::text('fullname', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('email', 'Email', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::text('email', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
        </tr>

        <tr>
            <td>{!! Form::label('username', 'Username', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::text('username', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
        </tr>
        <tr>
            <td valign="top">{!! Form::label('bio', 'Short Biography', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::textarea('bio', null, ['class' => 'form-control']) !!}</td>
        </tr>    
        <tr>
            <td></td>
            <td>{!! Form::submit('Submit', ['class' => 'btn btn-submit']) !!}</td>
        </tr>
    </table>               
    
    {!! Form::close() !!}
 
@endsection