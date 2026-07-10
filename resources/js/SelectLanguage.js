export default function SelectLanguage() {

    const button = document.getElementById("select-language");
    const dropdown = document.querySelector(".filter-language");

    if (!button || !dropdown) return;

    const text = document.getElementById("selected-language-text");
    const hiddenInput = document.getElementById("selected-language");
    const options = dropdown.querySelectorAll(".filter-button");

    // Open / Close
    button.addEventListener("click", (e) => {
        e.stopPropagation();
        dropdown.classList.toggle("hidden");
    });

    // Select language
    options.forEach(option => {

        option.addEventListener("click", () => {

            options.forEach(btn => btn.classList.remove("active"));
            option.classList.add("active");

            const language = option.value;

            if (text)
                text.textContent = language;

            if (hiddenInput)
                hiddenInput.value = language;

            dropdown.classList.add("hidden");
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