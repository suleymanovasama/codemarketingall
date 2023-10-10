const progPaymentLeft = document.querySelector(".prog-payment-left"); 
const progPaymentRight = document.querySelector(".prog-payment-right");

const progCost = document.querySelector(".prog-price");
const progFull = document.querySelector(".prog-full");

progPaymentLeft.addEventListener("click", function(e) {
    e.preventDefault();
    if (
      progPaymentLeft.classList.contains("payment-backGround") ||
      rightButton.classList.contains("payment-backGround")
    ) {
      this.classList.remove("payment-backGround");
      progPaymentLeft.classList.remove("payment-backGround");
      this.classList.add("payment-backGround");
      progCost.innerHTML = "600 manat";
      progFull.innerHTML = "3900 manat";
    } else {
      this.classList.add("payment-backGround");
    }
  })
  
  progPaymentRight.addEventListener("click", function(e) {
    e.preventDefault();
    if (
      progPaymentRight.classList.contains("payment-backGround") ||
      rightButton.classList.contains("payment-backGround")
    ) {
      this.classList.remove("payment-backGround");
      progPaymentRight.classList.remove("payment-backGround");
      this.classList.add("payment-backGround");
      progCost.innerHTML = "475 manat";
      progFull.innerHTML = "4100 manat";
    } else {
      this.classList.add("payment-backGround");
    }
  
  })