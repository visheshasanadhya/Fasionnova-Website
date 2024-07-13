let cross=document.querySelector(".cross")
let wrapper=document.querySelector(".wrapper");
let log_btn=document.querySelector(".log_btn");
let flag=0;
// log_btn=document.style.display='';
cross.addEventListener("click",function(){
    flag=1;
    wrapper.style.left="80rem";
    wrapper.style.display="none";
    log_btn.style.top="61%";
})

log_btn.addEventListener("click",function(){
    flag=0;
    wrapper.style.left="0";
    wrapper.style.display="flex";
    log_btn.style.top="-80rem";
})