var element = document.getElementById('submit')
var a = true;
var b = true;
var c = true;
var d = true;

function nameCheck(){
var name = document.getElementById('name');
var nameCheck = document.getElementById('name-check');

   if(name.value.length > 25){
    name.classList.remove('is-valid');  
    name.classList.add('is-invalid');  
    nameCheck.innerHTML = 'يجب  ألا يزيد الإسم عن 25 حرف ' 
    element.disabled = true;
   

    return 0; 
   }else if(name.value.length < 2){
    name.classList.remove('is-valid');  
    name.classList.add('is-invalid');  
    nameCheck.innerHTML = "الاسم غير مقبول"; 
    element.disabled = true;
    a = false;
    return 0; 
   }

   name.classList.remove('is-invalid');
   name.classList.add('is-valid');
   nameCheck.innerHTML = '' 
   a = true
   if(a && b && c && d  ){
    element.disabled = false;
   }
   return true ;
}

function phoneCheck(){
    var regExp = /^[0-9]+$/;
    var phone = document.getElementById('phone');
    var phoneCheck = document.getElementById('phone-check');
    if(!regExp.test(phone.value)){
        phone.classList.remove('is-valid');  
        phone.classList.add('is-invalid');  
        phoneCheck.innerHTML = 'رقم الجوال يجب ألا  يحتوي على أي حروف'
        element.disabled = true;
        b = false;
        return 0; 
       }else if(phone.value.length < 9){
        phone.classList.remove('is-valid');  
        phone.classList.add('is-invalid');  
        phoneCheck.innerHTML = 'رقم الجوال يجب ألا  يقل عن 9 أرقام '
        element.disabled = true;
        b = false;
        return 0; 
       }else if(phone.value.length > 13){
        phone.classList.remove('is-valid');  
        phone.classList.add('is-invalid');  
        phoneCheck.innerHTML = 'يجب ألا يزيد رقم الجوال عن 13 رقم'
        element.disabled = true;
        b = false;
        return 0; 
       }else 
    
       phone.classList.remove('is-invalid');
       phone.classList.add('is-valid');
       phoneCheck.innerHTML = '' 
       b = true
       if(a && b && c && d  ){
        element.disabled = false;
       }
       return true ;
    }


    function emailCheck(){
        var regExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var email = document.getElementById('email');
        var emailCheck = document.getElementById('email-check');
        if(!regExp.test(email.value)){
            email.classList.remove('is-valid');  
            email.classList.add('is-invalid');  
            emailCheck.innerHTML = 'البريد الإلكتروني غير صحيح'
            element.disabled = true;
            c = false;
            return 0; 
        }
        
           email.classList.remove('is-invalid');
           email.classList.add('is-valid');
           emailCheck.innerHTML = '' 
           c = true
           if(a && b && c && d  ){
            element.disabled = false;
           }
           return true ;
        }

        function dateCheck(){
            var regExp = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
            var date = document.getElementById('datepicker');
            var dateCheck = document.getElementById('date-check');
            if(!regExp.test(date.value)){
                date.classList.remove('is-valid');  
                date.classList.add('is-invalid');  
                dateCheck.innerHTML = 'التاريخ غير صحيح'
                element.disabled = true;
                d = false;
                return 0; 
            }
            
               date.classList.remove('is-invalid');
               date.classList.add('is-valid');
               dateCheck.innerHTML = '' 
               d = true
               if(a && b && c && d  ){
                element.disabled = false;
               }
               return true ;
            }

    
          