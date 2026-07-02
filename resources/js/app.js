    // import './bootstrap';
    // import 'bootstrap/dist/js/bootstrap.min.js';
    import Swiper from 'swiper';
    import { Autoplay } from 'swiper/modules';
    import 'swiper/css';

    new Swiper('.mySwiper', {
        modules: [Autoplay],
        slidesPerView: 'auto',
        centeredSlides: true,
        slideToClickedSlide: true,
        loop: true,
        loopAdditionalSlides: 5,

        speed: 800,

        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },

        freeMode: true,
        freeModeMomentum: false,

        grabCursor: true,
    });

    document.querySelectorAll('.swiper-slide').forEach((slide) => {

        slide.addEventListener('click', () => {

            // kalau belum active
            if (!slide.classList.contains('swiper-slide-active')) {

                swiper.slideToLoop(
                    slide.dataset.swiperSlideIndex
                );

                return;
            }

            // kalau sudah active
            window.location.href = slide.dataset.url;
        });

    });

    document.addEventListener('DOMContentLoaded', () => {
        const hamburgerBtn = document.querySelector('.hamburger');
        const navbarPop = document.querySelector('.navbar-pop');
        
        hamburgerBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            navbarPop.classList.toggle('hidden');
            hamburgerBtn.classList.toggle('active');
        });
        
        document.addEventListener('click', (e) => {
            if (
                !navbarPop.contains(e.target) &&
                !hamburgerBtn.contains(e.target)
            ) {
                hamburgerBtn.classList.remove('active');
                navbarPop.classList.add('hidden');

            }
        });
        
        const updateDay = document.querySelector('.update-day');
        const dayButtons = document.querySelectorAll('.day-btn');

        const day = new Date().getDay();
        const days = window.days;

        dayButtons.forEach(button => {
            if (button.textContent.trim() === days[day]) {
                button.classList.add('active');
            }
        });

        dayButtons.forEach(button => {
            button.addEventListener('click', () => {
                dayButtons.forEach(btn => {
                    btn.classList.remove('active');
                });
                button.classList.add('active');
            });
        });

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
    });
