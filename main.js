// Function to handle the click event on the document
document.addEventListener('click', function(event) {
    var dropdown = document.querySelector('.food-type');
    var dropdownContent = document.querySelector('.food-filter');
    var targetElement = event.target;
  
    // Check if the clicked element is inside the dropdown or the dropdown button
    if (!dropdown.contains(targetElement) && targetElement !== dropdown && targetElement !== dropdownContent) {
      dropdownContent.classList.remove('active');
    }
  });
  
  // Function to toggle the dropdown content
  function myFunction() {
    var dropdownContent = document.querySelector('.food-filter');
    dropdownContent.classList.toggle('active');
  }
  
  // Add click event listener to each button inside the dropdown content
  var buttons = document.querySelectorAll('.food-filter .buttons');
  buttons.forEach(function(button) {
    button.addEventListener('click', function() {
      var dropdownContent = document.querySelector('.food-filter');
      dropdownContent.classList.remove('active');
    });
  });
  







  

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



