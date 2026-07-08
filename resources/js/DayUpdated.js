export default function DayUpdated() {
    const updateDay = document.querySelector('.update-day');
    const dayButtons = document.querySelectorAll('.day-btn');

    if (!updateDay || !dayButtons.length) {
        return;
    }

    const day = new Date().getDay();
    const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    dayButtons.forEach(button => {
        if (button.textContent.trim() === days[day]) {
            button.classList.add('active');
        }
    });

    dayButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            dayButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            button.classList.add('active');
        });
    });
}