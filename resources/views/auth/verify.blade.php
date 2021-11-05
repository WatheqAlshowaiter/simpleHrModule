@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-right">{{ __('تأكد من بريدك الإلكتروني') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('لقد أرسل للتو رابط تحقق جديد إلى بريدك الإلكتروني') }}
                            </div>
                        @endif
                        {{ __('قبل المواصلة، من فضلك تحقق من رابط التحقق في بريدك الإلكتروني ') }}
                        {{ __('لو لم تستقبل البريد الإلكتروني') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('انقر هنا لطلب رابط تحقق آخر') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
