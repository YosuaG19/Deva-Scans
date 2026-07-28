export default function CommentCharCounter() {
    const forms = document.querySelectorAll("form");

    forms.forEach(form => {
        const textarea = form.querySelector(".comment-input");
        const counter = form.querySelector(".comment-counter");

        if (!textarea || !counter) return;

        function updateCounter() {
            counter.textContent = `${textarea.value.length}/200`;
        }

        textarea.addEventListener("input", updateCounter);

        updateCounter();
    });
}