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

const passwordInput = document.getElementById('password');
  const confirmPasswordInput = document.getElementById('confirmPassword');
  const passwordIcon = document.getElementById('passwordIcon');

  confirmPasswordInput.addEventListener('input', () => {
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;

    if (password !== confirmPassword) {
      passwordIcon.innerHTML = '&#10060;';
      passwordIcon.classList.add('password-mismatch-icon');
    } else {
      passwordIcon.innerHTML = '&#10004;';
      passwordIcon.classList.remove('password-mismatch-icon');
      passwordIcon.classList.add('password-match-icon');
    }

    const passwordPattern = /^(?=.*[!@#$%^&*])(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,}$/;
    const isValidPassword = passwordPattern.test(password);

    if (!isValidPassword && password.length > 0) {
      passwordIcon.innerHTML = '&#10060;';
      passwordIcon.classList.remove('password-match-icon');
      passwordIcon.classList.add('password-mismatch-icon');
    }
  });
