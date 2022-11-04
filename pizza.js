const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLinks = document.getElementsByClassName('navbar-links')[0];

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active');
})
function left(x) {
    let btl1 = document.getElementById("btleft1");
    let btl2 = document.getElementById("btleft2");
    let btl3 = document.getElementById("btleft3");
    let btl4 = document.getElementById("btleft4");

    let btr1 = document.getElementById("btright1");
    let btr2 = document.getElementById("btright2");
    let btr3 = document.getElementById("btright3");
    let btr4 = document.getElementById("btright4");

    let c1 = document.getElementById("card1");
    let c2 = document.getElementById("card2");
    let c3 = document.getElementById("card3");
    let c4 = document.getElementById("card4");

    let i1 = document.getElementById("img1");
    let i2 = document.getElementById("img2");
    let i3 = document.getElementById("img3");
    let i4 = document.getElementById("img4");
    if (x == '1') {
        c1.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c2.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
        c3.style = "left: -50%; right:0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c4.style = "left: 0; right: 0; transform: scale(1, 1); opacity: 1; z-index: 1;"

        btl1.style.display = "none";
        btr1.style.display = "none";
        btl4.style.display = "block";
        btr4.style.display = "block";

        i1.classList.remove('card-hov');
        i4.classList.add('card-hov');
    }
    else if (x == '2') {
        c1.style = "left: 0; right: 0; transform: scale(1, 1); opacity: 1; z-index: 1;"
        c2.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c3.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
        c4.style = "left:-50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"

        btl2.style.display = "none";
        btr2.style.display = "none";
        btl1.style.display = "block";
        btr1.style.display = "block";

        i2.classList.remove('card-hov');
        i1.classList.add('card-hov');
    }
    else if (x == '3') {
        c1.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c2.style = "left: 0; right: 0; transform: scale(1, 1); opacity: 1; z-index: 1;"
        c3.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c4.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"

        btl3.style.display = "none";
        btr3.style.display = "none";
        btl2.style.display = "block";
        btr2.style.display = "block";

        i3.classList.remove('card-hov');
        i2.classList.add('card-hov');
    }
    else if (x == '4') {
        c1.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
        c2.style = "left: -50%; right:0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c3.style = "left: 0; right: 0; transform: scale(1, 1); opacity: 1; z-index: 1;"
        c4.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"

        btl4.style.display = "none";
        btr4.style.display = "none";
        btl3.style.display = "block";
        btr3.style.display = "block";

        i4.classList.remove('card-hov');
        i3.classList.add('card-hov');
    }
}
function right(x) {
    let btl1 = document.getElementById("btleft1");
    let btl2 = document.getElementById("btleft2");
    let btl3 = document.getElementById("btleft3");
    let btl4 = document.getElementById("btleft4");

    let btr1 = document.getElementById("btright1");
    let btr2 = document.getElementById("btright2");
    let btr3 = document.getElementById("btright3");
    let btr4 = document.getElementById("btright4");

    let c1 = document.getElementById("card1");
    let c2 = document.getElementById("card2");
    let c3 = document.getElementById("card3");
    let c4 = document.getElementById("card4");

    let i1 = document.getElementById("img1");
    let i2 = document.getElementById("img2");
    let i3 = document.getElementById("img3");
    let i4 = document.getElementById("img4");
    if (x == '1') {
        c1.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c2.style = "left: 0; right:0; transform: scale(1, 1); opacity: 1; z-index: 1;"
        c3.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c4.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"

        btl1.style.display = "none";
        btr1.style.display = "none";
        btl2.style.display = "block";
        btr2.style.display = "block";

        i1.classList.remove('card-hov');
        i2.classList.add('card-hov');
    }
    else if (x == '2') {
        c1.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
        c2.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c3.style = "left: 0; right:0; transform: scale(1, 1); opacity: 1; z-index: 1;"
        c4.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"

        btl2.style.display = "none";
        btr2.style.display = "none";
        btl3.style.display = "block";
        btr3.style.display = "block";

        i2.classList.remove('card-hov');
        i3.classList.add('card-hov');
    }
    else if (x == '3') {
        c1.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c2.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
        c3.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c4.style = "left: 0; right:0; transform: scale(1, 1); opacity: 1; z-index: 1;"

        btl3.style.display = "none";
        btr3.style.display = "none";
        btl4.style.display = "block";
        btr4.style.display = "block";

        i3.classList.remove('card-hov');
        i4.classList.add('card-hov');
    }
    else if (x == '4') {
        c1.style = "left: 0; right:0; transform: scale(1, 1); opacity: 1; z-index: 1;"
        c2.style = "left: 0; right: -50%; transform: scale(.8, .8); opacity: .5; z-index: 0;"
        c3.style = "left: 0; right: 0; transform: scale(.8, .8); opacity: .5; z-index: -1;"
        c4.style = "left: -50%; right: 0; transform: scale(.8, .8); opacity: .5; z-index: 0;"

        btl4.style.display = "none";
        btr4.style.display = "none";
        btl1.style.display = "block";
        btr1.style.display = "block";

        i4.classList.remove('card-hov');
        i1.classList.add('card-hov');
    }
}

