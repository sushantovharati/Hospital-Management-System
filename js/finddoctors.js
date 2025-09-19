document.querySelectorAll(".book-btn").forEach(button => {
    button.addEventListener("click", function () {
        window.location.href = "bookAppointment.php";
    });
});