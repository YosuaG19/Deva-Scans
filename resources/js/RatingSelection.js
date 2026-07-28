export default function RatingSelection() {

    const form = document.querySelector(".rating-form");

    if (!form) return;

    const input = form.querySelector(".rating-input");
    const buttons = form.querySelectorAll(".rating-btn");

    buttons.forEach(button => {

        button.addEventListener("click", e => {
            
            e.preventDefault();
            console.log("clicked", button.value);
            input.value = button.value;

            const formData = new FormData(form);

            fetch(form.action, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]').content,
                    "Accept": "application/json"
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                buttons.forEach(btn => {
                    btn.classList.remove('active');
                });

                if (data.action){
                    buttons.forEach(btn=>{
                        if (btn.value == data.rate){
                            btn.classList.add('active');
                        }
                    });
                }
                document.querySelector('.rating-average').textContent = '★ ' + data.average;
                document.querySelector('.rating-count').textContent = '('+data.count+')';
            });

        });

    });

}