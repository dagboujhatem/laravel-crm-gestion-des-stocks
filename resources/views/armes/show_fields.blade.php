<!-- Brigade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brigade', __('arme.brigade')) !!}
    <p>{{ $arme->brigade }}</p>
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', __('arme.zone')) !!}
    <p>{{ $arme->zone }}</p>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('arme.type')) !!}
    <p>{{ $arme->type }}</p>
</div>

<!-- Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste', __('arme.poste'))!!}
    <p>{{ $arme->poste }}</p>
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('arme.numero')) !!}
    <p>{{ $arme->numero }}</p>
</div>

<!-- Remarque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarque', __('arme.remarque')) !!}
    <p>{{ $arme->remarque }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', __('common.created_at')) !!}
    <p>{{ $arme->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', __('common.updated_at')) !!}
    <p>{{ $arme->updated_at }}</p>
</div>

