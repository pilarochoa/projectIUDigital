@extends('dashboard.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @include('dashboard.partials.validation-errors')
                <h2 class="mb-5">Lista de publicaciones</h2>
                <a href="{{ url('dashboard/post/create') }}" class="btn btn-success mb-2">Agregar publicación</a>
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td style="width: 30%">{{ $post->publication }}</td>
                                <td style="width: 40%">{{ $post->publication_content }}</td>
                                <td style="width: 30%">
                                    <div class="row justify-content-center">
                                        <a href="/dashboard/post/{{ $post->id }}/edit"
                                           class="btn btn-primary mr-3">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('post.destroy', $post) }}" method="post">
                                            @csrf @method('delete')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar esta publicación?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>                                    
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts-> links() }}
            </div>
        </div>
    </div>
@endsection