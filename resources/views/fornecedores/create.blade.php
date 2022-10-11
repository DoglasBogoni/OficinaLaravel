@extends('adminlte::page')

@section('content')
    <h3> Novo Fornecedor</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url'=>'fornecedores/store']) !!}
        <div class="form-group">
            {!! Form::label('nome_fornecedor', 'Nome:')!!}
            {!! Form::text('nome_fornecedor', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('email_fornecedor', 'Email:')!!}
            {!! Form::text('email_fornecedor', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('telefone_fornecedor', 'Telefone:')!!}
            {!! Form::text('telefone_fornecedor', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::submit('Criar Fornecedor',['class'=>'btn btn-primary'])!!}
            {!! Form::reset('Limpar',['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop




