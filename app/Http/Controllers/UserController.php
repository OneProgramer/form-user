<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use TimeHunter\LaravelGoogleReCaptchaV2\Validations\GoogleReCaptchaV2ValidationRule;

class UserController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('user.index');
    }

    public function back()
    {
        return view('user.index');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:25|string',
            'phone'=>'required|max:12|min:9|string|regex:/[0-9]/',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i|string',
            'gender'=>'required|max:5|string', 
            'date'=>'required|max:10|min:10|string',
            'color'=>'required|max:10|string',
            'img'=>'required|max:10|string',
            'g-recaptcha-response' => ['required',function(string $attribute,mixed $value,Closure $fail){
                $g_response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[
                    'secret'=>config('services.recaptcha.secret_key'),
                    'response'=>$value
                ]);
                if(!$g_response->json('success')){
                   return $fail('');   
                }
            }]
        ],[
            'name'=>'يحب ألا يزيد الاسم عن 25 حرف',
            'phone'=>'رقم الجوال غير صحيح',
            'email'=>'البريد الإلكتروني غير صحيح',
            'gender'=>'الجنس مطلوب',
            'date'=>' التاريخ غير صحيح',
            'color'=>'اللون غير صحيح',
            'img'=>'الشكل مطلوب',
            'g-recaptcha-response'=>' فشل التحقق'
        ]);

        if($validator->fails()){
            return view('user.index',['errors'=>$validator->messages()]);
        }
        try{
            $phone = strlen($request->phone) <= 10 ? "966" . $request->phone:$request->phone;
            $user = User::create([
                'name'=> $request->name,
                'phone'=> $phone,
                'email'=> $request->email,
                'gender'=> $request->gender,
                'date'=> $request->date,
                'color'=> $request->color,
                'img'=> $request->img
            ]);

            $msg =  "تم ارسال الطلب وجاري مراجعته وسوف تصلك رسالة بذلك ";
            return view('user.submit',compact('msg'));
        }catch(\Exception $e){
            return view('user.index',compact($e->getMessage()));
    }
}


}
