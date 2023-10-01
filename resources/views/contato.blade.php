@extends('layout')

@section('conteudo')
    <h1> Fale conosco </h1>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $erro)
                <p>{{ $erro }}</p>
            @endforeach
        </div>
    @endif

    @if (Session('sucesso'))
        {{ Session('sucesso') }}
    @endif



    <form method="post" action="{{ url('contato') }}">

        @csrf

        <label for="id_email">E-mail</label>
        <input type="text" name="email" id="id_email" />

        <label for="id_assunto">Assunto</label>
        <input type="text" name="assunto" id="id_assunto" />

        <label for="id_mensagem">Mensagem</label>
        <input type="text" name="mensagem" id="id_mensagem" />

        <button type="submit"> Enviar </button>
    </form>
@endsection
