@extends('layouts.admin')

@section('content')

    <div class="col s12">
        <header class="row">
            <div class="col s12">
                <h1>Kalendarz: kategorie</h1>
            </div>
        </header>

        {!! Form::model($calendareventcategory, ['method' => 'PATCH', 'url' => ['/admin/calendar-event-category', $calendareventcategory->id], 'class' => 'col s12', 'files' => true]) !!}
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#contentTab">Treść</a></li>
                </ul>
            </div>
            <div id="contentTab" class="col s12">
                <div class="card">
                    <div class="card__header">
                        <span>Treść</span>
                    </div>
                    <div class="card-content">
                        <div class="row">

                            <div class="input-field col s12 m6 {{ $errors->has('title') ? 'has-error' : ''}}">
                                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                                {!! Form::label('title', 'Tytuł', ['class' => 'col-sm-3 control-label']) !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="input-field col s12 m6 {{ $errors->has('color') ? 'has-error' : ''}}">
                                {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
                                {!! Form::label('color', 'Kolor', ['class' => 'col-sm-3 control-label']) !!}
                                {!! Form::text('color', null, ['class' => 'form-control']) !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m12">
            <div class="pt20">
                {!! Form::submit('Edytuj', ['class' => 'waves-effect waves-light btn']) !!}
            </div>
        </div>
        @if ($errors->any())
            <ul class="col s12 alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::close() !!}
    </div>
@endsection