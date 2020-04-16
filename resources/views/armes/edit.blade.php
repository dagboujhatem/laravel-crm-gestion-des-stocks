@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1></h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($arme, ['route' => ['armes.update', $arme->id], 'method' => 'patch']) !!}

                        @include('armes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection