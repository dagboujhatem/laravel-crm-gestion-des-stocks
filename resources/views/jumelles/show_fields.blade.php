<!-- Brigade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brigade', __('jumelle.brigade')) !!}
    <p>{{ $jumelle->brigade }}</p>
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', __('jumelle.zone')) !!}
    <p>{{ $jumelle->zone }}</p>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('jumelle.type')) !!}
    <p>{{ $jumelle->type }}</p>
</div>

<!-- Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste', __('jumelle.poste'))!!}
    <p>{{ $jumelle->poste }}</p>
</div>

<!-- Date-D-Affectation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date-d-affectation', __('jumelle.date-d-affectation')) !!}
    <p>{{ $jumelle['date-d-affectation'] }}</p>
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('jumelle.numero')) !!}
    <p>{{ $jumelle->numero }}</p>
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', __('jumelle.etat')) !!}
    <p>{{ $jumelle->etat }}</p>
</div>

<!-- Remarque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarque', __('jumelle.remarque')) !!}
    <p>{{ $jumelle->remarque }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', __('common.created_at')) !!}
    <p>{{ $jumelle->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', __('common.updated_at')) !!}
    <p>{{ $jumelle->updated_at }}</p>
</div>