let menu1 = document.getElementById("selectpizza1");
let menu2 = document.getElementById("selectpizza2");
let crust1 = document.getElementById("selectcrust1");
let crust2 = document.getElementById("selectcrust2");
let pic1 = document.getElementById("pizzapic1");
let pic2 = document.getElementById("pizzapic2");
let sespa = document.getElementById("selectspa");
let spa = document.getElementById("spaimg");
let desc1 = document.getElementById("desc1");
let desc2 = document.getElementById("desc2");
let pprice1 = document.getElementById("pprice1")
let pprice2 = document.getElementById("pprice2")
let picpiz;
let menu;
let crust;
let price = 0
let pprice;
let desc;
let requestURL = 'pizza.json';
let request = new XMLHttpRequest();

request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        ExtractData(JSON.parse(request.responseText));
    }
};
request.open("GET", requestURL, true);
request.send();
let pizprice = {};
let arr = [];

//keep json in object
function ExtractData(data) {
    for (let i = 0; i < data.menu.length; i++) {
        arr.push(data.menu[i].price, data.menu[i].eng_describe)
        pizprice[data.menu[i].eng_name] = (arr);
        arr = [];
    }

}
let arr_price = [];
price = 379;
function setPrice(set) {
    console.log("1")
    if (set == 1) {
        console.log("2")
        price = 379;
    }
    else if (set == 2) {
        console.log("3")
        price = 179
    }
    else {
        price = set
    }
    console.log(price)
}

// get price from object and add price by condition
function getPrice(piz, crust, set) {
    let price = parseInt(pizprice[piz]);
    if (set == 4){
        price = v4price;    
        price = 0;
    }
    console.log(price)
    if (set == 1) {
        console.log(set)
        price = 179;
        return price;
    }
    
    else if(set == 2){
        
        // console.log(price)
        ptopping = price - 279;
        price = 499 + ptopping;
        if (crust == 5){
            price += 150;
        }
        return price;
    }else if (set == 3){
        ptopping = price - 279;
        price = 399 + ptopping;
    }
    console.log(price);



    price = price + topPrice;
    
    if (crust == 1) {
        price -= 40;
    } else if (crust == 2) {
        price += 100;
    } else if (crust == 3) {
        price += 120;
    } else if (crust == 4) {
        price += 80;
    } else if (crust == 5) {
        price += 270;
    }
    return price;
}

function changeDesc(piz) {
    
    desc.innerHTML = pizprice[piz][1];


}


let numAdd = [0, 0, 0, 0, 0, 0, 0, 0];
let topp = "top";
let topPrice = 0;
function num_topping(add, num) {
    console.log(price)
    let topid = topp + num;
    let getid = document.getElementById(topid);
    console.log(topid)
    let pic = 0;
    if (num > 3) {
        pic = 2;
    } else {
        pic = 1
    }
    if (add == 1) {
        topPrice += 39;
        price += 39;
        console.log(price)
        numAdd[num]++;
        getid.innerHTML = numAdd[num];
    } else if (numAdd[num] != 0) {
        topPrice -= 39;
        price -= 39;
        numAdd[num]--;
        getid.innerHTML = numAdd[num];
    }
   
    changePrice(price, pic);
    console.log(price,pic)
}
function keepprice(i) {
    arr_price[i] = price;
    console.log(arr_price);
}
let v4price = 0;
function keeppricev4() {
    
        v4price += price;
       price = 0;
       console.log(v4price)
}
function reset(num) {
    console.log(price)
    if (num == 0) {
        price -= topPrice;
    }
    else if (num) {
        for (let i = 0; i < 8; i++) {
            numAdd[i] = 0;
            let topid = topp + i;
            let getid = document.getElementById(topid);
            if (getid == null) {
                break;
            }

            getid.innerHTML = numAdd[i];

        }
    }
    else{
        v4price = 0;
    }
    console.log(numAdd)
    topPrice = 0;
}
console.log("on");

