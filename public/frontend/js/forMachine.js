const machFull = document.querySelector(".machine-full"); 
const machPart = document.querySelector(".machine-part");

const machCost = document.querySelector(".mach-cost");
const machFullPrice = document.querySelector(".mach-full");

machFull.addEventListener("click", function(e) {
    e.preventDefault();
    if (
      machFull.classList.contains("payment-backGround") ||
      rightButton.classList.contains("payment-backGround")
    ) {
      this.classList.remove("payment-backGround");
      machFull.classList.remove("payment-backGround");
      this.classList.add("payment-backGround");
      machCost.innerHTML = " 916 manat";
      machFullPrice.innerHTML = "5000 manat​";
    } else {
      this.classList.add("payment-backGround");
    }
})
  
machPart.addEventListener("click", function(e) {
    e.preventDefault();
    if (
        machPart.classList.contains("payment-backGround") ||
        rightButton.classList.contains("payment-backGround")
    ) {
      this.classList.remove("payment-backGround");
      machPart.classList.remove("payment-backGround");
      this.classList.add("payment-backGround");
      machCost.innerHTML = "675 manat";
      machFullPrice.innerHTML = "4900 manat";
    } else {
      this.classList.add("payment-backGround");
    }
  
})