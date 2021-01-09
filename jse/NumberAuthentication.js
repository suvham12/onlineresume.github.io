window.onload=function () {
  render();
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
function phoneAuth() {
    //get the number
    var number=document.getElementById('number').value;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
        console.log(coderesult);
        alert("Message sent");
    }).catch(function (error) {
        alert(error.message);
    });
    var c=codeverify();
    /*if(c>0)
    	{
    	firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
            //s is in lowercase
    		window.confirmationResult=confirmationResult;
            coderesult=confirmationResult;
            console.log(coderesult);
            alert("Message sent");
        }).catch(function (error) {
            alert(error.message);
        });
    	}*/
}
function codeverify() {
    var code=document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function (result) {
        /*var c;
        c=1
        }
        if(c==1)
        {
            document.getElementById("exampleModal").disabled = true;
            document.getElementById("iii").enabled = true;
            document.getElementById("iiii").enabled = true;}*/
        alert("Successfully registered");
        var user=result.user;
        console.log(user);
    }).catch(function (error) {
        alert(error.message);
    });
    var count=count+1;
    //return count;
}