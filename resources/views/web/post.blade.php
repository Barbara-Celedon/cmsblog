@extends('layouts.app')
@section('content')

<div class="container">

    <div class="col-md-8">

        <h1>{{ $post->name }}</h1>

        
        <div class="panel panel-default">

            <div class="panel-heading"> 
                
                Categoria
                <a href="#"> {{ $post->category->name }}  </a>
                


            </div>

            <div class="panel-body">
                
                <!-- //aca ira el codigo para la imagen (falta) -->
                
                {{ $post->excerpt }}
                <hr>
                {{ $post->body }}
                <hr>
                
                Etiquetas
                @foreach($post->tags as $tag)
                <a href="#">
                    {{$tag->name}}
                </a>
                
                
                
                @endforeach
             
                
            </div>

            
        </div> <!--cierre panel default -->

       
    </div>

</div>



@endsection
