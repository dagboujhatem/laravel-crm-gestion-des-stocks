<!-- Brigade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brigade', __('voiture.brigade')) !!}
    {!! Form::text('brigade', null, ['class' => 'form-control']) !!}
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', __('voiture.zone')) !!}
    {!! Form::text('zone', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('voiture.type')) !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste', __('voiture.poste')) !!}
    {!! Form::text('poste', null, ['class' => 'form-control']) !!}
</div>


<!-- Date-D-Affectation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date-d-affectation', __('voiture.date-d-affectation')) !!}
    {!! Form::date('date-d-affectation', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('voiture.numero')) !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Date-De-Panne Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date-de-panne', __('voiture.date-de-panne')) !!}
    {!! Form::date('date-de-panne', null, ['class' => 'form-control']) !!}
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', __('voiture.etat')) !!}
    {!! Form::text('etat', null, ['class' => 'form-control']) !!}
</div>

<!-- Place-De-Reparation Field -->
<div class="form-group col-sm-12">
    {!! Form::label('place-de-reparation', __('voiture.place-de-reparation')) !!}
    {!! Form::text('place-de-reparation', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarque Field -->
<div class="form-group col-sm-12">
    {!! Form::label('remarque', __('voiture.remarque')) !!}
    {!! Form::textarea('remarque', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('common.save'), ['class' => 'btn btn-success']) !!}
    <a href="{{ route('voitures.index') }}" class="btn btn-default">
    {{  __('common.cancel') }}
    </a>
</div>
