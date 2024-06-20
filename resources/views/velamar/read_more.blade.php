@extends('layouts.master')

@section('content')
<br><br>
    <div id="js" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $article->title }}</div>

                    <div class="card-body">
                        <p>{{ $article->long_description }}</p>
                        <img src="{{ asset($article->picture2) }}" class="card-img-top" alt="..." height="350px">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
