@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Posts</h3>
            @auth
            <div class="section-header-breadcrumb">
                <a href="{{ route('posts.create')}}" class="btn btn-primary form-btn">Post <i class="fas fa-plus"></i></a>
            </div>
            @endauth
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($posts as $post)
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <p class="card-text"><small class="text-muted">Publication date: {{ $post->publication_date }}</small></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

