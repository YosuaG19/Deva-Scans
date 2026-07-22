export default function MobileFilter(){
    const openBtn = document.getElementById("mobile-filter-btn");
    const panel = document.getElementById("mobile-filter-panel");
    const backdrop = document.getElementById("mobile-filter-backdrop");

    if (!openBtn && !panel && !backdrop){
        return
    }

    function openFilter() {
        panel.classList.remove("translate-y-full");
        backdrop.classList.remove("hidden");
        document.body.classList.add("overflow-hidden");
    }

    function closeFilter() {
        panel.classList.add("translate-y-full");

        setTimeout(() => {
            backdrop.classList.add("hidden");
        }, 300);

        document.body.classList.remove("overflow-hidden");
    }

    openBtn.addEventListener("click", openFilter);
    backdrop.addEventListener("click", closeFilter);
}