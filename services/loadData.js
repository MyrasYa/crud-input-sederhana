async function loadData() {
  const response = await fetch("utils/ambil.php");
  const data = await response.json();

  let html = "";
  let no = 1;

  if (data.length === 0) {
    html = `
      <tr>
        <td colspan="6" style="text-align:center">Data Kosong</td>
      </tr>
    `;
  } else {
    data.forEach((row) => {
      html += `
        <tr>
            <td>${no++}</td>
            <td>${row.nama}</td>
            <td>${row.nilai}</td>
            <td>${row.grade}</td>
            <td>${row.status}</td>
            <td>
                <button onclick="editStudent(${row.id})">Edit</button>
                <button onclick="deleteStudent(${row.id})">Hapus</button>
            </td>
        </tr>`;
    });
  }

  document.getElementById("tabelBody").innerHTML = html;
}

loadData();