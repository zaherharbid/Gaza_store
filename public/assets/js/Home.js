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
document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector(".search-box");
    const menu = document.querySelector(".navbar");
    const searchIcon = document.querySelector("#search-icon");
    const menuIcon = document.querySelector("#menu-icon");

    if (searchIcon && search && menu) {
        searchIcon.onclick = () => {
            search.classList.toggle("active");
            menu.classList.remove("active");
            search.querySelector("input")?.focus();
        };
    }

    if (menuIcon && menu && search) {
        menuIcon.onclick = () => {
            menu.classList.toggle("active");
            search.classList.remove("active");
        };
    }

    // Hide Menu And Search Box On Scroll
    window.onscroll = () => {
        if (menu) menu.classList.remove("active");
        if (search) search.classList.remove("active");
    };
});

// Header

let header = document.querySelector("header");

window.addEventListener("scroll", () => {
    header.classList.toggle("shadow", window.scrollY > 0);
});

let payment_btns = document.querySelectorAll(".pay-btn");
payment_btns.forEach((btn) => {
    btn.onclick = (e) => {
        e.preventDefault();

        let product_id = btn.dataset.id;
        btn.classList.add("disabled");
        btn.innerHTML = "Proccessing ..";
        const csrfToken = document.head.querySelector(
            "[name~=csrf-token][content]"
        ).content;

        fetch("/pay", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
            body: JSON.stringify({
                product_id: product_id,
            }),
        })
            .then((response) => response.json())
            .then((data) => {
                stripe.redirectToCheckout({
                    sessionId: data.session_id,
                });
            });
    };
});
