export default function ProfilePicSelection() {
    const ppSelection = document.querySelectorAll('.pp_selection');
    const input = document.getElementById('pp_path');

    if (!ppSelection.length) return;

    ppSelection.forEach(btn => {
        btn.addEventListener('click', () => {

            // Remove selection from all buttons
            ppSelection.forEach(item => {
                item.classList.remove('border-[#FFD700]');
                item.classList.add('border-transparent');
            });

            // Select clicked button
            btn.classList.remove('border-transparent');
            btn.classList.add('border-[#FFD700]');

            // Update hidden input
            if (input) {
                input.value = btn.value;
            }
        });
    });
}