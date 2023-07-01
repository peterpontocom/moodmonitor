// Array para armazenar as metas
let metas = []

// Referências aos elementos do formulário
const metaForm = document.getElementById("metaForm")
const metaIdField = document.getElementById("metaId")
const tituloField = document.getElementById("titulo")
const descricaoField = document.getElementById("descricao")
const dataField = document.getElementById("data")

// Função para adicionar ou atualizar uma meta
function salvarMeta(event) {
  event.preventDefault()

  const metaId = metaIdField.value
  const titulo = tituloField.value
  const descricao = descricaoField.value
  const data = dataField.value

  if (metaId) {
    // Atualizar meta existente
    const meta = metas.find((m) => m.id === parseInt(metaId))
    if (meta) {
      meta.titulo = titulo
      meta.descricao = descricao
      meta.data = data
    }
  } else {
    // Adicionar nova meta
    const novaMeta = {
      id: new Date().getTime(),
      titulo,
      descricao,
      data,
    }
    metas.push(novaMeta)
  }

  // Limpar formulário
  metaIdField.value = ""
  tituloField.value = ""
  descricaoField.value = ""
  dataField.value = ""

  // Atualizar tabela
  exibirMetas()
}

// Função para exibir as metas na tabela
function exibirMetas() {
  const tableBody = document.getElementById("metaTable").querySelector("tbody")
  tableBody.innerHTML = ""

  metas.forEach((meta) => {
    const row = document.createElement("tr")
    row.innerHTML = `
                    <td>${meta.titulo}</td>
                    <td>${meta.descricao}</td>
                    <td>${meta.data}</td>
                    <td class="field-buttons">
                        <button class="btn-edit" onclick="editarMeta(${meta.id})">Editar</button>
                        <button class="btn-delete" onclick="excluirMeta(${meta.id})">Excluir</button>
                    </td>
                `
    tableBody.appendChild(row)
  })
}

// Função para editar uma meta
function editarMeta(metaId) {
  const meta = metas.find((m) => m.id === metaId)
  if (meta) {
    metaIdField.value = meta.id
    tituloField.value = meta.titulo
    descricaoField.value = meta.descricao
    dataField.value = meta.data
  }
}

// Função para excluir uma meta
function excluirMeta(metaId) {
  metas = metas.filter((meta) => meta.id !== metaId)
  exibirMetas()
}

// Event listener para o formulário
metaForm.addEventListener("submit", salvarMeta)

// Exibir as metas iniciais (se houver)
exibirMetas()
