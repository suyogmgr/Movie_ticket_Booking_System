document.addEventListener("DOMContentLoaded", function () {
    let accordions = document.querySelectorAll(".accordion");

    accordions.forEach(button => {
        button.addEventListener("click", function () {
            let panel = this.nextElementSibling;
            panel.style.display = panel.style.display === "block" ? "none" : "block";
        });
    });
});
