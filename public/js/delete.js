let deleteBtn = document.querySelectorAll(".deleteBtn");

deleteBtn.forEach((ele) => {
    ele.addEventListener("click", () => {
        document
            .getElementById("confirm-delete")
            .setAttribute("href", `/admin/deleteMusic/${ele.value}`);
    });
});