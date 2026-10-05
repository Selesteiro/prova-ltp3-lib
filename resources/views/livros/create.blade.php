@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">Cadastrar Livro</h1>

<form method="POST" action="{{ route('livros.store') }}">
    @csrf

    <div class="mb-4">
        <label>Título</label>

        <input
            type="text"
            name="titulo"
            value="{{ old('titulo') }}"
            class="w-full rounded border px-3 py-2"
        >

        @error('titulo')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <label>Ano de publicação</label>

        <input
            type="number"
            name="ano_publicacao"
            value="{{ old('ano_publicacao') }}"
            class="w-full rounded border px-3 py-2"
        >

        @error('ano_publicacao')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <label>ISBN</label>

        <input
            type="text"
            name="isbn"
            value="{{ old('isbn') }}"
            class="w-full rounded border px-3 py-2"
        >

        @error('isbn')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <label>Autor</label>

        <select
            name="autor_id"
            class="w-full rounded border px-3 py-2"
        >
            <option value="">Selecione um autor</option>

            @foreach($autores as $autor)
                <option
                    value="{{ $autor->id }}"
                    {{ old('autor_id') == $autor->id ? 'selected' : '' }}
                >
                    {{ $autor->nome }}
                </option>
            @endforeach
        </select>

        @error('autor_id')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button
        type="submit"
        class="bg-blue-600 text-white px-4 py-2 rounded"
    >
        Salvar
    </button>

    <a href="{{ route('livros.index') }}">
        Voltar
    </a>
</form>

@endsection