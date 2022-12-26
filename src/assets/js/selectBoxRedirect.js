const selectBox = document.getElementById("js-select");
const path = document.querySelector("body").dataset["tmpdir"];

if (selectBox) {
  selectBox.addEventListener("change", (e) => {
    const value = e.target.value;
    location.href = value;
  });
}
