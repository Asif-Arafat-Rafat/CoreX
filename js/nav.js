const profileform= document.querySelector('.profileicon');

profileform.addEventListener('click',()=>{
    const loginform=document.querySelector('.form');
    loginform.style.top = '100px';
    document.querySelector('.formbg').style.display='inline';
})
document.querySelector('.formbg').addEventListener('click',()=>{
    const loginform=document.querySelector('.form');
    loginform.style.top = '-600px';
    document.querySelector('.formbg').style.display='none';
})
document.querySelector('.loginOption').addEventListener('click',()=>{
    document.querySelector('.login').style.display='inline';
    document.querySelector('.loginOption').style.borderBottom="4px solid yellow";
    document.querySelector('.registerOption').style.borderBottom="0px solid yellow";
})
document.querySelector('.registerOption').addEventListener('click',()=>{
    document.querySelector('.login').style.display='none';
    document.querySelector('.loginOption').style.borderBottom="0px solid yellow";
    document.querySelector('.registerOption').style.borderBottom="4px solid yellow";
})