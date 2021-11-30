@extends('dashboard.master')
@section('content')
<form action="{{ route('category.store') }}" method="post">
    @include('dashboard.category.form')
</form>
    
@endsection