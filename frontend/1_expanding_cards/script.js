
const panels = document.querySelectorAll(".panel")

panels.forEach((panel) => {
    panel.addEventListener("click", (e) => {
        // console.log(e.target.className)
        removeActiveClasses()
        panel.classList.add("active")
    })
})

function removeActiveClasses() {
    panels.forEach(panel => {
        panel.classList.remove("active")
    })
}