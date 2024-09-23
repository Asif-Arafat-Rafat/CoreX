const profileform= document.querySelector('.profileicon');

profileform.addEventListener('click',()=>{
    const loginform=document.querySelector('.form');
    loginform.style.top = '50%';
    loginform.style.transform = 'translate(-50%,-50%)';
    document.querySelector('.formbg').style.display='inline';
    document.querySelector('body').style.overflow='hidden';
})
document.querySelector('.formbg').addEventListener('click',()=>{
    const loginform=document.querySelector('.form');
    loginform.style.top = '-600px';
    document.querySelector('.formbg').style.display='none';
    document.querySelector('body').style.overflow='scroll';

})
document.querySelector('.loginOption').addEventListener('click',()=>{
    document.querySelector('.login').style.display='inline';
    document.querySelector('.loginOption').style.borderBottom="4px solid yellow";
    document.querySelector('.registerOption').style.borderBottom="0px solid yellow";
    document.querySelector('.register').style.display='none';

})
document.querySelector('.registerOption').addEventListener('click',()=>{
    document.querySelector('.login').style.display='none';
    document.querySelector('.loginOption').style.borderBottom="0px solid yellow";
    document.querySelector('.registerOption').style.borderBottom="4px solid yellow";
    document.querySelector('.register').style.display='inline';
})