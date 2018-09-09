@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('이메일 주소 확인') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('새로운 확인 링크가 메일 주소로 전송되었습니다.') }}
                        </div>
                    @endif

                    {{ __('메일에서 확인 링크를 클릭하십시오.') }}
                    {{ __('메일을 받지 못했다면 다시 메일을 요청하십시오.') }}, <a href="{{ route('verification.resend') }}">{{ __('재발송') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
