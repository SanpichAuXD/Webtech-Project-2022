
// const toggleButton = document.getElementsByClassName('toggle-button')[0];
// const navbarLinks = document.getElementsByClassName('navbar-links')[0];

// toggleButton.addEventListener('click', () => {
//     navbarLinks.classList.toggle('active');
// })


// function left(x) {
//     let btl1 = document.getElementById("btleft1");
//     let btl2 = document.getElementById("btleft2");
//     let btl3 = document.getElementById("btleft3");
//     let btl4 = document.getElementById("btleft4");

//     let btr1 = document.getElementById("btright1");
//     let btr2 = document.getElementById("btright2");
//     let btr3 = document.getElementById("btright3");
//     let btr4 = document.getElementById("btright4");

//     let c1 = document.getElementById("card1");
//     let c2 = document.getElementById("card2");
//     let c3 = document.getElementById("card3");
//     let c4 = document.getElementById("card4");

//     let i1 = document.getElementById("img1");
//     let i2 = document.getElementById("img2");
//     let i3 = document.getElementById("img3");
//     let i4 = document.getElementById("img4");
//     if (x == '1') {
//         c1.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c2.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
//         c3.style = "left: -50%; right:0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c4.style = "left: 0; right: 0; transform: scale(1, 1); opacity: 1; z-index: 1;"

//         btl1.style.display = "none";
//         btr1.style.display = "none";
//         btl4.style.display = "block";
//         btr4.style.display = "block";
        
//         i1.classList.remove('card-hov');
//         i4.classList.add('card-hov');
//     }
//     else if (x == '2') {
//         c1.style = "left: 0; right: 0; transform: scale(1, 1); opacity: 1; z-index: 1;"
//         c2.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c3.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
//         c4.style = "left:-50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"

//         btl2.style.display = "none";
//         btr2.style.display = "none";
//         btl1.style.display = "block";
//         btr1.style.display = "block";

//         i2.classList.remove('card-hov');
//         i1.classList.add('card-hov');
//     }
//     else if (x == '3') {
//         c1.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c2.style = "left: 0; right: 0; transform: scale(1, 1); opacity: 1; z-index: 1;"
//         c3.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c4.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"

//         btl3.style.display = "none";
//         btr3.style.display = "none";
//         btl2.style.display = "block";
//         btr2.style.display = "block";

//         i3.classList.remove('card-hov');
//         i2.classList.add('card-hov');
//     }
//     else if (x == '4') {
//         c1.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
//         c2.style = "left: -50%; right:0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c3.style = "left: 0; right: 0; transform: scale(1, 1); opacity: 1; z-index: 1;"
//         c4.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"

//         btl4.style.display = "none";
//         btr4.style.display = "none";
//         btl3.style.display = "block";
//         btr3.style.display = "block";

//         i4.classList.remove('card-hov');
//         i3.classList.add('card-hov');
//     }
// }
// function right(x) {
//     let btl1 = document.getElementById("btleft1");
//     let btl2 = document.getElementById("btleft2");
//     let btl3 = document.getElementById("btleft3");
//     let btl4 = document.getElementById("btleft4");

//     let btr1 = document.getElementById("btright1");
//     let btr2 = document.getElementById("btright2");
//     let btr3 = document.getElementById("btright3");
//     let btr4 = document.getElementById("btright4");

//     let c1 = document.getElementById("card1");
//     let c2 = document.getElementById("card2");
//     let c3 = document.getElementById("card3");
//     let c4 = document.getElementById("card4");

//     let i1 = document.getElementById("img1");
//     let i2 = document.getElementById("img2");
//     let i3 = document.getElementById("img3");
//     let i4 = document.getElementById("img4");
//     if (x == '1') {
//         c1.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c2.style = "left: 0; right:0; transform: scale(1, 1); opacity: 1; z-index: 1;"
//         c3.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c4.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"

//         btl1.style.display = "none";
//         btr1.style.display = "none";
//         btl2.style.display = "block";
//         btr2.style.display = "block";

//         i1.classList.remove('card-hov');
//         i2.classList.add('card-hov');
//     }
//     else if (x == '2') {
//         c1.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
//         c2.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c3.style = "left: 0; right:0; transform: scale(1, 1); opacity: 1; z-index: 1;"
//         c4.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"

//         btl2.style.display = "none";
//         btr2.style.display = "none";
//         btl3.style.display = "block";
//         btr3.style.display = "block";

//         i2.classList.remove('card-hov');
//         i3.classList.add('card-hov');
//     }
//     else if (x == '3') {
//         c1.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c2.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
//         c3.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c4.style = "left: 0; right:0; transform: scale(1, 1); opacity: 1; z-index: 1;"

//         btl3.style.display = "none";
//         btr3.style.display = "none";
//         btl4.style.display = "block";
//         btr4.style.display = "block";

//         i3.classList.remove('card-hov');
//         i4.classList.add('card-hov');
//     }
//     else if (x == '4') {
//         c1.style = "left: 0; right:0; transform: scale(1, 1); opacity: 1; z-index: 1;"
//         c2.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
//         c3.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
//         c4.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"

//         btl4.style.display = "none";
//         btr4.style.display = "none";
//         btl1.style.display = "block";
//         btr1.style.display = "block";

//         i4.classList.remove('card-hov');
//         i1.classList.add('card-hov');
//     }
// }


// hide and show value set
// let menu = document.getElementById("selectpizza1");
// let crust = document.getElementById("selectcrust1");
// let picpiz = document.getElementById("pizzapic1");
// console.log("666");
// function changePizza() {
//     console.log("555");
//     if (crust.value == 0) {
//         picpiz.src = ("./img/pan/" + (menu.value).split(" ").join("_") + "_m.png");
//     }
//     else if (crust.value == 1) {
//         picpiz.src = ("./img/thin/" + (menu.value).split(" ").join("_") + "_m.png");
//     }
//     else if (crust.value == 2) {
//         picpiz.src = ("./img/cheese/" + (menu.value).split(" ").join("_") + "_m.png");
//     }
//     else if (crust.value == 3) {
//         picpiz.src = ("./img/pan/" + (menu.value).split(" ").join("_") + "_l.png");
//     }
//     else if (crust.value == 4) {
//         picpiz.src = ("./img/thin/" + (menu.value).split(" ").join("_") + "_l.png");
//     }
//     else if (crust.value == 5) {
//         picpiz.src = ("./img/cheese/" + (menu.value).split(" ").join("_") + "_l.png");
//     }
//     // console.log(picpiz.src)
//     // console.log(menu.value);
// }
// 

const popScreen = document.querySelector(".popup-screen");
        const closeBtn = document.querySelector(".close-btn");
        const openBtn = document.querySelector(".open-btn");

        openBtn.addEventListener("click", () => {
            popScreen.classList.add("active");
        });

        closeBtn.addEventListener("click", () => {
            popScreen.classList.remove("active");
        });

       