function changePizza(pic, set) {
    console.log("on")
    if (pic == 1) {
        picpiz = pic1;
        menu = menu1;
        crust = crust1;
        pprice = pprice1;
        desc = desc1;


    } if (pic == 2) {
        picpiz = pic2;
        menu = menu2;
        crust = crust2;
        pprice = pprice2;
        desc = desc2;

    }
    
        price = getPrice(menu.value, crust.value, set);
    
    
    changeDesc(menu.value);
    
    changePrice(price, pic, set);
   
    
    console.log(price)
    if (crust.value == 0) {
        picpiz.src = ("./img/pan/" + (menu.value).split(" ").join("_") + "_m.png");
    }
    else if (crust.value == 1) {
        picpiz.src = ("./img/thin/" + (menu.value).split(" ").join("_") + "_m.png");

    }
    else if (crust.value == 2) {
        picpiz.src = ("./img/cheese/" + (menu.value).split(" ").join("_") + "_m.png");
    }
    else if (crust.value == 3) {
        picpiz.src = ("./img/pan/" + (menu.value).split(" ").join("_") + "_l.png");
    }
    else if (crust.value == 4) {
        picpiz.src = ("./img/thin/" + (menu.value).split(" ").join("_") + "_l.png");
    }
    else if (crust.value == 5) {
        picpiz.src = ("./img/cheese/" + (menu.value).split(" ").join("_") + "_l.png");
    }
    console.log(picpiz.src)
    // console.log(menu.value);
}

function changePrice(price, pic, set) {
    console.log(price)
    if (pic == 1) {
        pprice = pprice1;
    } if (pic == 2) {
        pprice = pprice2;
    }
    if (set == 4){
        price = v4price + price;
    }
    console.log(pprice)
    pprice.innerHTML = price + " ฿";
    console.log(price)
}
function addToCart(){
    if (price == 0){
        console.log(v4price)
    }
    // if (arr_price[0] > arr_price[1]){
    //     console.log(arr_price[0],0);
    // }
    console.log(price)

}

let pizza1 = document.getElementById("pizza1");
let pizza2 = document.getElementById("pizza2");
let pizza3 = document.getElementById("pizza3");
let pizza4 = document.getElementById("pizza4");
let pizza5 = document.getElementById("pizza5");
let pizza6 = document.getElementById("pizza6");
let but1 = document.getElementById("next1");
let but2 = document.getElementById("next2");
let but3 = document.getElementById("next3");
let but4 = document.getElementById("next4");
let but5 = document.getElementById("next5");
let last = document.getElementById("last");

let pum1 = document.getElementById("pom_select_1");
let pum2 = document.getElementById("pom_select_2");
let pum3 = document.getElementById("pom_select_3");
let pum4 = document.getElementById("pom_select_4");
let pum5 = document.getElementById("pom_select_5");
let pum6 = document.getElementById("pom_select_6");

let sel_color = "hsla(0, 100%, 66%, 0.4)";
let back_color = "#CBB09C";
function hidNshopizza(num, check) {

    if (check == 2) {
        if (num == 1) {
            but1.classList.add("d-none");
            last.classList.remove("d-none");
            pizza1.classList.add("d-none");
            pizza2.classList.remove("d-none");
            pum1.style.backgroundColor = back_color;
            pum2.style.backgroundColor = sel_color;
        }
        else {
            but1.classList.remove("d-none");
            last.classList.add("d-none");
            pizza1.classList.remove("d-none");
            pizza2.classList.add("d-none");
            pum1.style.backgroundColor = sel_color;
            pum2.style.backgroundColor = back_color;
        }
    }
    if (check == 4) {
        if (num == 1) {
            but1.classList.add("d-none");
            but2.classList.remove("d-none");
            pizza1.classList.add("d-none");
            pizza2.classList.remove("d-none");
            pum1.style.backgroundColor = back_color;
            pum2.style.backgroundColor = sel_color;
        }
        else if (num == 2) {
            but2.classList.add("d-none");
            but3.classList.remove("d-none");
            pizza2.classList.add("d-none");
            pizza3.classList.remove("d-none");
            pum2.style.backgroundColor = back_color;
            pum3.style.backgroundColor = sel_color;

        }
        else if (num == 3) {
            but3.classList.add("d-none");
            last.classList.remove("d-none");
            pizza3.classList.add("d-none");
            pizza4.classList.remove("d-none");
            pum3.style.backgroundColor = back_color;
            pum4.style.backgroundColor = sel_color;

        }
    }
}

