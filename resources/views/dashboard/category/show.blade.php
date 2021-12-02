@extends('dashboard.master')

@section('content')
<div class="form-group">
    <input readonly class="form-control" type="text" name="category" id="category"
    placeholder="Publicación" value="{{$category->category}}">
</div>

<div class="form-group">
    <textarea readonly class="form-control" name="description_category" id="description_category" 
    cols="30" rows="10">
    {{$category->description_category}}
</textarea>
</div>

<div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="" class="btn btn-danger">Cancelar</a>
</div>
    
@endsection