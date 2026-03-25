const usernamePattern  = /^[a-z0-9]{6,10}$/;
const feedbackPattern = /^.{20,50}$/;

function usernamevalidation(event)  {
    const userResult = usernamePattern.test(event.target.value);

    if(userResult){
        form.username.setAttribute("class","accepted");
    }
    else{
        form.username.setAttribute("class","rejected");
    }
}

function feedbackvalidation(event) {
    const feedbackResult = feedbackPattern.test(event.target.value);

    if(feedbackResult){
        form.feedback.setAttribute("class","accepted");
    }
    else{
        form.feedback.setAttribute("class","rejected");
    }
}