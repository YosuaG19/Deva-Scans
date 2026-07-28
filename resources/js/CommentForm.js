export default function CommentForm() {

    const forms = document.querySelectorAll(".comment-form");

    if (!forms) return;
    
    forms.forEach(form => {
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            

            fetch(form.action, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                    "Accept": "application/json"
                },
                body: new FormData(form)
            })
            .then(res => res.json())
            .then(data => {
                if (!data.success) return;
                const container = document.getElementById("comments-container");
                container.insertAdjacentHTML("afterbegin", data.html);

                const count = document.getElementById("comment-count");
                count.textContent = `${container.children.length} Comments`;

                form.reset();

                const counter = form.querySelector(".comment-counter");
                counter.textContent = "0/200";
            });
        });
    });
}