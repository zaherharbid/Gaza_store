document.addEventListener("DOMContentLoaded", () => {
  const favButtons = document.querySelectorAll(".fav-btn");

  favButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      btn.classList.toggle("active");
      const icon = btn.querySelector("i");

      if (btn.classList.contains("active")) {
        icon.classList.remove("far");
        icon.classList.add("fas");
      } else {
        icon.classList.remove("fas");
        icon.classList.add("far");
      }
    });
  });
});

const categories = [
    { name: "Shirts", desc: "Dress Shirts, Polo Shirts, Casual Shirts", bgColor: "#ffe5e5" },
    { name: "Pants", desc: "Jeans, Chinos, Dress Pants", bgColor: "#e0e7ff" },
    { name: "Jackets", desc: "Leather Jackets, Denim Jackets", bgColor: "#e0f7fa" },
    { name: "T-Shirts", desc: "Graphic Tees, Plain Tees", bgColor: "#fff3e0" },
    { name: "Suits", desc: "Two-Piece Suit, Three-Piece Suit", bgColor: "#ede7f6" },
    { name: "Shoes", desc: "Dress Shoes, Casual Shoes", bgColor: "#f3e5f5" },
    { name: "Accessory", desc: "Watches, Belts, Hats", bgColor: "#fbe9e7" },
    { name: "Sportswear", desc: "Athletic Shorts, Track Pants", bgColor: "#f1f8e9" },
    { name: "Outerwear", desc: "Coats, Jackets, Parkas", bgColor: "#e8f5e9" },
    { name: "Loungewear", desc: "Sweatpants, Robes, Pajamas", bgColor: "#fce4ec" },
    { name: "Underwear", desc: "Boxers, Briefs, Trunks", bgColor: "#e0f2f1" },
    { name: "Nightwear", desc: "Pajama Sets, Nightgowns", bgColor: "#edeef0" },
  ];

const catGrid = document.getElementById("catGrid");
catGrid.innerHTML = categories.map((c) => `
  <a href="CategoryPage.html?id=${c.id}" class="category-link" style="text-decoration: none;">
    <div class="category-box" style="background:${c.bgColor}; cursor: pointer;">
      <h4>${c.name}</h4>
      <p>${c.desc}</p>
    </div>
  </a>
`).join("");

// تفعيل القلب (من القسم السابق)
document.addEventListener("DOMContentLoaded", () => {
  const favButtons = document.querySelectorAll(".fav-btn");

  favButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      btn.classList.toggle("active");
      const icon = btn.querySelector("i");

      if (btn.classList.contains("active")) {
        icon.classList.remove("far");
        icon.classList.add("fas");
      } else {
        icon.classList.remove("fas");
        icon.classList.add("far");
      }
    });
  });

  // دعم السحب في الكاروسيل
  const carousel = document.getElementById("carousel");
  let isDown = false;
  let startX, scrollLeft;

  carousel.addEventListener("mousedown", (e) => {
    isDown = true;
    carousel.classList.add("grabbing");
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
  });

  carousel.addEventListener("mouseleave", () => {
    isDown = false;
    carousel.classList.remove("grabbing");
  });

  carousel.addEventListener("mouseup", () => {
    isDown = false;
    carousel.classList.remove("grabbing");
  });

  carousel.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (x - startX) * 2;
    carousel.scrollLeft = scrollLeft - walk;
  });
});
