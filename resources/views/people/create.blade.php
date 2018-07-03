@extends('layouts.master')
 
@section('title', $title)
 
@section('sidebar')
    @parent
    // you can add something here
@endsection
 
@section('content')
 
    <!-- create.blade.php -->
    <h1 id="myHeader">{{ $title }}</h1>
 
    {!! Form::open([
        'route' => 'people.store'
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
            <td>{!! Form::label('bio', 'Short Biography', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::textarea('bio', null, ['class' => 'form-control']) !!}</td>
        </tr>  

        <tr>
            <td>{!! Form::label('dob', 'DOB', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::select('dob', array('1972-09-09' => '1972-09-09', '1971-05-04' => '1971-05-04', '1988-10-19' => '1988-10-19'), null, ['placeholder' => 'Select a dob ']) !!}</td>
        </tr>

        <tr>
            <td>{!! Form::label('address', 'Address', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::textarea('address', null, ['class' => 'form-control']) !!}</td>
        </tr> 

        <tr>
            <td>{!! Form::label('city', 'City', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::select('city', array('Astana' => 'Astana', 'Patna' => 'Patna', 'Kano' => 'Kano'), null, ['placeholder' => 'Select a City']) !!}</td>
        </tr>


        <tr>
            <td>{!! Form::label('country', 'Country', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::select('country', array('Guinea' => 'Guinea', 'Thailand' => 'Thailand', 'New Zealand' => 'New Zealand'), null, ['placeholder' => 'Select a Country']) !!}</td>
        </tr> 
  
        <tr>
            <td></td>
            <td>{!! Form::submit('Submit', ['class' => 'btn btn-submit']) !!}</td>
        </tr>
    </table>        
    
    {!! Form::close() !!}
 
@endsection