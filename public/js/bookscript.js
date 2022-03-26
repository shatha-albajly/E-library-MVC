const img_carts = document.querySelectorAll(".img-cart");
const model_container = document.querySelector(".model-container");
let img = document.querySelector(".model-container img");
const left_arrow = document.querySelector(".model-container .left-arrow i");
const right_arrow = document.querySelector(".model-container .right-arrow i");

//
let imgNumber = 0;
img_carts.forEach((img_cart) => {
  console.log(img_cart);

  img_cart.addEventListener("click", (e) => {
    model_container.style.display = "block";
    console.log(img);

    img.src = e.target.src;
  });
});

left_arrow.addEventListener("click", () => {
  imgNumber++;
  show_img();
});

right_arrow.addEventListener("click", () => {
  imgNumber--;
  show_img();
});

const show_img = () => {
  if (imgNumber > img_carts.length - 1) {
    imgNumber = 0;
  } else if (imgNumber < 0) {
    imgNumber = img_carts.length - 1;
  }
  img_carts[imgNumber];
  img.src = img_carts[imgNumber].querySelector("img").src;
};
