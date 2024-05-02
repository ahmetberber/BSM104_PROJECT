function checkMail() {
    var email = document.forms["Form"]["email"].value;
    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!regex.test(email)) {
        alert("Geçersiz e-posta adresi.");
        return false;
    }
}