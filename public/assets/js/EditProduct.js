// Add color variable dynamically
document.querySelector('.color-options button').addEventListener('click', () => {
  const container = document.querySelector('.color-options');
  const input = document.createElement('input');
  input.type = 'text';
  input.placeholder = 'New Color';
  input.style.flex = '1 1 30%';
  container.insertBefore(input, container.lastElementChild);
});

// Upload and preview image
const photoUpload = document.getElementById('photoUpload');
const fileInput = document.getElementById('fileInput');
const previewImage = document.getElementById('previewImage');

photoUpload.addEventListener('click', () => {
  fileInput.click();
});

fileInput.addEventListener('change', () => {
  const file = fileInput.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      previewImage.src = e.target.result;
      previewImage.style.display = 'block';
    };
    reader.readAsDataURL(file);
  }
});
