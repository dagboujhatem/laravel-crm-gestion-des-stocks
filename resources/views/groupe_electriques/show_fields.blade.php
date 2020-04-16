<!-- Brigade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brigade', __('groupeElectrique.brigade')) !!}
    <p>{{ $groupeElectrique->brigade }}</p>
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', __('groupeElectrique.zone')) !!}
    <p>{{ $groupeElectrique->zone }}</p>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('groupeElectrique.type')) !!}
    <p>{{ $groupeElectrique->type }}</p>
</div>

<!-- Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste', __('groupeElectrique.poste'))!!}
    <p>{{ $groupeElectrique->poste }}</p>
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('groupeElectrique.numero')) !!}
    <p>{{ $groupeElectrique->numero }}</p>
</div>

<!-- Remarque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarque', __('groupeElectrique.remarque')) !!}
    <p>{{ $groupeElectrique->remarque }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', __('common.created_at')) !!}
    <p>{{ $groupeElectrique->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', __('common.updated_at')) !!}
    <p>{{ $groupeElectrique->updated_at }}</p>
</div>

