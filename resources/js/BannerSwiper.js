import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';
import 'swiper/css';

export default function initBannerSwiper() {
    const swiper = document.querySelector('.mySwiper')

    if (!swiper) {
        // console.error('Swiper element not found');
        return;
    }

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
            if (!slide.classList.contains('swiper-slide-active')) {
                swiper.slideToLoop(
                    slide.dataset.swiperSlideIndex
                );
                return;
            }
            window.location.href = slide.dataset.url;
        });
    });
}