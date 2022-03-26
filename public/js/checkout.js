const progressBar = document.getElementById("progress-bar");
const progressNext = document.getElementById("progress-next");
const progressPrev = document.getElementById("progress-prev");
const progressDone = document.getElementById("progress-done");

const checkoutcarts = document.querySelectorAll(".checkout-cart");
const steps = document.querySelectorAll(".step");

let active = 1;

progressNext.addEventListener("click", () => {
  active++;

  if (active > steps.length) {
    active = steps.length;
  }
  updateProgress();
  movecarts();
});

progressPrev.addEventListener("click", () => {
  active--;
  if (active < 1) {
    active = 1;
  }
  updateProgress();
  movecarts();
});

const movecarts = () => {
  checkoutcarts.forEach(function (checkcart, index) {
    if (active == index + 1) {
      checkcart.classList.add("active");
    } else {
      checkcart.classList.remove("active");
    }
  });
};

const updateProgress = () => {
  steps.forEach((step, i) => {
    if (i < active) {
      step.classList.add("active");
    } else {
      step.classList.remove("active");
    }
  });
  progressBar.style.width = ((active - 1) / (steps.length - 1)) * 100 + "%";
  if (active === 1) {
    progressPrev.disabled = true;
    progressPrev.style.border = "none";
  } else if (active === steps.length) {
    // progressNext.classList.add("to-main-page");

    progressNext.disabled = true;
    progressNext.style.border = "none";
  } else {
    progressPrev.disabled = false;
    progressNext.disabled = false;
    progressNext.style.border = "1px solid var(--gray-color)";
    progressPrev.style.border = "1px solid var(--gray-color)";
  }
};

const clear_storage = () => {
  localStorage.removeItem("basket");
};
