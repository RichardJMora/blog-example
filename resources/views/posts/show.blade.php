@extends('layouts.app')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class="row">

            <!-- Blog Post Content Column -->
        <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{ $post->title }}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="/user/{{$post->user->id}}">{{ $post->user->name }}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="{{ $post->image }}">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{ $post->body }}</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Deja un comentario:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                @if (count($comments) > 0) 
                @foreach ($comments as $comment)
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                            
                        @endforeach
                        <h4 class="media-heading">{{ $comment->user->name }}
                            <small>{{ $comment->created_at->format("F j, Y, g:i a") }}</small>
                        </h4>
                        {{ $comment->body }}
                    </div>
                </div>

                @else 
                
                <p>No existen comentarios para mostrar</p>

                @endif
        </div>
</div>        


@endsection