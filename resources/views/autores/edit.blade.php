@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">Editar Autor</h1>

<form method="POST" action="{{ route('autores.update', $autor) }}">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label>Nome</label>

        <input
            type="text"
            name="nome"
            value="{{ old('nome', $autor->nome) }}"
            class="w-full rounded border px-3 py-2"
        >

        @error('nome')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <label>Nacionalidade</label>

        <input
            type="text"
            name="nacionalidade"
            value="{{ old('nacionalidade', $autor->nacionalidade) }}"
            class="w-full rounded border px-3 py-2"
        >

        @error('nacionalidade')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button
        type="submit"
        class="bg-blue-600 text-white px-4 py-2 rounded"
    >
        Atualizar
    </button>

    <a href="{{ route('autores.index') }}">
        Voltar
    </a>
</form>

@endsection