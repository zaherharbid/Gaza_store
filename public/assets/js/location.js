const showAddFormBtn = document.getElementById('showAddForm');
const backToDefaultBtn = document.getElementById('backToDefault');
const addSection = document.getElementById('add-location');
const defaultSection = document.getElementById('default-location');

showAddFormBtn.addEventListener('click', () => {
  defaultSection.classList.add('hidden');
  addSection.classList.remove('hidden');
});

backToDefaultBtn.addEventListener('click', () => {
  addSection.classList.add('hidden');
  defaultSection.classList.remove('hidden');
});


