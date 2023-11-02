var radios = document.getElementsByTagName('input');
var value = [];
for (var i = 4; i < radios.length; i++) {
    if (radios[i].type === 'radio' && radios[i].checked) {
        // get value, set checked flag or do whatever you need to
        value.push( radios[i].value);   
            
    }
}

function prints(){
    console.log(value);
}

