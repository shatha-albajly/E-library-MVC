// increase decrease button
const increase = document.querySelector(".increase");
const decrease = document.querySelector(".decrease");

document.addEventListener("DOMContentLoaded", function (e) {
  if (increase) {
    increase.addEventListener("click", (e) => {
      e.preventDefault();
      var value = parseInt(document.querySelector(".number").value, 10);
      value = isNaN(value) ? 0 : value;
      value++;
      document.querySelector(".number").value = value;
    });
  }

  if (decrease) {
    decrease.addEventListener("click", (e) => {
      e.preventDefault();
      var value = parseInt(document.querySelector(".number").value, 10);
      value = isNaN(value) ? 0 : value;
      value < 1 ? (value = 1) : "";
      value--;
      document.querySelector(".number").value = value;
    });
  }
});

// read from basket
const products_list = document.querySelector(".products");
const total = document.querySelector("#total");
const final_total_price = document.querySelector("#final-total-price");

let basket = JSON.parse(localStorage.getItem("basket")); // Parse data from localstorage
let totalPrice = 0;
basket.forEach((item) => {
  totalPrice += item.elementPrice * item.elementQuantity;
  const itemPrice = item.elementPrice * item.elementQuantity;

  const html_code = `
  <div class="product-first-row">
  <div class="product-image">
    <img src="../${item.elementImg}" alt="" />
  </div>
  <div class="product-div-without-image">
  <div class="product-wrap">
    <div class="product-info">
      <div class="product-name">
        <h2>
          <a href="book.html">
            <p>${item.elementName}</p>
          </a>
        </h2>
      </div>
      <div class="discount-label">
        <p>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</p>
      </div>
      </div>
      <div class="price-box">
        <div class="price">
          <p>${itemPrice}</p>

          <span class="price_currency"> رس </span>
        </div>
        <form>
          <input type="number" class="number" value="${item.elementQuantity}" />
          <div>
            <button class="value-button increase" value="Increase Value">
              +
            </button>
            <button class="value-button decrease" value="Decrease Value">
              -
            </button>
          </div>
        </form>
      </div>
      </div>
   
    <div class="yellow-note">
      <p>
        <span>ملاحظة: </span>
        هذا المنتج رقمي وسيتم توصيله من خلال البريد الالكتروني
      </p>
      <a href="#">كيفية الحصول على المنتج؟</a>
    </div>
  </div>
</div>
<div class="divider"></div>
<button class="product-second-row delete">
  <img src="images/svgs/delete.svg" style="width: 15px" alt="" />
  <p>احذف</p>
</button>

`;
  if (products_list) {
    const product = document.createElement("div");
    product.innerHTML = html_code;
    product.classList.add("product");
    products_list.appendChild(product);
  }
});
total.textContent = Math.round(totalPrice * 100) / 100;
final_total_price.textContent = Math.round(totalPrice * 100) / 100;

const delete_products = document.querySelectorAll(".delete");

let f = [
  {
    elementName: "لانك الله رحلة الى السماء السابعة‎",
    elementPrice: "17.54",
    elementQuantity: 2,
    elementImg: "images/book1front.jpg",
  },
  {
    elementName: "‎قصص من وحي الواقع‎‎",
    elementPrice: "17.54",
    elementQuantity: 1,
    elementImg: "images/book2.jpg",
  },
];

delete_products.forEach((delete_one_product) => {
  delete_one_product.addEventListener("click", (e) => {
    delete_one_product.parentElement.style.display = "none";
    deleteLocalStorage(delete_one_product);
  });
});

function deleteLocalStorage(delete_one_product) {
  let basket;

  const product_to_delete =
    delete_one_product.parentElement.querySelector(
      ".product-info p"
    ).textContent;
  if (localStorage.getItem("basket") === null) {
    basket = [];
  } else {
    basket = JSON.parse(localStorage.getItem("basket"));
  }

  basket.forEach((item) => {
    if (product_to_delete === item.elementName) {
      basket.splice(basket.indexOf(item), 1);
    }
  });

  localStorage.setItem("basket", JSON.stringify(basket));
  read_basket();
}
function read_basket() {
  let basket = JSON.parse(localStorage.getItem("basket")); // Parse data from localstorage
  let totalPrice = 0;
  console.log(basket);
  if (basket.length == 0) {
    total.textContent = "0";
    final_total_price.textContent = "0";
  } else {
    basket.forEach((item) => {
      totalPrice += item.elementPrice * item.elementQuantity;
      total.textContent = Math.round(totalPrice * 100) / 100;

      final_total_price.textContent = Math.round(totalPrice * 100) / 100;
    });
  }
}
