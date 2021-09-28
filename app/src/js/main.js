const passField = document.querySelector('input[name="password"]');
const toggleBtn = document.querySelector('.form .field i');

if(passField&&toggleBtn){
    toggleBtn.addEventListener('click',()=>{
        if(passField.type=="password"){
            passField.type="text";
            toggleBtn.classList.toggle('fa-eye-slash',true);
            toggleBtn.classList.toggle('fa-eye',false);
        }else{
            passField.type="password";
            toggleBtn.classList.toggle('fa-eye',true);
            toggleBtn.classList.toggle('fa-eye-slash',false);
        }
    })
}
