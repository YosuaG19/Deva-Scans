export default function AddChapterPanel() {
    const dropZone = document.getElementById("panel-zone");

    if (!dropZone) {
        // console.error('Swiper element not found');
        return;
    }

    dropZone.addEventListener("drop", dropHandler);
    window.addEventListener("drop", (e) => {
    if ([...e.dataTransfer.items].some((item) => item.kind === "file")) {
        e.preventDefault();
    }
    });
    dropZone.addEventListener("dragover", (e) => {
    const fileItems = [...e.dataTransfer.items].filter(
        (item) => item.kind === "file",
    );
    if (fileItems.length > 0) {
        e.preventDefault();
        if (fileItems.some((item) => item.type.startsWith("image/"))) {
        e.dataTransfer.dropEffect = "copy";
        } else {
        e.dataTransfer.dropEffect = "none";
        }
    }
    });

    window.addEventListener("dragover", (e) => {
    const fileItems = [...e.dataTransfer.items].filter(
        (item) => item.kind === "file",
    );
    if (fileItems.length > 0) {
        e.preventDefault();
        if (!dropZone.contains(e.target)) {
        e.dataTransfer.dropEffect = "none";
        }
    }
    });
    const preview = document.getElementById("preview");

    function updatePanelNumbers() {
        document.querySelectorAll(".img-panel").forEach((panel, index) => {
            panel.querySelector(".num-panel").textContent = index + 1;
        });
    }

    function displayImages(files) {
    for (const file of files) {
        if (file.type.startsWith("image/")) {
        const div = document.createElement("div");
        const img = document.createElement("img");
        const numbering = document.createElement("span");
        const deleteBtn = document.createElement("button");
        numbering.textContent = preview.childElementCount;
        numbering.className = "num-panel";
        deleteBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#ffffff"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm80-160h80v-360h-80v360Zm160 0h80v-360h-80v360Z"/></svg>';
        deleteBtn.className = "del-panel-btn";

        deleteBtn.addEventListener("click", () => {
            div.remove();
            updatePanelNumbers();
        });

        img.src = URL.createObjectURL(file);
        img.alt = file.name;
        img.width = 400;
        img.height = 600;
        img.className = "comic-cover";
        div.appendChild(img);
        div.appendChild(numbering);
        div.appendChild(deleteBtn);
        div.className = "img-panel";
        preview.appendChild(div);
        }
    }
    }

    function dropHandler(ev) {
    ev.preventDefault();
    const files = [...ev.dataTransfer.items]
        .map((item) => item.getAsFile())
        .filter((file) => file);
    displayImages(files);
    }
    const fileInput = document.getElementById("file-input");
    fileInput.addEventListener("change", (e) => {
    displayImages(e.target.files);
    });
    
}