@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"></h1>
        <h1 class="pull-left">
           <a class="btn btn-primary pull-lest" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('armes.create') }}">
           <i class="fa fa-plus"></i> {{  Lang::get('arme.addNew') }}
           </a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('armes.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

