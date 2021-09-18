function myFunction() {
  confirm();
}
function editdetails2() {}

        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function() {
                    div.style.display = "none";
                }, 600);
            }
        }
function checkRegisterForm() {
            let formInput = document.forms["registerForm"].elements;
            let canSubmit = false;
            for (let i = 0; i < formInput.length; i++) {
                if (formInput[i].value.length === 0) {
                    canSubmit = true;
                }
            }
            document.getElementById("registerBtn").disabled = canSubmit;
        }