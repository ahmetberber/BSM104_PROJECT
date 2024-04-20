function checkMail() {
    var email = document.forms["Form"]["email"].value;
    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!regex.test(email)) {
        alert("Yanlış mail formatı");
        return false;
    }
}