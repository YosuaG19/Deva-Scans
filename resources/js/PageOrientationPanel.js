export default function PageOrientationPanel() {
    const button = document.getElementById('pageOrientationBtn');
    const panel = document.getElementById('pageOrientationPanel');

    if (!panel || !button) return;

    button.addEventListener('click', (e) => {
        e.stopPropagation();
        panel.classList.toggle('hidden');
    });

    panel.addEventListener('click', (e) => {
        e.stopPropagation();
    });

    document.addEventListener('click', () => {
        panel.classList.add('hidden');
    });
}