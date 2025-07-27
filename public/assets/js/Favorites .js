document.addEventListener("DOMContentLoaded", () => {
  const productList = document.getElementById("product-list");

  productList.addEventListener("click", function (e) {
    if (e.target.closest(".delete")) {
      const card = e.target.closest(".product-card");
      if (card) card.remove();
    }
  });
});
