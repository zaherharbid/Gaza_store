document.addEventListener("DOMContentLoaded", () => {
  const mediaUpload = document.querySelector(".media-upload");
  const fileInput = mediaUpload.querySelector("input[type='file']");
  const previewText = mediaUpload.querySelector("span");

  mediaUpload.addEventListener("click", () => {
    fileInput.click();
  });

  fileInput.addEventListener("change", () => {
    const file = fileInput.files[0];
    if (file) {
      previewText.textContent = `Selected: ${file.name}`;
    } else {
      previewText.textContent = "Add Photo";
    }
  });

  document.querySelector(".preview").addEventListener("click", () => {
    alert("Preview mode is for demonstration only.");
  });

  document.querySelector(".publish").addEventListener("click", () => {
    alert("Product has been published (demo message)." );
  });
});