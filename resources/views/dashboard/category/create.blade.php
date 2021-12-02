@extends('dashboard.master')
@section('content')

<div class="mt-4">
    <h3 class="mb-3">Crear categoria</h3>

<form action="{{ route('category.store') }}" method="post">
    @include('dashboard.category.form')
</form>
</div>
    
@endsection