export default function Navbar() {
    const hamburgerBtn = document.querySelector('.hamburger');
    const navbarPop = document.querySelector('.navbar-pop');

    if (!hamburgerBtn || !navbarPop) return;

    hamburgerBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        navbarPop.classList.toggle('hidden');
        hamburgerBtn.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (
            !navbarPop.contains(e.target) &&
            !hamburgerBtn.contains(e.target)
        ) {
            hamburgerBtn.classList.remove('active');
            navbarPop.classList.add('hidden');
        }
    });
}