export default function DayUpdated() {
    const updateDay = document.querySelector('.update-day');
    const dayButtons = document.querySelectorAll('.day-btn');

    if (!updateDay || !dayButtons.length) {
        return;
    }

    const day = new Date().getDay();
    const days_en = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    const days_id = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];

    dayButtons.forEach(button => {
        if (button.textContent.trim() === days_en[day] || button.textContent.trim() == days_id[day]) {
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