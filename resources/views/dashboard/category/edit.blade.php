@extends('dashboard.master')

@section('content')
<div class="mt-5">
    <h3 class="mb-3">Editar categoria</h3>

    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('PUT')
        @include('dashboard.category.form')
        
    </form>
</div>
    
@endsection