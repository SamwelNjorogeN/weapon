function validatePhoneNumber () {
  var phoneNumberInput = document.getElementById('phoneNumber').value
  var phoneNumberError = document.getElementById('phoneNumberError')
  var phoneNumberPattern = /^254[1-9]\d{8}$/
  if (!phoneNumberPattern.test(phoneNumberInput)) {
    phoneNumberError.textContent =
      'Phone Number Must begin with 254'
    return false
  }

  phoneNumberError.textContent = ''
  return true
}

document
  .getElementById('paidamount')
  .addEventListener('input', function (event) {
    var input = event.target.value
    event.target.value = input.replace(/[^0-9]/g, '')
  })

document
  .getElementById('phoneNumber')
  .addEventListener('input', function (event) {
    var input = event.target.value
    event.target.value = input.replace(/\D/g, '')
  })

  
  document.addEventListener("DOMContentLoaded", function() {
    // Get all the buttons within the specified div
    const buttons = document.querySelectorAll('.container .active a');

    // Add click event listener to each button
    buttons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            
            // Get the numeric value from the button text
            const amount = parseInt(button.textContent.match(/\d+/)[0]);
            
            // Get the corresponding h5 text
            const service = button.closest('.container').querySelector('h5').textContent;
            
            // Store the values in localStorage temporarily
            localStorage.setItem('amount', amount);
            localStorage.setItem('service', service);
            
            // Redirect to client.php
            window.location.href = '../html/client.php';
        });
    });
});







