@extends('adminlte::page')

@section('content')
    <h3> Nova Conta</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url'=>'contas/store']) !!}
        <div class="form-group">
            {!! Form::label('nome_cliente', 'Nome:')!!}
            {!! Form::text('nome_cliente', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('valor', 'Valor:')!!}
            {!! Form::text('valor', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('dt_cadastro', 'Data do Cadastro:')!!}
            {!! Form::date('dt_cadastro', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('dt_vencimento', 'Data do Vencimento:')!!}
            {!! Form::date('dt_vencimento', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::submit('Criar Conta',['class'=>'btn btn-primary'])!!}
            {!! Form::reset('Limpar',['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop




