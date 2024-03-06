function validatePhoneNumber() {
    var phoneNumber = document.getElementById("phoneInput").value;
  
    if (phoneNumber) {
      var digitsOnly = phoneNumber.replace(/\D/g, "");
  
      if (digitsOnly.length === 10) {
        alert("Valid phone number");
      } else {
        alert("Invalid phone number");
      }
    }
  }
  
  function validateEmail() {
    var input = document.getElementById("emailInput").value;
    if (input.includes("@")) {
    } else {
      alert("Invalid email address");
    }
  }
  
  function validateIDNumber() {
    var IDNumber = document.getElementById("IdInput").value;
  
    if (IDNumber) {
      var digitsOnly = IDNumber.replace(/\D/g, "");
  
      if (digitsOnly.length === 10) {
        alert("Valid id number");
        
      } else {
        alert("Invalid id number");
      }
    }
  }