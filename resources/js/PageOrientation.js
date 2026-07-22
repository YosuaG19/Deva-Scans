export default function PageOrientation() {

    const panels = document.querySelectorAll(".panel");
    const buttons = document.querySelectorAll(".orientation-btn");
    const reader = document.getElementById("reader")

    if (!panels.length) return;

    let orientation = localStorage.getItem("orientation") || "vertical";

    let hintTimeout;

    function showNavigationHint() {
        const hints = document.querySelectorAll(".prevPanel, .nextPanel");
        clearTimeout(hintTimeout);  

        if (orientation === "vertical") {

            hints.forEach(hint => {
                hint.classList.remove("opacity-100");
                hint.classList.remove("cursor-pointer")
                hint.classList.add("opacity-0");
            });

            return;
        }

        hints.forEach(hint=>{
            hint.classList.remove("opacity-0");
            hint.classList.add("opacity-100");
            hint.classList.add("cursor-pointer");
        })

        hintTimeout = setTimeout(() => {

            hints.forEach(hint => {
                hint.classList.remove("opacity-100");
                hint.classList.add("opacity-0");
            });

        }, 2500);   // visible for 2.5 seconds

    }

    // Start from the correct page
    let currentPanel = 0;

    function showPanel(index) {

        panels.forEach((panel, i) => {

            if (orientation === "vertical") {
                panel.classList.remove("hidden");
            } else {
                panel.classList.toggle("hidden", i !== index);
            }

        });

    }

    function updateNavigationLabels() {
        document.querySelectorAll(".panel").forEach(panel => {
            const prev = panel.querySelector(".prevPanel");
            const next = panel.querySelector(".nextPanel");

            if (orientation === "horizontal-western") {
                reader.classList.remove("flex-col");
                prev.textContent = "Prev";
                next.textContent = "Next";

            }
            else if (orientation === "horizontal-japan") {
                reader.classList.remove("flex-col")
                prev.textContent = "Next";
                next.textContent = "Prev";

            }
            else {
                reader.classList.add("flex-col");
                prev.textContent = "";
                next.textContent = "";

            }

        });

    }

    function applyOrientation(mode) {

        const previousMode = orientation;
        orientation = mode;

        localStorage.setItem("orientation", mode);

        // Only reset when switching FROM vertical
        if (previousMode === "vertical") {

            currentPanel = 0;
        }

        buttons.forEach(btn => {

            const active = btn.dataset.orientation === mode;

            btn.classList.toggle("bg-[#FFD700]", active);
            btn.classList.toggle("text-black", active);

        });

        showPanel(currentPanel);

    }

    function go(direction) {

        if (orientation === "vertical") return;

        if (orientation === "horizontal-western") {
            currentPanel += direction;
        } else {
            currentPanel -= direction;
        }

        currentPanel = Math.max(
            0,
            Math.min(currentPanel, panels.length - 1)
        );

        showPanel(currentPanel);
        
    }

    // Orientation buttons
    buttons.forEach(button => {

        button.addEventListener("click", (e) => {

            e.stopPropagation();

            applyOrientation(button.dataset.orientation);
            updateNavigationLabels();
            showNavigationHint();

        });

    });

    // Click zones
    panels.forEach(panel => {

        panel.querySelector(".prevPanel")?.addEventListener("click", (e) => {
            e.stopPropagation();
            go(-1);
        });

        panel.querySelector(".nextPanel")?.addEventListener("click", (e) => {
            e.stopPropagation();
            go(1);
        });

    });

    applyOrientation(orientation);
    updateNavigationLabels();
    showNavigationHint();

}