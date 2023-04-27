@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-5">
    <div class="col-lg-8">
        <h1 class="mb-5">{{ $post->title }}</h1>
    
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather=
        "arrow-left"></span>Back To All My Posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather= "edit"></span>Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
         @method('delete')
         @csrf
        <button class="btn btn-danger" onclick="return confirm('Yakin Di Hapus')">
            <span data-feather="x-circle"></span>Deleted</button>
         </form>
                       
    
            <img src="https://source.unsplash.com/random/500×500?{{ $post->category->name }}" 
            alt="{{ $post->category->name}}" class="img-fluid mt-3">
            
            <article class="my-3">
            {!! $post->body !!}
            </article>
            
        </div>
        </div>
    </div>


@endsection