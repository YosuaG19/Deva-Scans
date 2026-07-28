export default function LikeDislikedComment() {
    const container = document.getElementById("comments-container");

    if (!container) return;

    const comments = container.querySelectorAll(".comment");

    comments.forEach(comment => {
        const likeBtn = comment.querySelector(".like-btn");
        const dislikeBtn = comment.querySelector(".dislike-btn");

        if (!likeBtn || !dislikeBtn) return;

        function toggleReaction(button, otherButton) {
            if (button.classList.contains("active")) {
                button.classList.remove("active");
            } else {
                button.classList.add("active");
                otherButton.classList.remove("active");
            }
        }

        likeBtn.addEventListener("click", () => {
            toggleReaction(likeBtn, dislikeBtn);
        });

        dislikeBtn.addEventListener("click", () => {
            toggleReaction(dislikeBtn, likeBtn);
        });
    });
}