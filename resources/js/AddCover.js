export default function AddCover() {
    const dropZone = document.getElementById("drop-zone");
    const fileInput = document.getElementById("file-input");
    const previewImage = document.getElementById("preview-image");
    const placeholder = document.getElementById("placeholder");
    const clearBtn = document.getElementById("clear-btn");

    if (!dropZone || !fileInput || !previewImage || !placeholder || !clearBtn) {
        return;
    }

    let currentFile = null;

    // File selected
    fileInput.addEventListener("change", (e) => {
        if (e.target.files.length) {
            loadImage(e.target.files[0]);
        }
    });

    // Drag effects
    ["dragenter", "dragover"].forEach(eventName => {
        dropZone.addEventListener(eventName, e => {
            e.preventDefault();
            dropZone.classList.add(
                "border-blue-500",
                "bg-gray-700"
            );
        });
    });

    ["dragleave", "dragend"].forEach(eventName => {
        dropZone.addEventListener(eventName, e => {
            e.preventDefault();
            dropZone.classList.remove(
                "border-blue-500",
                "bg-gray-700"
            );
        });
    });

    // Drop
    dropZone.addEventListener("drop", e => {
        e.preventDefault();

        dropZone.classList.remove(
            "border-blue-500",
            "bg-gray-700"
        );

        const files = e.dataTransfer.files;

        if (!files.length) return;

        loadImage(files[0]);
    });

    // Display image
    function loadImage(file) {

        if (!file.type.startsWith("image/")) {
            alert("Please upload an image.");
            return;
        }

        currentFile = file;

        const reader = new FileReader();

        reader.onload = e => {
            previewImage.src = e.target.result;

            previewImage.classList.remove("hidden");
            placeholder.classList.add("hidden");
            clearBtn.classList.remove("hidden");
        };

        reader.readAsDataURL(file);
    }

    // Clear
    clearBtn.addEventListener("click", () => {

        currentFile = null;

        previewImage.src = "";
        previewImage.classList.add("hidden");

        placeholder.classList.remove("hidden");

        fileInput.value = "";

        clearBtn.classList.add("hidden");
    });
}


