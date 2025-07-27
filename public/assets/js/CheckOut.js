document.addEventListener("DOMContentLoaded", function () {
  const discountInput = document.querySelector(".discount-section input");
  const applyButton = document.querySelector(".discount-section button");
  const totalDisplay = document.querySelector(".summary .total span");

  applyButton.addEventListener("click", function () {
    const discountCode = discountInput.value.trim();

    // عرض توضيحي: أي كود يؤدي لتطبيق خصم بسيط
    if (discountCode !== "") {
      // خصم بسيط بقيمة 35 دولار من المجموع
      totalDisplay.textContent = "660 $";
      alert("Discount applied: -35$");
    } else {
      alert("Please enter a discount code.");
    }
  });
});