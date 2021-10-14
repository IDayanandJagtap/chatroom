const pswrdField = document.querySelector(".form input[type='password']");
toggleIcon = document.querySelector(".form .field i");

toggleIcon.onclick = () =>{
    if(pswrdField.type === "password"){
        pswrdField.type = "text";
        toggleIcon.classlist.add("active");
    }
    else{
        pswrdField.type = "password";
        toggleIcon.classlist.remove("active");
    }
}