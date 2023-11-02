@extends('layout.index')
@section('title')
    نموذج طلب
@endsection
@section('page')
    تسجيل الطلب
@endsection
@section('body')
    <div class="text-center  m-auto w-50 list-unstyled mt-5">
        <div class="mt-2 alert alert-success w-100 text-center">{{ $msg }}</div>
        <div class="mt-2 w-100 text-center"><a href="/form" class="btn btn-primary w-50">عودة</a></div>
    </div>
@endsection
