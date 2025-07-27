// Preview avatar
const avatarInput = document.getElementById("avatarUpload");
const avatarPreview = document.getElementById("avatarPreview");

avatarInput.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      avatarPreview.src = e.target.result;
    };
    reader.readAsDataURL(file);
  }
});

// Toggle readonly inputs
document.querySelectorAll(".edit-btn").forEach(button => {
  button.addEventListener("click", () => {
    const input = button.previousElementSibling;
    if (input && input.hasAttribute("readonly")) {
      input.removeAttribute("readonly");
      input.focus();
      input.style.backgroundColor = "#fff";
    }
  });
});

// Save form
document.querySelector(".profile-form").addEventListener("submit", function (e) {
  e.preventDefault();
  alert("✅ Changes saved successfully.");
});
