export default function BrowseFilter() {

    const containers = document.querySelectorAll('.filter-container');

    if (!containers.length) return;

    let genreChanged = false;
    let genreForm = null;

    function closeAllPopups(except = null) {

        containers.forEach(container => {

            if (container === except) return;

            container.querySelector('.filter-popup')?.classList.add('hidden');

        });

    }

    containers.forEach(container => {

        const trigger = container.querySelector('.filter-trigger');
        const popup = container.querySelector('.filter-popup');

        if (!trigger || !popup) return;

        // Find the form this filter belongs to
        const form = container.closest('form');

        const filterType = container.dataset.filter;

        // ===========================
        // Open popup
        // ===========================

        trigger.addEventListener('click', e => {

            e.stopPropagation();

            // Submit genre before opening another filter
            if (
                genreChanged &&
                genreForm &&
                genreForm !== form
            ) {
                genreChanged = false;
                genreForm.submit();
                return;
            }

            const opened = !popup.classList.contains('hidden');

            closeAllPopups(container);

            popup.classList.toggle('hidden', opened);

        });

        popup.addEventListener('click', e => e.stopPropagation());

        // ===========================
        // Inputs
        // ===========================

        popup.querySelectorAll('input').forEach(input => {

            const label = input.closest('label');

            if (input.checked) {
                label?.classList.add('active');
            }

            input.addEventListener('change', () => {

                // -----------------------
                // Radio
                // -----------------------

                if (input.type === 'radio') {

                    popup
                        .querySelectorAll('label')
                        .forEach(l => l.classList.remove('active'));

                    label?.classList.add('active');

                }

                // -----------------------
                // Checkbox
                // -----------------------

                if (input.type === 'checkbox') {

                    label?.classList.toggle(
                        'active',
                        input.checked
                    );

                }

                // -----------------------
                // Genre counter
                // -----------------------

                if (filterType === 'genre') {

                    const checked = popup.querySelectorAll(
                        'input[name="genre[]"]:checked'
                    );

                    const badge =
                        container.querySelector('.total-genre-label');

                    if (badge) {

                        if (checked.length) {

                            badge.classList.remove('hidden');
                            badge.textContent = checked.length;

                        } else {

                            badge.classList.add('hidden');
                            badge.textContent = '';

                        }

                    }

                }

                // -----------------------
                // Submit
                // -----------------------

                if (filterType === 'genre') {

                    genreChanged = true;
                    genreForm = form;

                } else {

                    closeAllPopups();

                    form.submit();

                }

            });

        });

    });

    // ===========================
    // Click outside
    // ===========================

    document.addEventListener('click', () => {

        closeAllPopups();

        if (genreChanged && genreForm) {

            genreChanged = false;

            genreForm.submit();

        }

    });

    // ===========================
    // Search
    // ===========================

    document.querySelectorAll('form').forEach(form => {

        const search = form.querySelector('#search-series');

        if (!search) return;

        let timeout;

        search.addEventListener('input', () => {

            clearTimeout(timeout);

            timeout = setTimeout(() => {

                form.submit();

            }, 500);

        });

    });

}