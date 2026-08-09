export default function Selectday() {

    const button = document.getElementById("select-day");
    const dropdown = document.querySelector(".filter-day");

    if (!button || !dropdown) return;

    const text = document.getElementById("selected-day-text");
    const hiddenInput = document.getElementById("selected-day");
    const options = dropdown.querySelectorAll(".filter-button");

    options.forEach(option => {
        if (option.classList.contains("active")) {
            if (text)
                text.textContent = option.textContent.trim();

            if (hiddenInput)
                hiddenInput.value = option.value;
        }
    })

    // Open / Close
    button.addEventListener("click", (e) => {
        e.stopPropagation();
        dropdown.classList.toggle("hidden");
    });

    // Select day
    options.forEach(option => {

        option.addEventListener("click", () => {

            options.forEach(btn => btn.classList.remove("active"));
            option.classList.add("active");

            const day = option.value;


            if (text)
                text.textContent = option.textContent.trim();

            if (hiddenInput)
                hiddenInput.value = day;

            dropdown.classList.add("hidden");

            console.log(hiddenInput);
        });
    });

    // Click outside
    document.addEventListener("click", (e) => {

        if (
            !dropdown.contains(e.target) &&
            !button.contains(e.target)
        ) {
            dropdown.classList.add("hidden");
        }

    });

}