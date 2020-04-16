<!-- Brigade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brigade', __('camera.brigade')) !!}
    <p>{{ $camera->brigade }}</p>
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', __('camera.zone')) !!}
    <p>{{ $camera->zone }}</p>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('camera.type')) !!}
    <p>{{ $camera->type }}</p>
</div>

<!-- Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste', __('camera.poste'))!!}
    <p>{{ $camera->poste }}</p>
</div>

<!-- Date-D-Affectation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date-d-affectation', __('camera.date-d-affectation')) !!}
    <p>{{ $camera['date-d-affectation'] }}</p>
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('camera.numero')) !!}
    <p>{{ $camera->numero }}</p>
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', __('camera.etat')) !!}
    <p>{{ $camera->etat }}</p>
</div>

<!-- Remarque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarque', __('camera.remarque')) !!}
    <p>{{ $camera->remarque }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', __('common.created_at')) !!}
    <p>{{ $camera->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', __('common.updated_at')) !!}
    <p>{{ $camera->updated_at }}</p>
</div>

