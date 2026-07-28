export default function ReactionSelection() {

    const forms = document.querySelectorAll(".reaction-form");
    if (!forms) return;
    
    forms.forEach(form => {

        const input = form.querySelector(".reaction-input");
        const buttons = form.querySelectorAll(".reaction-btn");

        buttons.forEach(button => {

            button.addEventListener("click", (e) => {
                e.preventDefault();

                input.value = button.value;

                buttons.forEach(btn => {
                    btn.classList.remove("active");

                    const img = btn.querySelector(".reaction-icon");
                    img.src = img.dataset.default;
                });

                button.classList.add("active");

                const img = button.querySelector(".reaction-icon");
                img.src = img.dataset.active;

                const formData = new FormData(form);

                fetch(form.action, {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .content,
                        "Accept": "application/json"
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    buttons.forEach(btn => {
                        const img = btn.querySelector(".reaction-icon");
                        if (btn.value === data.reaction) {
                            btn.classList.add("active");
                            img.src = img.dataset.active;
                        } else {
                            btn.classList.remove("active");
                            img.src = img.dataset.default;
                        }

                        const counter = btn.querySelector(".reaction-count");
                        counter.textContent = data.counts[btn.value] ?? 0;

                        const ttlCounter = document.querySelector(".ttl-reaction");
                        const totalReactions = Object.values(data.counts)
                            .reduce((sum, count) => sum + Number(count), 0);
                        ttlCounter.textContent = totalReactions + " reactions";
                    });
                })
                .catch(error => {
                    console.error(error);
                });

            });

        });

    });

}