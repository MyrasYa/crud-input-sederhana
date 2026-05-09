async function deleteStudent(id) {
    const response = await fetch("utils/hapus.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `id=${id}`
    });

    const result = await response.json();

    if (result.success) {
        loadData(); 
    }

    console.log(result.message);
}