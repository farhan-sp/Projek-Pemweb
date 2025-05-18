function toggleForm() {
    const form = document.getElementById('form');

    if (form.classList.contains('hidden')) {
        form.classList.remove('hidden');
    } else {
        form.classList.add('hidden');
    }
}

function toggleUpdate(id) {
    const form = document.getElementById(`toggleUpdate-${id}`);
    const simpan = document.getElementById(`update-btn-${id}`);
    const batal = document.getElementById(`delete-btn-${id}`);

    if(form.style.display === 'none') {
        form.style.display = '';

        simpan.setAttribute('colspan', '2');
        simpan.innerHTML = `
            <button onclick="toggleUpdate(${id})">Batal</button>
        `;
        batal.style.display = 'none';
    } else {
        form.style.display = 'none';

        simpan.removeAttribute('colspan');
        batal.style.display = '';
        simpan.innerHTML = `<td id="update-btn-${id}"><button onclick="toggleUpdate(${id})">Update</button></td>`;
        batal.innerHTML = `<td id="delete-btn-${id}">
                            <form action="<?= base_url('/edit/delete/') . ${id} ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                <button type="submit">Hapus</button>
                            </form>
                        </td>`;
    }
}