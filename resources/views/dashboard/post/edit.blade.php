@extends('dashboard.master')

@section('content')
<h6>Editar publicaciones</h6>

<form action="{{ route('post.update', $post->id) }}" method="post">
    @method('PUT')
    @include('dashboard.post.form')
    
</form>


    
@endsection