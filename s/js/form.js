const pass= document.querySelector('#pass')
const con_pass= document.querySelector('#conpass')
const error_msg=document.querySelector('.loginerror')
function validate(){
    pass.classList.remove('error');
    con_pass.classList.remove('error');
    error_msg.style.display='none';
    error_msg.innerHTML="<p class='error-msg'>Passwords dont match</p>";
    console.log('rechecking');
    if(pass.value!=con_pass.value){
        pass.classList.add('error');
        con_pass.classList.add('error');
        error_msg.style.display='inline';

        console.log('issue');
    }
}
pass.addEventListener('input',validate)
con_pass.addEventListener('input',validate)