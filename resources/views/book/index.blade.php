@extends('layout.main')

@section('title', 'Books')

@section('css')
    <link rel="stylesheet" href="/css/bookIndex.css">
@endsection


@section('contents')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <h1 class="title">Book's</h1>
            </div>
        </div>
        <div class="col-md-2 offset-md-1">
            <div class="row">
                <button type="button" class="btn btn-success">Cadastrar um Livro</button>
            </div>
        </div>
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <!-- <h3>{{ $books->id }}</h3> -->
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Data de Publicação</th>
                            <th>Editora</th>
                            <th>N° Páginas</th>
                            <th>Idioma</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>Teste1 </td>
                                <td>Teste1 </td>
                                <td>Teste1 </td>
                                <td>Teste1 </td>
                                <td>Teste1 </td>
                                <td>Teste1 </td>
                                <td>Teste1 </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


