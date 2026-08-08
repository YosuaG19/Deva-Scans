export default function SelectGenre() {

    const button = document.getElementById("select-genre");
    const dropdown = document.querySelector(".filter-genre");

    if (!button || !dropdown) return;

    const text = document.getElementById("selected-genres-text");
    const hiddenInput = document.getElementById("selected-genres");

    const genreButtons = dropdown.querySelectorAll(".genre-button");

    let selectedGenres = [];

    genreButtons.forEach(btn => {
        if (btn.classList.contains("active")) {
            selectedGenres.push(btn.value.trim());
        }
    });

    // Update the UI
    text.textContent = selectedGenres.length
        ? selectedGenres.join(", ")
        : "Select Comic Genre";

    hiddenInput.value = JSON.stringify(selectedGenres);

    // Open dropdown
    button.addEventListener("click", (e) => {
        e.stopPropagation();
        dropdown.classList.toggle("hidden");
    });

    // Select genre
    genreButtons.forEach(btn => {

        btn.addEventListener("click", () => {

            const genre = btn.value.trim();

            if (selectedGenres.includes(genre)) {

                selectedGenres = selectedGenres.filter(g => g !== genre);
                btn.classList.remove("active");

            } else {

                selectedGenres.push(genre);
                btn.classList.add("active");

            }

            if (selectedGenres.length === 0) {

                text.textContent = "Select Comic Genre";

            } else {

                text.textContent = selectedGenres.join(", ");

            }

            hiddenInput.value = JSON.stringify(selectedGenres);
            console.log(hiddenInput);

        });

    });

    // Close dropdown
    document.addEventListener("click", (e) => {

        if (
            !button.contains(e.target) &&
            !dropdown.contains(e.target)
        ) {
            dropdown.classList.add("hidden");
        }

    });

}