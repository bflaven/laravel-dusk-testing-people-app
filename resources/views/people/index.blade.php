@extends('layouts.master')
 
@section('title', $title)
 
@section('sidebar')
    @parent
    // you can add something here
@endsection
 
@section('content')  

  <!--
'name' => 'required',
'email' => 'required',
'username' => 'required',
'bio' => 'required',


    -->
<div id="content">
            <div id="content-news">
                <h2 id="t-news">People</h2>
                <div class="news-block clearfix">
                <ul>
    @foreach ($people as $data)

        <li>
                            <div><h3><a href="{{ route('people.show', $data->id) }}">{{ $data->fullname }}</a></h3>
                            <p>{{ $data->bio }}</p></div>
                            <em><span class="structural">email </span>{{ $data->email }}</em>
                        
                    <!-- actions -->
                    <div id="actions">
                    <table border="0">
                            <tr>
                            <td><a href="{{ route('people.edit', $data->id) }}">Edit</a></td>
                            <td>{!! Form::open(array(
                            'method' => 'DELETE',
                            'route' => ['people.destroy', $data->id],
                            'onsubmit' => "return confirm('Are you sure you want to delete?')",
                        )) 
                    !!}
                        {!! Form::submit('Delete') !!}
                    {!! Form::close() !!}</td>
                        </tr>
                    </table>
                    
                    
                    </div>
                        </li>
                    
    @endforeach
                </ul>
    </div>  
                
            <!-- // content-news -->
        </div>
    
    <!-- Showing Pagination Links -->
    <style>
        ul {display:inline-block}
        li {display:inline; padding:5px}
    </style>    
    <div> {{ $people->links() }} </div>
    <!-- End Showing Pagination Links -->
        
@endsection