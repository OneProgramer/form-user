@extends('layout.index')
@section('title')
    الرئيسية
@endsection
@section('page')
    الصفحة الرئيسية
@endsection
@section('body')
    <style>
        .top {
            background-image: url('47.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 600px;
        }
    </style>


    <div class="top">
    </div>
    <div class="text-center">
        <a href="/form" class="btn btn-primary w-75 text-decoration-none">الذهاب لإرسال الطلب</a>
    </div>
@endsection
