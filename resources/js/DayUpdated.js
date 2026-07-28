export default function DayUpdated() {
    const updateDay = document.querySelector('.update-day');
    const dayButtons = document.querySelectorAll('.day-btn');
    const contents = document.querySelectorAll('.update-content');

    if (!updateDay || !dayButtons.length || !contents.length) {
        return;
    }

    const day = new Date().getDay();
    const days_en = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
    const days_id = ['min', 'sen', 'sel', 'rab', 'kam', 'jum', 'sab'];

    dayButtons.forEach(button => {
        if (button.textContent.trim() === days_en[day] || button.textContent.trim() == days_id[day]) {
            button.classList.add('active');

            const selectedDay = button.dataset.day;

            contents.forEach(content => {
                content.classList.add('hidden');
            });

            
            document
                .querySelector(`.update-content[data-day="${selectedDay}"]`)
                ?.classList.remove('hidden');
        }
    });

    dayButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            dayButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            button.classList.add('active');

            contents.forEach(content => {
                content.classList.add('hidden');
            });

            // Show selected day
            const selectedDay = button.dataset.day;

            document
                .querySelector(`.update-content[data-day="${selectedDay}"]`)
                ?.classList.remove('hidden');
        });
    });
}