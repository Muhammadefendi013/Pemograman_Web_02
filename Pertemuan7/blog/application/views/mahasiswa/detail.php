<div class="col-md-12 p-3">
 <h3>Detail Mahasiswa</h3>
    <table border="3" class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$siswa->id?></td>
                <td><?=$siswa->nim?></td>
                <td><?=$siswa->nama?></td>
                <td><?=$siswa->gender?></td>
                <td><?=$siswa->tmp_lahir?></td>
                <td><?=$siswa->tgl_lahir?></td>
                <td><?=$siswa->ipk?></td>
            </tr>
        </tbody>
    </table>
</div>