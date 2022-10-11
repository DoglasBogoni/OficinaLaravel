@extends('adminlte::page')

@section('content')
    <h3> Novo Cliente</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['url'=>'clientes/store']) !!}
        <div class="form-group">
            {!! Form::label('nome_cliente', 'Nome:')!!}
            {!! Form::text('nome_cliente', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('email_cliente', 'Email:')!!}
            {!! Form::text('email_cliente', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('telefone_cliente', 'Telefone:')!!}
            {!! Form::text('telefone_cliente', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::submit('Criar Cliente',['class'=>'btn btn-primary'])!!}
            {!! Form::reset('Limpar',['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop




