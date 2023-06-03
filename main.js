


function myFunction() {
    var x = document.getElementById("food");
    if (x.className === "food-filter") {
      x.className += " fa";
    } else {
      x.className = "food-filter";
    }
  }


function orderpage(){
    document.location.href="menu.html";
}

let musttry = document.getElementById("musttry-item")
let pizza = document.getElementById("pizza-item")
let milktea = document.getElementById("milktea-item")
let combo = document.getElementById("combo-item")
let merienda = document.getElementById("merienda-item")
let title = document.getElementById("title")

musttry.onclick = function(){
    title.innerHTML = "MUST TRY";
}

pizza.onclick = function(){
    title.innerHTML = "PIZZA";
}

milktea.onclick = function(){
    title.innerHTML = "DRINKS";
}

combo.onclick = function(){
    title.innerHTML = "BREAKFAST";
}

merienda.onclick = function(){
    title.innerHTML = "MERIENDA MEALS";
}




const menuBtns = document.querySelectorAll('.buttons');
const foodItems = document.querySelectorAll('.food-items');

let activeBtn = "musttry-item";

showFoodMenu(activeBtn);

menuBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
        resetActiveBtn();
        showFoodMenu(btn.id);
        btn.classList.add('active-btn');
    });
});

function resetActiveBtn(){
    menuBtns.forEach((btn) => {
        btn.classList.remove('active-btn');
    });
}

function showFoodMenu(newMenuBtn){
    activeBtn = newMenuBtn;
    foodItems.forEach((item) => {
        if(item.classList.contains(activeBtn)){
            item.style.display = "grid";
        } else {
            item.style.display = "none";
        }
    });
}



