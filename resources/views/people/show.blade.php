@extends('layouts.master')
 
@section('title', $people->fullname)
 
@section('sidebar')
    @parent
    // you can add something here
@endsection
 
@section('content')
<!-- show.blade.php -->
<div id="content">
   			<div id="title-area" class="clearfix">
	  			<div id="title">
	  				<h2>{{ $people->fullname }}</h2>
	  				<em class="by"><span class="structural">email </span>Author: {{ $people->email }} <span class="structural">Created on:  </span><span class="date">{{ $people->created_at }}</span></em>
	  			</div>	
  			</div>
  			<!-- // title-area -->
  			<div id="article-area">
  					<ul class="info">
  						
						<li>User name : <a>{{ $people->username }}</a></li>
									
					</ul>
			<p>{{ $people->bio }}</p>					
  			</div>
  			<!-- // article-area -->	

    
@endsection