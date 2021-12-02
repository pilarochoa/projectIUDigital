@extends('dashboard.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @include('dashboard.partials.validation-errors')
                <h2 class="mb-5">Lista de categorias</h2>
                <a href="{{ url('dashboard/category/create') }}" class="btn btn-success mb-2">Agregar categoria</a>
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td style="width: 30%">{{ $category->category }}</td>
                                <td style="width: 40%">{{ $category->description_category }}</td>
                                <td style="width: 30%">
                                    <div class="row justify-content-center">
                                        <a href="/dashboard/category/{{ $category->id }}/edit"
                                           class="btn btn-primary mr-3">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('category.destroy', $category) }}" method="category">
                                            @csrf @method('delete')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar esta categoria?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>                                    
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories -> links() }}
            </div>
        </div>
    </div>
@endsection
