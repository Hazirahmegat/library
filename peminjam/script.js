function validateEmail() {
    const email = document.getElementById("email").value;
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!pattern.test(email)) {
      alert("Please enter a valid email address");
      return false;
    }
    // submit form if email is valid
    return true;
}
  