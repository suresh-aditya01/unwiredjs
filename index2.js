const form = document.querySelector(".feedback-form");
const p = document.querySelector("p");
const usernamePattern=/^[a-zA-Z0-9]{6,10}$/;
const feedbackPattern =/^.{20,50}$/;
form.addEventListener("submit",(event)=>{
    event.preventDefault();
    const userResult =usernamePattern.test(form.username.value);
    const feedabackResult = feedbackPattern.test(form.feedback.value);

if(userResult && feedabackResult){
p.setAttribute("class","success");
p.textContent="Feedback submitted, Thank you !";
}else{
p.setAttribute("class","error");
p.textContent="please check username and feedback again!";
}
});
form.username.addEventListener("keyup",(event)=>{
    const userResult =usernamePattern.test(event.target.value);
    if(userResult){
        form.username.setAttribute("class","accepted");
    }
    else{
        form.username.setAttribute("class","rejected");
    }
});
form.feedback.addEventListener("keyup",(event)=>{
    const feedbackResult =feedbackPattern.test(event.target.value);
    if(feedbackResult){
        form.feedback.setAttribute("class","accepted");
    }
    else{
        form.feedback.setAttribute("class","rejected");
    }
});


