document.addEventListener("DOMContentLoaded", function () {

    const btnAnswer = document.getElementById("btnAnswer");
    const btnView = document.getElementById("btnView");
    const btnBack = document.getElementById("btnBack");
    const closeModalBtn = document.getElementById("closeModalBtn");


    btnAnswer.addEventListener("click", function () {
        document.getElementById("modalAnswer").classList.remove("oculto");
        document.getElementById("modalBody").classList.add("oculto");
        document.getElementById("btnBack").classList.remove("oculto");
        document.getElementById("btnAnswer").classList.add("oculto");

    });

    btnView.addEventListener("click", function () {
        document.getElementById("modalBody").classList.remove("oculto");
        // document.getElementById("btnBack").classList.add("oculto");
        // document.getElementById("btnAnswer").classList.remove("oculto");

    });
    btnBack.addEventListener("click",function(){
        document.getElementById("modalAnswer").classList.add("oculto");
        document.getElementById("modalBody").classList.remove("oculto");
        document.getElementById("btnBack").classList.add("oculto"); 
        document.getElementById("btnAnswer").classList.remove("oculto");
    })

    closeModalBtn.addEventListener("click", function() {
        document.getElementById("modalBody").classList.remove("oculto");
        document.getElementById("modalAnswer").classList.add("oculto");
        document.getElementById("btnBack").classList.add("oculto"); 
        document.getElementById("btnAnswer").classList.remove("oculto");
        modal.style.display = "none";
      });
});