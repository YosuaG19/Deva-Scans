export default function RatingPanel(){
    const btn = document.querySelector('.btn-rating');
    const btn_close = document.querySelector('.rating-close');
    const panel = document.querySelector('.rating-form');

    if (!btn && !panel) return;

    btn.addEventListener("click", ()=>{
        panel.classList.toggle('hidden');
    });

    btn_close.addEventListener("click", ()=>{
        panel.classList.toggle('hidden');
    });
}