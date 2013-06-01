@extends('base.layout')

@section('content')

<div class="fixedWithPage">
    <h2>Contact</h2>

    <div class="alert alert-info">
        <i class="icon-info-sign"></i> Si vous cherchez de l'aide pour Laravel, nous vous invitons à consulter les forums. <strong>Aucune aide ne sera apportée par e-mail.</strong> Merci de votre compréhension
    </div>

    {{ Form::open(array('action' => 'Lvlfr\Website\Controller\ContactController@postIndex')) }}

        <div class="form-line">
            {{ Form::label('nom', 'Nom* :')}}
            <div class="form-item">
                {{ Form::text('nom', Input::old('nom')) }}
                @if ($errors->has('nom'))
                <span class="error">{{ $errors->first('nom') }}</span>
                @endif
            </div>
        </div>

        <div class="form-line">
            {{ Form::label('email', 'Email* :')}}
            <div class="form-item">
                {{ Form::text('email', Input::old('email')) }}
                @if ($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>

        <div class="form-line">
            {{ Form::label('sujet', 'Sujet :')}}
            <div class="form-item">
                {{ Form::text('sujet', Input::old('sujet')) }}
                @if ($errors->has('sujet'))
                <span class="error">{{ $errors->first('sujet') }}</span>
                @endif
            </div>
        </div>

        <div class="form-line">
            {{ Form::label('contenu', 'Message* :')}}
            <div class="form-item">
                {{ Form::textarea('contenu', Input::old('contenu')) }}
                @if ($errors->has('contenu'))
                <span class="error">{{ $errors->first('contenu') }}</span>
                @endif
            </div>
        </div>

        <div class="form-line">
            <div class="form-item">
                {{ Form::submit('Valider', array(
                    'class' => 'btn-orange'
                )) }}
            </div>
        </div>

    {{ Form::close() }}
</div>

@stop
