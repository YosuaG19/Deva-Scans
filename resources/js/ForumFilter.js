export default function ForumFilter(){
    const newest = document.getElementById("newest");
    const oldest = document.getElementById("oldest");
    const slider = document.getElementById("slider");

    if (!newest && !oldest && !slider) {
        // console.error('Swiper element not found');
        return;
    }

    let newestActive = true;

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
    });

    oldest.addEventListener("click", () => {
        newestActive = false;
        updateSwitch();
    });

    updateSwitch();
}