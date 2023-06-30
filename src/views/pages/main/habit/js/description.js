const showContent = document.querySelectorAll(".showContent")
const hideContent = document.querySelectorAll(".hideContent")
const description = document.querySelectorAll(".description")

// showContent.onclick = () => {
//   description.style.display = "block"
//   hideContent.style.display = "block"
//   showContent.style.display = "none"
//   console.log("showContent")
// }

showContent.forEach((showContent) =>
  showContent.addEventListener("click", () => {
    console.log(description.textContent)
  })
)

hideContent.forEach((hideContent) =>
  hideContent.addEventListener("click", () => {
    description.style.display = "none"
    hideContent.style.display = "none"
    showContent.style.display = "block"
    console.log("hideContent")
  })
)

// hideContent.onclick = () => {
//   description.style.display = "none"
//   hideContent.style.display = "none"
//   showContent.style.display = "block"
//   console.log("hideContent")
// }
