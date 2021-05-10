// --------constant & veriable section ------------------
const mynavbar = document.getElementById("mynavbar");
const navItem = document.querySelectorAll(".nav-item");

// -------------preloading section----------------------
var preloader = document.getElementById("loading");
function myfunction() {
  preloader.style.display = "none";
}
$(".navbar-collapse a").click(function () {
  $(".navbar-collapse").collapse("hide");
});

// ---------------onscroll section-----------------------
window.addEventListener("scroll", () => {
  if (document.documentElement.scrollTop > 50) {
    mynavbar.classList.add("fixed-top");
  } else {
    mynavbar.classList.remove("fixed-top");
  }
});

// ---------------navlink onclick section-----------------------
const mytest = () => {
  if (navItem.classList.add("active")) {
    navItem.classList.remove("active");
  } else {
    navItem.classList.add("active");
  }
};
navItem.onclick = () => {
  mytest();
  console.log(navItem);
};
