

const popScreen = document.querySelector(".popup-screen");
        const closeBtn = document.querySelector(".close-btn");
        const openBtn = document.querySelector(".open-btn");

        openBtn.addEventListener("click", () => {
            popScreen.classList.add("active");
        });

        closeBtn.addEventListener("click", () => {
            popScreen.classList.remove("active");
        });

       
