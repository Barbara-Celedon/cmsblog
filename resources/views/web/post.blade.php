@extends('layouts.app')
@section('content')

<div class="container">

    

        <h1>{{ $post->name }}</h1>

        
        <div class="card mb-3">
            
            @if($post->file)
            <img src="images/posts/default.png" class="card-img-top" alt="imagen de prueba" height="200">
            @endif

            <div class="card-header"> 
                
                Categoria
                <a href="{{ route('category', $post->category->slug) }}"> {{ $post->category->name }}  </a>
                


            </div>

            <div class="card-body">
                
                <!-- //aca ira el codigo para la imagen (falta) -->
                
                {{ $post->excerpt }}
                <hr>
                <div class="jumbotron jumbotron-fluid">
                    
                    <div class="container">
                        
                        <p class="lead">{{ $post->body }}</p>
                    </div>
                </div>
            
                <hr>
                
                Etiquetas
                @foreach($post->tags as $tag)
                <a href="#">
                    <span class="badge badge-secondary">
                    {{$tag->name}}
                    </span>
                </a>
                
                
                
                @endforeach
             
                
            </div>

            
        </div> <!--cierre panel default -->

       
   

</div>



@endsection
