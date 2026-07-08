export default function BrowseFilter() {
    const filters = [
        {
            button: document.getElementById('timeline-btn'),
            popup: document.querySelector('.filter-timeline')
        },
        {
            button: document.getElementById('chapters-btn'),
            popup: document.querySelector('.filter-chapter')
        },
        {
            button: document.getElementById('genre-btn'),
            popup: document.querySelector('.filter-genre')
        },
        {
            button: document.getElementById('status-btn'),
            popup: document.querySelector('.filter-status')
        },
        {
            button: document.getElementById('type-btn'),
            popup: document.querySelector('.filter-type')
        }
    ];

    if (!filters.every(filter => filter.button && filter.popup)) {
        return;
    }

    console.log(filters);

    function closeAllPopups() {
        filters.forEach(filter => {
            filter.popup.classList.add('hidden');
        });
    }

    filters.forEach(filter => {
        const buttons = filter.popup.querySelectorAll('.filter-button');
        const genreButtons = filter.popup.querySelectorAll('.genre-button');

        const genreCountLabel = document.querySelector('.total-genre-label');

        const selectedGenres = new Set();

        genreButtons.forEach(button => {
            button.addEventListener('click', () => {

                const value = button.value;

                button.classList.toggle('active');

                if (button.classList.contains('active')) {
                    selectedGenres.add(value);
                } else {
                    selectedGenres.delete(value);
                }

                // update count UI
                const count = selectedGenres.size;
                console.log(count)

                if (count === 0){
                    genreCountLabel.classList.add('hidden');
                    genreCountLabel.textContent = '';
                }else{
                    genreCountLabel.classList.remove('hidden')
                    genreCountLabel.textContent = `${count}`;
                }

                console.log([...selectedGenres]);
            });
        });

        
        buttons.forEach(button => {
            button.addEventListener('click', () => {

                // active logic ONLY inside this popup
                buttons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const selectedFilter = button.value;
                console.log(filter.button.id)
                
                if (filter.button.id === 'timeline-btn') {
                    const selectedLabel = document.querySelector('.selected-sort-label');
                    selectedLabel.textContent = selectedFilter;
                }else if (filter.button.id === 'type-btn') {
                    const selectedLabel = document.querySelector('.selected-type-label');
                    if (selectedFilter !== 'All'){
                        selectedLabel.classList.remove('hidden');
                        selectedLabel.textContent = `${selectedFilter}`;
                    }else{
                        selectedLabel.classList.add('hidden');
                    }
                }else if (filter.button.id === 'status-btn') {
                    const selectedLabel = document.querySelector('.selected-status-label');
                    if (selectedFilter !== 'All'){
                        selectedLabel.classList.remove('hidden');
                        selectedLabel.textContent = `${selectedFilter}`;
                    }else{
                        selectedLabel.classList.add('hidden');
                    }
                }else if (filter.button.id === 'chapter-btn'){
                    const chapterForm = document.querySelector('.min-chapter-form');
                    const chapterInput = document.querySelector('.min-chapter-input');
                    const chapterLabel = document.querySelector('.min-chapter-label');

                    chapterForm.addEventListener('submit', (e) => {
                        e.preventDefault();

                        const value = chapterInput.value.trim();

                        if (!value) {
                            chapterLabel.textContent = 'Minimum Chapters';
                        } else {
                            chapterLabel.textContent = `Minimum Chapters: ${value}+`;
                        }

                        filter.popup.classList.add('hidden');
                    });
                }

                console.log(filter.button.id, selectedFilter);

                // close ONLY this popup
                filter.popup.classList.add('hidden');
            });
        });

        filter.button.addEventListener('click', (e) => {
            e.stopPropagation();

            const isOpen = !filter.popup.classList.contains('hidden');

            closeAllPopups();

            if (!isOpen) {
                filter.popup.classList.remove('hidden');
            }
        });

        filter.popup.addEventListener('click', (e) => {
            e.stopPropagation();
        });

        document.addEventListener('click', () => {
            closeAllPopups();
        });
    });
}