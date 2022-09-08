let keys = ["recipient", "subject","message"];
let btn = document.getElementById("sendBtn");
let form = document.forms["formMail"];

function validateEmail(mail){
    let valid = /\S+@\S+\.\S+/;
    return valid.test(mail);
}

btn.onclick = function(e){
    keys.forEach(function(key){
        if(form[key].value.length === 0){
            e.preventDefault();
            form[key].classList.add('error');
        }else{
            let response = validateEmail(form["recipient"]);
            if(response){
                console.log("cheguei aqui");
                document.getElementById("myForm").submit();
            }else{
                form["recipient"].classList.add('error');
                return false;
            }
        }
    });
}

    


