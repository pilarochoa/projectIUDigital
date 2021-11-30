@extends('dashboard.master')

@section('content')
<div class="mt-5">
    <h3 class="mb-3">Editar publicación</h3>

    <form action="{{ route('post.update', $post->id) }}" method="post">
        @method('PUT')
        @include('dashboard.post.form')
        
    </form>
</div>
    
@endsection