<!-- Brigade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brigade', 'الفرقة') !!}
    {!! Form::text('brigade', null, ['class' => 'form-control']) !!}
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', 'المنطقة') !!}
    {!! Form::text('zone', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'النوع') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste', 'المركز') !!}
    {!! Form::text('poste', null, ['class' => 'form-control']) !!}
</div>


<!-- Date-D-Affectation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date-d-affectation', 'تاريخ التعيين') !!}
    {!! Form::date('date-d-affectation', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'الرقم') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Date-De-Panne Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date-de-panne', 'تاريخ العطب') !!}
    {!! Form::date('date-de-panne', null, ['class' => 'form-control']) !!}
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', 'الحالة') !!}
    {!! Form::text('etat', null, ['class' => 'form-control']) !!}
</div>

<!-- Place-De-Reparation Field -->
<div class="form-group col-sm-12">
    {!! Form::label('place-de-reparation', 'مكان الإصلاح') !!}
    {!! Form::text('place-de-reparation', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarque Field -->
<div class="form-group col-sm-12">
    {!! Form::label('remarque', 'الملاحظات') !!}
    {!! Form::textarea('remarque', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('حفظ', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('voitures.index') }}" class="btn btn-default">إلغاء</a>
</div>
