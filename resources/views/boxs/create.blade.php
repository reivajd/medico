@extends('layouts.app')
<br><br>
@section('content') 
    <br><br><br><br>
    <div class="container mt-5">
        <div class="row">
            <div class=col-lg-8>
                <h2>
                    Nueva caja
                        <a href="{{ route('boxs.index') }}" class="btn btn-primary float-right">Listado</a>
                </h2>
                <br>
                
                @include('boxs.fragment.error')
                
                {!! Form::open(['route' => 'boxs.store', 'files' => true]) !!}
                        @include('boxs.fragment.form')
                {!! Form::close() !!}         
            </div>

            <div class="col-sm-4">
                @include('boxs.fragment.aside')
            </div>
        </div>
    </div>     
@endsection