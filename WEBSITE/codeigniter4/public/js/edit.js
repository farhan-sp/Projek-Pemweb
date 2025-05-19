function toggleForm() {
    // Form Tambah data
    const form_add = document.getElementById('form');
    const button = document.getElementById('add-btn');

    // Form Update
    const form_update = document.querySelector('.table-container');

    if (form_add.classList.contains('hidden')) {
        form_add.classList.remove('hidden');
        button.classList.add('hidden');
        form_update.classList.add('hidden');
    } else {
        form_add.classList.add('hidden');
        button.classList.remove('hidden');
        form_update.classList.remove('hidden');
    }
}

function toggleUpdate(id) {
    // Form Tambah data
    const form_add = document.getElementById('form');
    const button = document.getElementById('add-btn');

    // Form Update
    const form_update = document.getElementById(`toggleUpdate-${id}`);
    const simpan = document.getElementById(`update-btn-${id}`);
    const batal = document.getElementById(`delete-btn-${id}`);

    if(form_update.classList.contains('hidden')) {
        form_update.classList.remove('hidden');
        batal.classList.add('hidden');
        button.classList.add('hidden')
        if(!form_add.classList.contains('hidden')) {
            form_add.classList.add('hidden');
        }

        simpan.setAttribute('colspan', '2');
        simpan.innerHTML = `
            <button onclick="toggleUpdate(${id})" id='delete-btn'>Batal</button>
        `;
    } else {
        form_update.classList.add('hidden');
        batal.classList.remove('hidden');
        button.classList.remove('hidden');

        simpan.removeAttribute('colspan');
        simpan.innerHTML = `<td id="update-btn-${id}">
                                <button class='button-update' onclick="toggleUpdate(${id})">Update</button>
                            </td>`;
        batal.innerHTML = `<td id="delete-btn-${id}">
                            <form action="<?= base_url('/edit/delete/') . ${id} ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                <button class='button-delete' type="submit">Hapus</button>
                            </form>
                        </td>`;
    }
}