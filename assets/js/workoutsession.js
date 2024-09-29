const checkboxes = document.querySelectorAll('.exercise-checkbox');
const progressBar = document.getElementById('progress-bar');
const toast = document.querySelector(".toast");
const closeIcon = document.querySelector(".close");
const progress = document.querySelector(".progress");

let timer1, timer2;

function updateProgress() {
    // Count the number of checked checkboxes
    const checkedCount = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;

    // Calculate the width of the progress bar based on the checked count
    const width = (checkedCount / checkboxes.length) * 100;

    // Update the progress bar width
    progressBar.style.width = width + '%';

    // If progress bar is full, trigger the notification
    if (width === 100) {
        toast.classList.add("active");
        progress.classList.add("active");

        // Scroll to the top of the page
        window.scrollTo(0, 0);

        timer1 = setTimeout(() => {
            toast.classList.remove("active");
            // Redirect to session.html when the notification is gone
            window.location.href = "session.html";
        }, 5000); //1s = 1000 milliseconds

        timer2 = setTimeout(() => {
          progress.classList.remove("active");
        }, 5300);
    }
}

closeIcon.addEventListener("click", () => {
    toast.classList.remove("active");

    setTimeout(() => {
      progress.classList.remove("active");
    }, 300);

    clearTimeout(timer1);
    clearTimeout(timer2);
});