<!-- Brigade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brigade', __('camera.brigade')) !!}
    {!! Form::text('brigade', null, ['class' => 'form-control']) !!}
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', __('camera.zone')) !!}
    {!! Form::text('zone', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('camera.type')) !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste', __('camera.poste')) !!}
    {!! Form::text('poste', null, ['class' => 'form-control']) !!}
</div>


<!-- Date-D-Affectation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date-d-affectation', __('camera.date-d-affectation')) !!}
    {!! Form::date('date-d-affectation', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('camera.numero')) !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', __('camera.etat')) !!}
    {!! Form::text('etat', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarque', __('camera.remarque')) !!}
    {!! Form::textarea('remarque', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i> {{  __('common.save') }}
    </button>
    <a href="{{ route('cameras.index') }}" class="btn btn-primary">
        <i class="fa fa-chevron-right"></i> {{  __('common.cancel') }}
    </a>
</div>
