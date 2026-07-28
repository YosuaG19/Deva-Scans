export default function ForumFilter(){
    const newest = document.getElementById("newest");
    const oldest = document.getElementById("oldest");
    const slider = document.getElementById("slider");
    const container = document.getElementById("comments-container");

    if (!newest && !oldest && !slider && !container) {
        // console.error('Swiper element not found');
        return;
    }

    let newestActive = true;

    function sortComments(newest = true) {
        const comments = [...container.querySelectorAll(".comment")];

        comments.sort((a, b) => {
            const dateA = Number(a.dataset.created);
            const dateB = Number(b.dataset.created);

            return newest
                ? dateB - dateA
                : dateA - dateB;
        });

        comments.forEach(comment => container.appendChild(comment));
    }

    sortComments(true);

    function updateSwitch() {
        if (newestActive) {
            slider.style.transform = "translateX(0)";
            newest.classList.replace("text-white", "text-black");
            oldest.classList.replace("text-black", "text-white");
        } else {
            slider.style.transform = "translateX(100%)";
            newest.classList.replace("text-black", "text-white");
            oldest.classList.replace("text-white", "text-black");
        }
    }

    newest.addEventListener("click", () => {
        newestActive = true;
        updateSwitch();
        sortComments(true);
    });

    oldest.addEventListener("click", () => {
        newestActive = false;
        updateSwitch();
        sortComments(false);
    });

    updateSwitch();
}