<div class="modal modal-lg fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mobil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('tambah')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="namaMobil" class="form-label">Nama Mobil</label>
                  <input type="text" name="namaMobil" class="form-control" id="namaMobil" aria-describedby="NamaMobil" placeholder="Masukan Nama Mobil">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" name="tahun" class="form-control" id="tahun" aria-describedby="tahun" placeholder="Masukan Tahun Mobil">
                </div>
                <h5>Varian Harga</h5>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-1">
                            <label for="harga_driver" class="form-label">Dengan Driver</label>
                            <input type="text" class="form-control" name="harga_driver" id="harga_driver" placeholder="Masukan Harga">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-1">
                            <label for="harga" class="form-label">Hanya Mobil</label>
                            <input type="text" name ="harga_hanya_mobil"class="form-control" id="harga" placeholder="Masukan Harga">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="10" rows="2" class="form-control" id="deskripsi" placeholder="Deskripsi"></textarea>
                  </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="gambar">
                  </div>           
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
        </div>
    </div>
    </div>
</div>