const leftButton = document.querySelector(".left-button")
const rightButton = document.querySelector(".right-button")

leftButton.addEventListener("click", function(e){
    e.preventDefault();
    if (rightButton.classList.contains("backGroundColor") || rightButton.classList.contains("backGroundColor")) {
        this.classList.remove("backGroundColor")
        rightButton.classList.remove("backGroundColor")
        this.classList.add("backGroundColor");
    }else{
        this.classList.add("backGroundColor");
    }
})

rightButton.addEventListener("click", function(e){
    e.preventDefault();
    console.log("cart");
    if (leftButton.classList.contains("backGroundColor") || rightButton.classList.contains("backGroundColor")) {
        this.classList.remove("backGroundColor")
        leftButton.classList.remove("backGroundColor")
        this.classList.add("backGroundColor");
    }else{
        this.classList.add("backGroundColor");
    }
})

const paymentBtnLeft = document.querySelector(".payment-button-left");
const paymnetBtnRight = document.querySelector(".payment-button-right");

paymentBtnLeft.addEventListener("click", function(e) {
    e.preventDefault();
    if (paymnetBtnRight.classList.contains("payment-backGround") || rightButton.classList.contains("payment-backGround")) {
        this.classList.remove("payment-backGround")
        paymnetBtnRight.classList.remove("payment-backGround")
        this.classList.add("payment-backGround");
    }else{
        this.classList.add("payment-backGround");
    }
})

paymnetBtnRight.addEventListener("click", function(e) {
    e.preventDefault();
    if (paymentBtnLeft.classList.contains("payment-backGround") || rightButton.classList.contains("payment-backGround")) {
        this.classList.remove("payment-backGround")
        paymentBtnLeft.classList.remove("payment-backGround")
        this.classList.add("payment-backGround");
    }else{
        this.classList.add("payment-backGround");
    }
})
