<!-- Brigade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brigade', __('voiture.brigade')) !!}
    <p>{{ $voiture->brigade }}</p>
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', __('voiture.zone')) !!}
    <p>{{ $voiture->zone }}</p>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('voiture.type')) !!}
    <p>{{ $voiture->type }}</p>
</div>

<!-- Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste', __('voiture.poste'))!!}
    <p>{{ $voiture->poste }}</p>
</div>

<!-- Date-D-Affectation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date-d-affectation', __('voiture.date-d-affectation')) !!}
    <p>{{ $voiture['date-d-affectation'] }}</p>
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('voiture.numero')) !!}
    <p>{{ $voiture->numero }}</p>
</div>

<!-- Date-De-Panne Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date-de-panne', __('voiture.date-de-panne')) !!}
    <p>{{ $voiture['date-de-panne'] }}</p>
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', __('voiture.etat')) !!}
    <p>{{ $voiture->etat }}</p>
</div>

<!-- Place-De-Reparation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('place-de-reparation', __('voiture.place-de-reparation')) !!}
    <p>{{ $voiture['place-de-reparation'] }}</p>
</div>

<!-- Remarque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarque', __('voiture.remarque')) !!}
    <p>{{ $voiture->remarque }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', __('common.created_at')) !!}
    <p>{{ $voiture->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', __('common.updated_at')) !!}
    <p>{{ $voiture->updated_at }}</p>
</div>

