// function untuk update data yg ada di database berdasarkan query be php yang ke trigger saat tombol update di klik 
async function updateStudent() {
    let id = document.getElementById("edit_id").value
    let nama = document.getElementById("edit_nama").value
    let nilai = document.getElementById("edit_nilai").value

    const response = await fetch("utils/update.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },

        body: `id=${id}&nama=${nama}&nilai=${nilai}`
    })

    const hasil = await response.json()

    if (hasil.succes) {
    loadData();
}

    console.log(hasil)
} 