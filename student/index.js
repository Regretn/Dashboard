const imgDiv = document.querySelector(".user-img");
const img = document.querySelector("#photo");
const file = document.querySelector("#file");
const uploadebtn = document.querySelector("#uploadbtn");

function importData() {
    let input = document.createElement("input");
    input.type = "file";
    input.onchange = (_) => {
        let files = Array.from(input.files);
        const file = files;
        const reader = new FileReader();

        reader.addEventListener("load", function() {
            img.setAttribute("src", reader.result);
        });
        reader.readAsDataURL(file[0]);
    };
    input.click();
}