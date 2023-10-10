const inputButtons = document.querySelectorAll(".for-button-input");
if (inputButtons) {
  for (let i = 0; i < inputButtons.length; i++) {
    inputButtons[i].addEventListener("click", function (e) {
      const currentActive = document.querySelector(
        ".for-button-input.active-button"
      );
      inputButtons[i].classList.add("active-button");
      currentActive.classList.remove("active-button");
    });
  }
}

  const paymentBtnLeft = document.querySelector(".payment-button-left");
  const paymnetBtnRight = document.querySelector(".payment-button-right");

  const costChange = document.querySelector(".cost-change");
  const paymentFull = document.querySelector(".paymet-full");


paymentBtnLeft.addEventListener("click", function (e) {
  e.preventDefault();
  if (
    paymnetBtnRight.classList.contains("payment-backGround") ||
    rightButton.classList.contains("payment-backGround")
  ) {
    this.classList.remove("payment-backGround");
    paymnetBtnRight.classList.remove("payment-backGround");
    this.classList.add("payment-backGround");
    costChange.innerHTML = "800 manat";
    paymentFull.innerHTML = "4500 manat";
  } else {
    this.classList.add("payment-backGround");
  }
});

paymnetBtnRight.addEventListener("click", function (e) {
  e.preventDefault();
  if (
    paymentBtnLeft.classList.contains("payment-backGround") ||
    rightButton.classList.contains("payment-backGround")
  ) {
    this.classList.remove("payment-backGround");
    paymentBtnLeft.classList.remove("payment-backGround");
    this.classList.add("payment-backGround");
    costChange.innerHTML = "500 manat";
    paymentFull.innerHTML = "4400 manat";
  } else {
    this.classList.add("payment-backGround");
    console.log("curt");
  }
});



