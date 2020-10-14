<!-- Signup modal content -->
<div id="tambah-mahasiswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <h2 class=" text-center m-b-30">
                    Tambah Tanaman Baru
                </h2>

                <form id="tambah-mahasiswa" data-table-target="table-mahasiswa"  class="form-horizontal" action="{{route('admin.tanaman.add')}}" method="POST">
                <fieldset id="fieldset">
                    <div class="form-group m-b-25">
                        <div class="col-12" id="message">
                            
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="username">Nama Tanaman</label>
                            <input class="form-control" name="nama_tanaman" type="text" id="name" required="" placeholder="Nama Tanaman">
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Tekanan Udara</label>
                            <input class="form-control" name="tekanan_udara" type="text" id="email" required="" placeholder="Tekanan Udara">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Kecepatan Angin</label>
                            <input class="form-control" name="kecepatan_angin" type="text" id="email" required="" placeholder="Kecepatan Angin">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Kelembaban Udara</label>
                            <input class="form-control" name="kelembaban_udara" type="text" id="email" required="" placeholder="Kelembaban Udara">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Penyinaran Matahari</label>
                            <input class="form-control" name="penyinaran_matahari" type="text" id="email" required="" placeholder="Penyinaran Matahari">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Jumlah Curah Hujan</label>
                            <input class="form-control" name="jumlah_curah_hujan" type="text" id="email" required="" placeholder="Jumlah Curah Hujan">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Suhu</label>
                            <input class="form-control" name="suhu" type="text" id="email" required="" placeholder="Suhu">
                        </div>
                    </div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <button class="btn w-lg btn-rounded btn-primary waves-effect waves-light" type="submit">Tambah</button>
                        </div>
                    </div>
                </fieldset>
                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->