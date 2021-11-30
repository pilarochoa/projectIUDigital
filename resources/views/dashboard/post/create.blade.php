@extends('dashboard.master')

@section('content')
<div class="mt-4">
    <h3 class="mb-3">Crear publicación</h3>

    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post.form')
        
    </form>
</div>
    
@endsection