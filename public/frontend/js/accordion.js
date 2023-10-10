const accordion = document.getElementsByClassName("contentbx");
const contents = document.getElementsByClassName("content");
const labell = document.getElementsByClassName("label");

for (let i = 0; i < accordion.length; i++) {
  const helloo = document.querySelector(".hello");

  accordion[i].addEventListener("click", function () {
    // this.classList.toggle("border-bottom");

    helloo.classList.toggle("hello-transform");

    for (let h = 0; h < labell.length; h++) {
      labell[i].classList.toggle("border-bottom");
    }
    for (let j = 0; j < contents.length; j++) {
      contents[i].classList.toggle("content-active");
    }
  });
}

const items = document.querySelectorAll(".accordion-top button");

function toggleAccordion() {
  const itemToggle = this.getAttribute("aria-expanded");

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute("aria-expanded", "false");
  }

  if (itemToggle == "false") {
    this.setAttribute("aria-expanded", "true");
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));





const paymentInformation = document.querySelectorAll(".payment-information");

console.log(paymentInformation);

paymentInformation.forEach(element => {
    const imgclick = element.querySelector(".common-right")
    const commonDowns = element.querySelector(".common-downs");
    
   imgclick.addEventListener("click", function() {

    this.classList.toggle("common-right-active");
    commonDowns.classList.toggle("common-downs-active");

   })
    
});




