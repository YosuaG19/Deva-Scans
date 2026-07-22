export default function BrowseFilterMobile() {

    const containers = document.querySelectorAll('.filter-container');

    if (!containers.length) return;

    function closeAllPopups() {
        containers.forEach(container => {
            const popup = container.querySelector('.filter-popup');
            popup?.classList.add('hidden');
        });
    }

    containers.forEach(container => {

        const button = container.querySelector('.filter-trigger');
        const popup = container.querySelector('.filter-popup');

        if (!button || !popup) return;

        const filterType = container.dataset.filter;

        const buttons = popup.querySelectorAll('.filter-button');
        const genreButtons = popup.querySelectorAll('.genre-button');

        const selectedGenres = new Set();

        // ---------- Genre ----------
        genreButtons.forEach(btn => {

            btn.addEventListener('click', () => {

                const value = btn.value;

                btn.classList.toggle('active');

                if (btn.classList.contains('active')) {
                    selectedGenres.add(value);
                } else {
                    selectedGenres.delete(value);
                }

                const label = container.querySelector('.total-genre-label');

                if (label) {

                    if (selectedGenres.size === 0) {
                        label.classList.add('hidden');
                        label.textContent = '';
                    } else {
                        label.classList.remove('hidden');
                        label.textContent = selectedGenres.size;
                    }
                }

            });

        });

        // ---------- Normal Filters ----------
        buttons.forEach(btn => {

            btn.addEventListener('click', () => {

                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const value = btn.value;


                switch (filterType) {

                    case 'timeline': {

                        const label = container.querySelector('.selected-sort-label');

                        if (label)
                            label.textContent = value;

                        break;
                    }

                    case 'status': {

                        const label = container.querySelector('.selected-status-label');

                        if (label) {

                            if (value === 'All') {
                                label.classList.add('hidden');
                            } else {
                                label.classList.remove('hidden');
                                label.textContent = value;
                            }

                        }

                        break;
                    }

                    case 'type': {

                        const label = container.querySelector('.selected-type-label');

                        if (label) {

                            if (value === 'All') {
                                label.classList.add('hidden');
                            } else {
                                label.classList.remove('hidden');
                                label.textContent = value;
                            }

                        }

                        break;
                    }

                }

                popup.classList.add('hidden');

            });

        });

        button.addEventListener('click', e => {

            e.stopPropagation();

            const opened = !popup.classList.contains('hidden');

            closeAllPopups();

            if (!opened)
                popup.classList.remove('hidden');

        });

        popup.addEventListener('click', e => e.stopPropagation());

    });

    document.addEventListener('click', closeAllPopups);

}