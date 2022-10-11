@extends('adminlte::page')

@section('content')
    <h3> Nova Peça</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url'=>'pecas/store']) !!}
        <div class="form-group">
            {!! Form::label('nome_peca', 'Nome:')!!}
            {!! Form::text('nome_peca', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('valor_peca', 'Valor:')!!}
            {!! Form::text('valor_peca', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('fabricante_peca', 'Fabricante:')!!}
            {!! Form::text('fabricante_peca', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('nome_fornecedor', 'Fornecedor:')!!}
            {!! Form::text('nome_fornecedor', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('nome_cliente', 'Cliente:')!!}
            {!! Form::text('nome_cliente', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::submit('Criar Peca',['class'=>'btn btn-primary'])!!}
            {!! Form::reset('Limpar',['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop




