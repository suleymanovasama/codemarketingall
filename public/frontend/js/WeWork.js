const forJsBtn = document.querySelectorAll(".forjsbtn");
const forPanel = document.querySelectorAll(".right-one")
const panelArr = [...forPanel]
const btnArr = [...forJsBtn]

btnArr.forEach(btn => {
    btn.addEventListener("click", function(){
        const currentBtnActive = document.querySelectorAll(".forjsbtn.btnActive");
        const Hello = btn.querySelectorAll(".hello")
        const currentHello = document.querySelectorAll(".hello.cart")
        const btnattr = btn.getAttribute("data-for-panel");
        const dataPanelClass = document.getElementsByClassName("right-one");
        // var ibo;
        // for (let g = 0; g < dataPanelClass.length; g++) {
        //     if (dataPanelClass[g].getAttribute("data-panel-id") == btnattr) {
        //         ibo = btnattr
        //     } 
        // }
        // console.log(ibo);
        const currentActivePanel = document.querySelectorAll("right-one.ok");

        if (btn.classList.contains("btnActive")) {
            btn.classList.remove("btnActive");
            for (let x = 0; x < currentHello.length; x++) {
                currentHello[x].classList.remove("cart");
            }
        } else {

            for (let j = 0; j < Hello.length; j++) {
                Hello[j].classList.add("cart")
            }
            for (let i = 0; i < currentBtnActive.length; i++) {
                currentBtnActive[i].classList.remove("btnActive")
            }
            for (let h = 0; h < currentHello.length; h++) {
                currentHello[h].classList.remove("cart");
            }
            btn.classList.add("btnActive");
            for (let l = 0; l < currentActivePanel.length; l++) {
                currentActivePanel[l].classList.remove("ok");
            }

            for (let e = 0; e < dataPanelClass.length; e++) {
                
                if (dataPanelClass[e].getAttribute("data-panel-id") == btnattr) {
                    dataPanelClass[e].classList.add("ok")
                } else{
                    if ( dataPanelClass[e].classList.contains("ok")) {
                        dataPanelClass[e].classList.remove("ok")
                    }
                }

                
            }

            // if (btnattr === dataPanelId ) {
            //     for (let t = 0; t < dataPanelClass.length; t++) {
            //         dataPanelClass[t].classList.add("ok")
                    
            //     } 
            // }
            // if (btnattr === "first") {
            //     for (let t = 0; t < dataPanelClass.length; t++) {
            //                 dataPanelClass[t].classList.add("ok")
                            
            //             } 
            // }else{
            //     console.log('not ok');
            // }
        }

        


        
        
    })
})


btnArr.forEach(bttn => {
    
    // panelArr.forEach(panel => {
    //     console.log(panel.getAttribute("data-panel-id"));
    // })


})
