<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" id="lihat-tanaman" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5 class="modal-title" id="myLargeModalLabel">Lihat Tanaman</h5>
            </div>
            <div class="modal-body" id="text">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            {{-- <div class="card-body">
                                <h4 class="card-title" id="company"></h4>
                                <p class="card-text" id="product"></p>
                            </div> --}}
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" id="nama_tanaman">Nama Tanaman: </li>
                                <li class="list-group-item" id="tekanan_udara">Tekanan Udara: </li>
                                <li class="list-group-item" id="kecepatan_angin">Kecepatan Angin: </li>
                                <li class="list-group-item" id="kelembaban_udara">Kelembaban Udara: </li>
                                <li class="list-group-item" id="penyinaran_matahari">Penyinaran Matahari: </li>
                                <li class="list-group-item" id="jumlah_curah_hujan">Jumlah Curah Hujan: </li>
                                <li class="list-group-item" id="suhu">Suhu: </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->