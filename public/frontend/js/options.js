const optionSide = document.querySelectorAll(".option-side");
const optionSideArr = [...optionSide]


optionSideArr.forEach(options => {
    
    options.addEventListener("click", function(e) {
        // e.preventDefault();
        // e.stopImmediatePropagation();
        const currentActive = document.querySelectorAll('.option-side.active');

        if (options.classList.contains("active")  ) {

            options.classList.remove("active"); 

        } else {

            for (let i = 0; i < currentActive.length; i++) {
                currentActive[i].classList.remove("active");
            }

            options.classList.add("active");
        }  
       
    })
})