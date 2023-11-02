@extends('layout.index')
@section('title')
    نموذج طلب
@endsection
@section('page')
    تسجيل الطلب
@endsection
@section('body')
    @if ($errors->any())
        <div class=" text-center m-auto w-50 list-inline mt-3">
            @foreach ($errors->all() as $error)
                <div class="mt-2  alert alert-danger w-100 ">{{ $error }}</div>
            @break
        @endforeach
    </div>
@endif


<form action="/" method="POST">
    @csrf

    <div class=" w-75 m-auto d-flex justify-content-center border border-1 mt-5 row row-cols-auto  row-cols-lg-2">

        <div class="d-grid mt-2 form-check">
            <label scope="row" for="name" class="m-1  d-flex"> الاسم<span class="text-danger">*</span> </label>
            <input class="form-control m-1 " type="text" onchange="nameCheck()" name="name" id="name"
                required data-toggle="tooltip" title="Please Enter Valid Name Here" placeholder="الاسم"
                value="{{ old('name', request()->input('name')) }}">
            <div id="name-check" class="text-danger fs-6"></div>
        </div>


        <div class="d-grid mt-2">
            <label scope="row" for="name" class="m-1  d-flex"> رقم الجوال<span class="text-danger">*</span>
            </label>
            <input class="form-control m-1 " type="text" name="phone" onchange="phoneCheck()" required
                data-toggle="tooltip" title="Please Enter valid Phone"
                value="{{ old('phone', request()->input('phone')) }}" id="phone" placeholder="رقم الجوال">
            <div id="phone-check" class="text-danger fs-6"></div>
        </div>

        <div class="d-grid col mt-2">
            <label scope="row" for="name" class="m-1  d-flex"> البريد الإلكتروني<span class="text-danger">
                    *</span>
            </label>
            <input value="{{ old('email', request()->input('email')) }}" onchange="emailCheck()" required
                data-toggle="tooltip" title="Please Enter valid Email" class="form-control m-1 " type="text"
                name="email" id="email" placeholder="البريد الإلكتروني">
            <div id="email-check" class="text-danger fs-6"></div>
        </div>


        <div class="d-grid mt-2">
            <label scope="row" for="name" class="m-1  d-flex">تاريخ اليوم<span class="text-danger">
                    *</span>
            </label>
            <input value="{{ old('date', request()->input('date')) }}" onchange="dateCheck()" class="form-control m-1 "
                data-toggle="tooltip" title="Please Enter valid Date" type="text" required id="datepicker"
                name="date">
            <div id="date-check" class="text-danger fs-6"></div>
        </div>



        <div class="d-grid  mt-2">
            <label scope="row" for="name" class="m-1  d-flex"> الجنس<span class="text-danger">*</span>
            </label>
            <div class="d-flex ">
                <div class="form-check">
                    <input class="form-check-input m-1" type="radio" name="gender" id="flexRadioDefault1"
                        {{ old('gender', request()->input('gender')) == 'ذكر' ? 'checked' : '' }} checked required
                        value="ذكر">
                    <label class="form-check-label" for="flexRadioDefault1">
                        ذكر
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="أنثى" name="gender" id="flexRadioDefault2"
                        {{ old('gender', request()->input('gender')) == 'أنثى' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="flexRadioDefault2">
                        أنثى
                    </label>
                </div>
            </div>
        </div>

        <div class="d-grid mt-2 col-sm-6">
            <label scope="row" for="name" class="m-1  d-flex"> اللون المفضل<span class="text-danger">*</span>
            </label>
            <select name="color" class="form-select ">
                <option {{ old('color', request()->input('color')) == 'الأحمر' ? 'selected' : '' }} value="الأحمر">
                    الأحمر
                </option>
                <option {{ old('color', request()->input('color')) == 'الأزرق' ? 'selected' : '' }} value="الأزرق">
                    الأزرق
                </option>
                <option {{ old('color', request()->input('color')) == 'الأخضر' ? 'selected' : '' }} value="الأخضر">
                    الأخضر
                </option>
                <option {{ old('color', request()->input('color')) == 'الأصفر' ? 'selected' : '' }} value="الأصفر">
                    الأصفر
                </option>
                <option {{ old('color', request()->input('color')) == 'الأسود' ? 'selected' : '' }} value="الأسود">
                    الأسود
                </option>
                <option {{ old('color', request()->input('color')) == 'البنفسجي' ? 'selected' : '' }}
                    value="البنفسجي">
                    البنفسجي
                </option>
            </select>
        </div>


        <div class="d-grid mt-2 w-100 mt-2">
            <label scope="row" for="name" class="m-1  d-flex"> الشكل المفضل<span class="text-danger">*</span>
            </label>

            <div class="w-100 d-flex mt-4 flex-wrap">
                <div class="form-check">
                    <input class="form-check-input m-1" type="radio" value="img1" name="img" checked
                        id="flexRadioDefault7" {{ old('img', request()->input('img')) == 'img1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault7" style="height: 90px">
                        <img src={{ asset('img1.jpg') }} width='70' height='70' alt=""
                            class="rounded-5">
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input m-1" type ="radio" value="img2" name="img"
                        id="flexRadioDefault8" {{ old('img', request()->input('img')) == 'img2' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault8" style="height: 90px">
                        <img src={{ asset('img2.jpg') }} width='70' height='70' alt=""
                            class="rounded-5">
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input m-1" type ="radio" value="img3" name="img"
                        id="flexRadioDefault9" {{ old('img', request()->input('img')) == 'img3' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault9" style="height: 90px">
                        <img src={{ asset('img3.jpg') }} width='70' height='70' alt=""
                            class="rounded-5">
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input m-1" type ="radio" value="img4" name="img"
                        id="flexRadioDefault10" {{ old('img', request()->input('img')) == 'img4' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault10" style="height: 90px">
                        <img src={{ asset('img4.jpg') }} width='70' height='70' alt=""
                            class="rounded-5">
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input m-1" type ="radio" value="img5" name="img"
                        id="flexRadioDefault10" {{ old('img', request()->input('img')) == 'img5' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault11" style="height: 90px">
                        <img src={{ asset('img5.jpg') }} width='70' height='70' alt=""
                            class="rounded-5">
                    </label>
                </div>

            </div>


        </div>
    </div>



    <div class="text-center mt-3 mb-3">
        <input type="hidden" name="g-recaptcha-response" id="token">
        <input type="submit" id="submit" class="btn btn-primary w-75 " value="إرسال الطلب">
    </div>
</form>
<script>
    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
    });
</script>
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute("{{ config('services.recaptcha.site_key') }}", {
            action: 'submit'
        }).then(function(token) {
            document.getElementById('token').value = token;
        });
    });
</script>
@endsection
