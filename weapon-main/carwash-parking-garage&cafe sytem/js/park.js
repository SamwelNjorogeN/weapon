function submitForm() {
    // Submit the form
    document.getElementById("parkingForm").submit();
    // Redirect the user to payment.php
    window.location.href = "../html/payment.php";
}

function validateNationalID(input) {
    input.value = input.value.replace(/\D/g, ''); 
}

function validatePhoneNumber(input) {
    input.value = input.value.replace(/\D/g, ''); // Remove non-numeric characters

    if (input.value.substring(0, 3) !== '254') {
        document.getElementById('phoneError').innerText = "Phone number must start with '254'";
    } else {
        document.getElementById('phoneError').innerText = "";
    }
}

function resetForm() {
    document.getElementById("parkingForm").reset();
}

window.addEventListener('pageshow', function(event) {
    var form = document.getElementById('parkingForm');
    if (event.persisted) {
       
        form.reset();
    }
});
