const products = [
    {
      name: "Classic shirts",
      category: "Shirts",
      img: "https://images.unsplash.com/photo-1526948128573-703ee1aeb6fa?auto=format&fit=crop&w=400&q=80",
      rating: 5,
      reviews: 365,
      price: 120,
      old: 150,
    },
    {
      name: "Cotton shirts",
      category: "Shirts",
      img: "https://images.unsplash.com/photo-1556905055-8f358a7a47b2?auto=format&fit=crop&w=400&q=80",
      rating: 5,
      reviews: 365,
      price: 120,
      old: 150,
    },
    {
      name: "Athletic Shirts",
      category: "Shirts",
      img: "https://images.unsplash.com/photo-1526948128573-703ee1aeb6fa?auto=format&fit=crop&w=400&q=80",
      rating: 5,
      reviews: 365,
      price: 120,
      old: 150,
    },
    {
      name: "Polo shirts",
      category: "Shirts",
      img: "https://images.unsplash.com/photo-1557180295-76eee20ae8aa?auto=format&fit=crop&w=400&q=80",
      rating: 5,
      reviews: 365,
      price: 120,
      old: 150,
    },
    {
      name: "Dress Shirts",
      category: "Shirts",
      img: "https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=400&q=80",
      rating: 5,
      reviews: 365,
      price: 120,
      old: 150,
    },
  ];
  
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
  
  
  
  const productGrid = document.getElementById("productGrid");
  productGrid.innerHTML = products.map((p, idx) => `
    <div class="card" data-index="${idx}">
      <img src="${p.img}" alt="${p.name}">
      <div class="card-body">
        <h3 class="card-title">${p.name}</h3>
        <p class="card-category">${p.category}</p>
        <div class="rating">
          ${"★".repeat(5)} <span style="color:var(--muted); margin-left:4px">(${p.reviews})</span>
        </div>
        <div class="price">${p.price}$ <span class="old-price">${p.old}$</span></div>
        <div class="action-row">
          <button class="btn-cart">Add To Cart</button>
          <i class="fa-regular fa-heart fav"></i>
        </div>
      </div>
    </div>`).join("");
  
  productGrid.addEventListener("click", (e) => {
    if (e.target.classList.contains("fav")) {
      e.target.classList.toggle("active");
    }
  });
  
const catGrid = document.getElementById("catGrid");
catGrid.innerHTML = categories.map((c) => `
  <a href="CategoryPage.html?id=${c.id}" class="category-link" style="text-decoration: none;">
    <div class="category-box" style="background:${c.bgColor}; cursor: pointer;">
      <h4>${c.name}</h4>
      <p>${c.desc}</p>
    </div>
  </a>
`).join("");

    