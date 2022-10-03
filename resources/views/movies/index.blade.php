@extends('layout.master')

@section('title', 'Blog')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">List of movies</h1>
            </div>
        </div>          
        <ul>
            @foreach ($movies as $movie)
                <h2>
                    <a href="">
                        <li>{{ $movie->title }}</li>
                    </a>
                </h2>
                <p>{{ $movie->storyline }}</p>
            @endforeach
        </ul>
    </main><!-- /.container -->
@endsection

