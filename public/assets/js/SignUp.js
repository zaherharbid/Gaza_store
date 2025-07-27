function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.querySelector(".toggle-password");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleIcon.classList.remove("fa-eye");
      toggleIcon.classList.add("fa-eye-slash");
    } else {
      passwordInput.type = "password";
      toggleIcon.classList.remove("fa-eye-slash");
      toggleIcon.classList.add("fa-eye");
    }
  }
  
  // مسح الإدخال عند الضغط على X
  document.querySelectorAll(".clear-input").forEach((icon) => {
    icon.addEventListener("click", () => {
      icon.previousElementSibling.value = "";
    });
  });
  