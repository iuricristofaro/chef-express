 <!-- Form Input -->

    <div class="form-group">
        {!! Form::label('titulo', 'Titulo:') !!}
        {!! Form::text('titulo', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('data', 'Data:') !!}
        {!! Form::text('data', null, ['class'=>'form-control']) !!}
    </div>

    <!-- Content Form Input -->

    <div class="form-group">
        {!! Form::label('conteudo', 'Conteudo:') !!}
        {!! Form::textarea('conteudo', null, ['class'=>'form-control']) !!}
    </div>