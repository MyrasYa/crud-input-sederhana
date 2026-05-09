
// function untuk ngambil hasil query be php lalu set di ui saat trigger tombol edit di klik
async function editStudent(id) {

    // ngambil response dari logic be edit.php yang dimana berdasarkan param id
    const response = await fetch("utils/edit.php", {
        method: "POST",
        headers: {
             "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `id=${id}`
    })

    // nampung hasil response berupa json ke dalam varibael hasil
    const hasil = await response.json()

    // set ke ui fe pop up agar data yg masuk di input nama dan nilai sesuai dengan yang ada di variabel hasil
    document.getElementById("edit_id").value = hasil.id;
    document.getElementById("edit_nama").value = hasil.nama
    document.getElementById("edit_nilai").value = hasil.nilai 

    // ubah style pop up agar muncul
    document.getElementById("popupEdit").style.display = "block"

    // cek console data json hasil query be php
    console.log("Edit ID:", hasil);
}


// function close pop up agar hilang saat tombol close pop up di klik
function closePopup() {
    document.getElementById("popupEdit").style.display = "none";
}
