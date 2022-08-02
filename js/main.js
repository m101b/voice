const form=document.getElementById("signupForm");
form.addEventListener("submit", (e)=>{

    if(form.password.value!==form.confirmPassword){
        e.preventDefault();
        alert("Password don't match.")
    }
})