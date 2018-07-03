<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @section('header')
            <div class="view-all"><a href="{{ route('people.index') }}" id="home">Home</a> | <a href="{{ route('people.create') }}" id="add_new">Add Person</a></div>

        @show
        
        @if(Session::has('flash_message'))
            <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px; margin-bottom:30px">
                {{ Session::get('flash_message') }}
            </div>
        @endif
 
        @if($errors->any())
            <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px;margin-bottom:30px">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        
        <div>            
            @yield('content')
        </div>
        
        

        <div id="footer">
            <span>© copyright by Officiis</span>
        </div>

    </body>
</html>