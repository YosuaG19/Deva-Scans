export default function LangSwitch(){
    async function changeLanguage(lang) {
        await fetch("/language", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .content,
                "Accept": "application/json"
            },
            body: JSON.stringify({
                language: lang
            })
        });

        location.reload();
    }

    const switcher = document.getElementById("lang-switch");
    const EN = document.getElementById("en");
    const ID = document.getElementById("id");
    const slider = document.getElementById("lang-slider");
    
    if (!EN && !ID && !slider) {
        // console.error('Swiper element not found');
        return;
    }
    
    let ENActive = switcher.dataset.locale === "en";

    function updateSwitch() {
        if (ENActive) {
            slider.style.transform = "translateX(0)";
            EN.classList.replace("text-white", "text-black");
            ID.classList.replace("text-black", "text-white");
        } else {
            slider.style.transform = "translateX(100%)";
            EN.classList.replace("text-black", "text-white");
            ID.classList.replace("text-white", "text-black");
        }
    }

    EN.addEventListener("click", async () => {
        ENActive = true;
        updateSwitch();

        await changeLanguage("en");
    });

    ID.addEventListener("click", async () => {
        ENActive = false;
        updateSwitch();

        await changeLanguage("id");
    });

    updateSwitch();
}