function hidNshopizza46(num, check) {
    if (check == 4) {
        if (num == 1) {
            but1.classList.remove("d-none");
            but2.classList.add("d-none");
            but3.classList.add("d-none");
            last.classList.add("d-none");
            pizza1.classList.remove("d-none");
            pizza2.classList.add("d-none");
            pizza3.classList.add("d-none");
            pizza4.classList.add("d-none");
            pum1.style.backgroundColor = sel_color;
            pum2.style.backgroundColor = back_color;
            pum3.style.backgroundColor = back_color;
            pum4.style.backgroundColor = back_color;
        }
        else if (num == 2) {
            but1.classList.add("d-none");
            but2.classList.remove("d-none");
            but3.classList.add("d-none");
            last.classList.add("d-none");
            pizza1.classList.add("d-none");
            pizza2.classList.remove("d-none");
            pizza3.classList.add("d-none");
            pizza4.classList.add("d-none");
            pum1.style.backgroundColor = back_color;
            pum2.style.backgroundColor = sel_color;
            pum3.style.backgroundColor = back_color;
            pum4.style.backgroundColor = back_color;
        }
        else if (num == 3) {
            but1.classList.add("d-none");
            but2.classList.add("d-none");
            but3.classList.remove("d-none");
            last.classList.add("d-none");
            pizza1.classList.add("d-none");
            pizza2.classList.add("d-none");
            pizza3.classList.remove("d-none");
            pizza4.classList.add("d-none");
            pum1.style.backgroundColor = back_color;
            pum2.style.backgroundColor = back_color;
            pum3.style.backgroundColor = sel_color;
            pum4.style.backgroundColor = back_color;
        }
        else if (num == 4) {
            but1.classList.add("d-none");
            but2.classList.add("d-none");
            but3.classList.add("d-none");
            last.classList.remove("d-none");
            pizza1.classList.add("d-none");
            pizza2.classList.add("d-none");
            pizza3.classList.add("d-none");
            pizza4.classList.remove("d-none");
            pum1.style.backgroundColor = back_color;
            pum2.style.backgroundColor = back_color;
            pum3.style.backgroundColor = back_color;
            pum4.style.backgroundColor = sel_color;
        }
    }
}


function changeSpa() {
    spa.src = ("./img/pasta/pasta_" + sespa.value + ".png")
}

function take_deli(num) {
    let deli = document.getElementById("deli");
    let take = document.getElementById("take");
    let color_take = document.getElementById("switch-take");
    let color_deli = document.getElementById("switch-deli");
    if (num) {
        deli.classList.add("d-none");
        take.classList.remove("d-none");
        color_take.classList.remove("text-dark");
        color_take.classList.add("bg-secondary", "text-light");
        color_deli.classList.remove("bg-secondary", "text-light");
        color_deli.classList.add("text-dark");

    }
    else {
        take.classList.add("d-none");
        deli.classList.remove("d-none");
        color_deli.classList.remove("text-dark");
        color_deli.classList.add("bg-secondary", "text-light");
        color_take.classList.remove("bg-secondary", "text-light");
        color_take.classList.add("text-dark");


    }
}
let isSend = false;
let namee = document.getElementById("name");
let address = document.getElementById("address");
let phone = document.getElementById("phone");
let dropt = document.getElementById("drop-text")
let drop = document.getElementById("drop");
let list = document.createElement("li");
let taga = document.createElement("a");
let tag_phone = document.createElement("a");
let tag_addr = document.createElement("a");


function valid() {
    if (namee.value == "" || address.value == "" || phone.value == "") {
        alert("dfesff");
        return false;
    }
    else if (!isNaN(namee.value)) {
        alert("Name must be alphabet");
        return false;

    }

    else if ((namee.value.length < 2) || (namee.value.length > 30)) {
        alert("Name must not be less than 2 or more than 20 alphabets");
        return false;
    }
    else if ((phone.value.length != 10)) {
        alert("Phone must be 10 digit");
        return false;
    }
    else if (!isSend) {
        // btn_ch.addAttribute("data-bs-dismiss='modal'");
        taga.classList.add('dropdown-item', 'fs-4');
        taga.setAttribute("data-bs-toggle", "modal");
        taga.innerText = namee.value;
        tag_addr.classList.add('dropdown-item');
        tag_addr.setAttribute("data-bs-toggle", "modal");
        tag_addr.innerText = address.value;
        tag_phone.classList.add('dropdown-item');
        tag_phone.setAttribute("data-bs-toggle", "modal");
        tag_phone.innerText = phone.value;
        drop.removeChild(drop.lastElementChild);
        list.appendChild(taga);
        list.appendChild(tag_addr);
        list.appendChild(tag_phone);
        drop.appendChild(list);
        dropt.innerText = namee.value;
        dropt.classList.remove("dropdown-toggle");
        isSend = true;

    }
}


