<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPinjamTambah">
    Tambah Data Peminjaman
</button>
<!-- Awal Modal tambah data Peminjaman -->
<div wire:ignore.self class="modal fade" id="modalPinjamTambah" tabindex="-1" role="dialog" aria-labelledby="modalPinjamTambahLabel" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form name="formpinjamtambah" id="formpinjamtambah" wire:submit.prevent="save">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPinjamTambahLabel">Form Input Data Peminjaman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">

                    @csrf
                    <div class="form-group row">
                        <label for="id_petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="id_petugas" wire:model="id_petugas" placeholder="Pilih Nama Petugas">
                                <option value="" hidden>Pilih Petugas</option>
                                @foreach($petugas as $pt)
                                <option value="{{ $pt->id_petugas }}">{{ $pt->nama_petugas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="id_anggota" class="col-sm-4 col-form-label">Nama Anggota</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="id_anggota" wire:model="id_anggota" placeholder="Pilih Nama Anggota">
                                <option value="" hidden>Pilih anggota</option>
                                @foreach($anggota as $a)
                                <option value="{{ $a->id_anggota }}">{{ $a->nama_anggota }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="id_buku" class="col-sm-4 col-form-label">Judul Buku</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="id_buku" wire:model="id_buku" placeholder="Pilih Judul Buku">
                                <option value="" hidden>Pilih buku</option>
                                @foreach($buku as $bk)
                                <option value="{{ $bk->id_buku }}">{{ $bk->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="modal-footer">
                        <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" name="pinjamtambah" class="btn btn-success">Tambah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Akhir Modal tambah data Peminjaman -->