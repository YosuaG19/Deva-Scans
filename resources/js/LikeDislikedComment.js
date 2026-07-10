export default function LikeDislikedComment(){
    const likeBtn = document.getElementById("like-btn");
    const dislikeBtn = document.getElementById("dislike-btn");

    if (!likeBtn && !dislikeBtn){
        return
    }

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
}