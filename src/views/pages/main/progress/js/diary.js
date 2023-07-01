var savedEntries = JSON.parse(localStorage.getItem("diaryEntries")) || []

savedEntries.forEach(function (entry, index) {
  displayEntry(entry.title, entry.content, index)
})

function addEntry() {
  var title = document.getElementById("titleInput").value
  var content = document.getElementById("contentInput").value

  if (title.trim() === "" || content.trim() === "") {
    alert("Por favor, preencha tanto o título quanto o conteúdo da entrada.")
    return
  }

  var entry = { title: title, content: content }
  savedEntries.push(entry)
  localStorage.setItem("diaryEntries", JSON.stringify(savedEntries))

  displayEntry(title, content, savedEntries.length - 1)

  document.getElementById("titleInput").value = ""
  document.getElementById("contentInput").value = ""
}

function displayEntry(title, content, index) {
  var entry = document.createElement("div")
  entry.className = "entry"
  entry.innerHTML =
    "<h1>" +
    title +
    "</h1><p class='truncated'>" +
    content +
    "</p><div class='entry-options'><button onclick='editEntry(" +
    index +
    ")'>Editar</button><button onclick='deleteEntry(" +
    index +
    ")'>Deletar</button></div>"

  entry.addEventListener("click", function () {
    viewEntry(title, content)
  })

  document.getElementById("entriesContainer").appendChild(entry)
}

function viewEntry(title, content) {
  sessionStorage.setItem("currentTitle", title)
  sessionStorage.setItem("currentContent", content)
  window.location.href = "writer.php"
}

function deleteEntry(index) {
  savedEntries.splice(index, 1)
  localStorage.setItem("diaryEntries", JSON.stringify(savedEntries))

  var entryContainer = document.getElementsByClassName("entry")[index]
  entryContainer.parentNode.removeChild(entryContainer)
}

function editEntry(index) {
  var entry = savedEntries[index]
  var entryContainer = document.getElementsByClassName("entry")[index]
  var titleElement = entryContainer.querySelector("h1")
  var contentElement = entryContainer.querySelector("p")

  var newTitle = prompt("Digite o novo título:", entry.title)
  var newContent = prompt("Digite o novo conteúdo:", entry.content)

  if (newTitle !== null && newContent !== null) {
    entry.title = newTitle
    entry.content = newContent
    localStorage.setItem("diaryEntries", JSON.stringify(savedEntries))

    titleElement.innerText = newTitle
    contentElement.innerText = newContent
  }
}
