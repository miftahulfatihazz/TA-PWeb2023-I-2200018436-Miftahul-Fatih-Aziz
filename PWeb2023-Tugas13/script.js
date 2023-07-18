function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var package = document.getElementById("package").value;
    var errorMessage = "";

    if (name === "") {
        errorMessage += "Nama harus diisi.\n";
    }

    if (email === "") {
        errorMessage += "Email harus diisi.\n";
    }

    if (package === "") {
        errorMessage += "Paket harus dipilih.\n";
    }

    if (errorMessage !== "") {
        alert(errorMessage);
        return false;
    }

    return true;
}
