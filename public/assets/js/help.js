const textarea = document.getElementById("message");
const charCount = document.getElementById("charCount");

textarea.addEventListener("input", () => {
  charCount.textContent = `${textarea.value.length}/1000`;
});

document.getElementById("sendBtn").addEventListener("click", () => {
  const text = textarea.value.trim();
  if (text) {
    alert("Your message has been sent!");
    textarea.value = "";
    charCount.textContent = "0/1000";
  }
});
