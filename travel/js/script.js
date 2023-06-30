const forms=document.querySelector(".forms"),
      pwshowhide=document.querySelectorAll(".eye-icon"),  
      links=document.querySelectorAll(".loglink"),
      fogotpass=document.querySelectorAll(".fogotpasslogin"),
      fogotpasssign=document.querySelectorAll(".fogotpasssign");

pwshowhide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click",()=>{
        let pwFields=eyeIcon.parentElement.parentElement.querySelectorAll(".password");

        pwFields.forEach(password=>{
            if(password.type==="password"){
                password.type="text";
                eyeIcon.classList.replace("bx-hide","bx-show");
                return;
            }
            password.type="password";
                eyeIcon.classList.replace("bx-show","bx-hide");
        })
    })    
});


links.forEach(link=>{
    link.addEventListener("click",e =>{
        e.preventDefault();
        forms.classList.toggle("show-signup")
    })
})

fogotpass.forEach(link=>{
    link.addEventListener("click",e =>{
        e.preventDefault();
        forms.classList.toggle("show-fogot")
        forms.classList.remove("show-fogotlg")
    })
})

fogotpasssign.forEach(link=>{
    link.addEventListener("click",e =>{
        e.preventDefault();
        forms.classList.toggle("show-fogotlg")
        forms.classList.remove("show-fogot")
    })
})







