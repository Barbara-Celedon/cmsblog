@extends('layouts.app')
@section('content')

<div class="container">

  

        <h1>Lista de Posts</h1>

        @foreach($posts as $post)
        <div class="card mb-3">
            @if($post->file)
                <img src="images/posts/default_2.jpg" class="card-img-top" alt="imagen de prueba" height="200">
            @endif

            <div class="card-header"> 

                {{ $post->name }}

            </div>

            <div class="card-body">
                
                <!-- //aca ira el codigo para la imagen (falta) -->
                {{ $post->excerpt }}
                
                <a href="{{ route('post', $post->slug) }}" class="btn btn-primary float-right"> Leer mas</a>
                
            </div>

            
        </div> <!--cierre panel default -->

        @endforeach
        
        {{ $posts->render() }}
   

</div>



@endsection