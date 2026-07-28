export default function ChapterListPanel() {
    const button = document.getElementById('ch-list-btn');
    const list = document.getElementById('ch-list');

    if (!button || !list) return;

    button.addEventListener('click', (e) => {
        e.stopPropagation();
        list.classList.toggle('hidden');
    });

    list.addEventListener('click', (e) => {
        e.stopPropagation();
    });

    document.addEventListener('click', () => {
        list.classList.add('hidden');
    });
}