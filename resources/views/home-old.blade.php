@extends('layouts.admin')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">{{ __('لوحة التحكم') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('مرحبا بك في الموقع: ') }}
                    {{ Auth::user()->name }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
