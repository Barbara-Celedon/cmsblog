@extends('layouts.app')
@section('content')

<div class="container">

    <div class="col-md-8">

        <h1>Lista de Posts</h1>

        @foreach($posts as $post)
        <div class="panel panel-default">

            <div class="panel-heading"> 

                {{ $post->name }}

            </div>

            <div class="panel-body">
                
                <!-- //aca ira el codigo para la imagen (falta) -->
                {{ $post->excerpt }}
                <a href="{{ route('post', $post->slug) }}" class="pull-right"> Leer mas</a>
                
            </div>

            
        </div> <!--cierre panel default -->

        @endforeach
        
        {{ $posts->render() }}
    </div>

</div>



@endsection