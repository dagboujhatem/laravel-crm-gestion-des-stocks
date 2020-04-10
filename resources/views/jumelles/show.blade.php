@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1></h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('jumelles.show_fields')
                    <a href="{{ route('jumelles.index') }}" class="btn btn-primary"> 
                        <i class="fa fa-chevron-right"></i> {{  __('common.back') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
