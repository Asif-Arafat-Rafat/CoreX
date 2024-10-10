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
function toggleOtherInput(select) {
    const otherInput = document.getElementById('otherPart');
    if (select.value === 'Others') {
        otherInput.classList.remove('hidden');
    } else {
        otherInput.classList.add('hidden');
    }
}
function toggleOtherInput(select) {
    const selectRow = document.getElementById('select-row');
    const otherDiv = document.getElementById('otherDiv');
    if (select.value === 'Others') {
        otherDiv.classList.add('show-other');
    } else {
        otherDiv.classList.remove('show-other');
    }
}

function updateCost(select) {
    const costDisplay = document.getElementById('costDisplay');
    switch (select.value) {
        case '48':
            costDisplay.textContent = 'The time starts when we receive your product. It may take less time than the selected option, and urgency affects only repair priority, not delivery time.';
            break;
        case '24':
            costDisplay.textContent = 'Additional cost: 200 Taka for 24-hour repair. Time starts when we receive your product. It may take less time, and urgency affects priority only.';
            break;
        case '12':
            costDisplay.textContent = 'Additional cost: 500 Taka for 12-hour repair. Time starts when we receive your product. It may take less time, and urgency affects priority only.';
            break;
        case '6':
            costDisplay.textContent = 'Additional cost: 1000 Taka for 6-hour repair. Time starts when we receive your product. It may take less time, and urgency affects priority only.';
            break;
        default:
            costDisplay.textContent = '';
    }
}
