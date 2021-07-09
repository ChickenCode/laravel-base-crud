require('./bootstrap');

window.addEventListener("load", function() {
    const deleteForms = document.querySelectorAll(".delete_form")

    deleteForms.forEach(form => {
        form.addEventListener("submit", (event) => {
           
           if (!confirm("Sei sicuro di valer cancellare questo fumetto dal BD? l'operazione è irreversibile")) {
            event.preventDefault(); 
           }
        })
    })
})
