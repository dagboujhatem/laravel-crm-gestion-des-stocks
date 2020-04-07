@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Voiture
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($voiture, ['route' => ['voitures.update', $voiture->id], 'method' => 'patch']) !!}

                        @include('voitures.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection