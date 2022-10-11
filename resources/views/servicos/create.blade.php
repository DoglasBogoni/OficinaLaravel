@extends('adminlte::page')

@section('content')
    <h3> Novo Serviço</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['url'=>'servicos/store']) !!}
        <div class="form-group">
            {!! Form::label('valor_servico', 'Valor do Serviço:')!!}
            {!! Form::text('valor_servico', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('nome_cliente', 'Nome do Cliente:')!!}
            {!! Form::text('nome_cliente', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('descricao_servico', 'Descrição:')!!}
            {!! Form::text('descricao_servico', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('observação_servico', 'Observação:')!!}
            {!! Form::text('observação_servico', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::label('dt_servico', 'Data do Serviço:')!!}
            {!! Form::date('dt_servico', null, ['class'=>'form-control', 'required']) !!}

            {!! Form::submit('Criar Servico',['class'=>'btn btn-primary'])!!}
            {!! Form::reset('Limpar',['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop





