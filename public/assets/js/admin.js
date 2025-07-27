document.addEventListener("DOMContentLoaded", () => {
  const deleteButtons = document.querySelectorAll(".delete");
  const editButtons = document.querySelectorAll(".edit");
  const addButton = document.querySelector(".add-button");

  deleteButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const row = btn.closest(".product-row");
      if (confirm("Are you sure you want to delete this product?")) {
        row.remove();
      }
    });
  });

  editButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      alert("Edit functionality is currently in demo mode.");
    });
  });

  if (addButton) {
    addButton.addEventListener("click", () => {
      alert("Add product functionality is currently in demo mode.");
    });
  }
});