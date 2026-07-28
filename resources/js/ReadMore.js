export default function ReadMore() {
    document.querySelectorAll('.toggle-desc').forEach(btn => {
        btn.addEventListener('click', () => {
            const container = btn.parentElement;
            const shortText = container.querySelector('.short-text');
            const fullText = container.querySelector('.full-text');

            const expanded = fullText.classList.toggle('hidden');

            shortText.classList.toggle('hidden', !expanded);

            btn.textContent = expanded ? 'Read more' : 'Show less';
        });
    });
}