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
                   {!! Form::model($camera, ['route' => ['cameras.update', $camera->id], 'method' => 'patch']) !!}

                        @include('cameras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection