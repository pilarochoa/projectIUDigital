@csrf
@include('dashboard.partials.validation-errors')
<div class="form-group mb:3">
    <input class="form-control" type='text' name="category" id="category"
    placeholder="Nombre Categoría" value="{{old("category", $category->category)}}">

</div>

<div class="form-group mb:3">
<textarea class="form-control" name="description_category" 
id="description_category" cols="30" rows="10">
{{old("publication_content", $category->description_category)}}
</textarea>
</div>

<div class="mb:3">
    <a href= "{{ url('/dashboard/category') }}" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>