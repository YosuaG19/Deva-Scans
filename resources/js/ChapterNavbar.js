export default function ChapterNavbar() {
    const reader = document.getElementById('reader');
    const topControls = document.getElementById('topControls');
    const bottomControls = document.getElementById('bottomControls');

    if (!reader || !topControls || !bottomControls) {
        return;
    }

    let controlsVisible = false;

    function showControls() {
        controlsVisible = true;

        [topControls, bottomControls].forEach(el => {
            el.classList.remove('hidden', 'pointer-events-none', 'z-30');
            el.classList.add('flex', 'z-30');
        });
    }

    function hideControls() {
        controlsVisible = false;

        [topControls, bottomControls].forEach(el => {
            el.classList.remove('flex', 'z-30');
            el.classList.add('hidden', 'pointer-events-none', 'z-0');
        });
    }

    // Click anywhere in reader
    reader.addEventListener('click', () => {
        if (controlsVisible) {
            hideControls();
        } else {
            showControls();
        }
    });

    // Hide when scrolling
    window.addEventListener('scroll', () => {
        if (controlsVisible) {
            hideControls();
        }
    });

    // Hide when swiping/touching
    let touchStartY = 0;

    window.addEventListener('touchstart', e => {
        touchStartY = e.touches[0].clientY;
    });

    window.addEventListener('touchmove', e => {
        const touchEndY = e.touches[0].clientY;

        if (Math.abs(touchEndY - touchStartY) > 10) {
            hideControls();
        }
    });

    topControls.addEventListener('click', e => {
        e.stopPropagation();
    });

    bottomControls.addEventListener('click', e => {
        e.stopPropagation();
    });
}