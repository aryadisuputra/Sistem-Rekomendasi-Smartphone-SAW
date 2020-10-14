@extends('layouts.admin')
@section('title')
    Hasil Rekomendasi | Sitem Rekomendasi Tanaman
@endsection
@section('content')
<br>
@include('admin.tanaman.lihat-tanaman')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Recommended Result</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Merk</th>
                    <th>Price (C1)</th>
                    <th>Internal Memory (C2)</th>
                    <th>Camera (C3)</th>
                    <th>Processor (C4)</th>
                    <th>RAM (C5)</th>
                    <th>Operating System (C6)</th> 
                    <th>Preference Value</th>                                      
                </tr>
                </thead>


                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
<!-- end row -->


@endsection
@push('scripts')
        <script type="text/javascript">
            
            // function editDataUser(trigerer){
            //         var tabel = $(trigerer).parent().data('table-target');
            //         var modal = $(trigerer).data('target');
            //         var tr =$(trigerer).parent().parent().parent();
            //         data = $("table#"+tabel).DataTable().row(tr).data();
            //         var form = modal+" form ";
            //         var role = JSON.parse(data.role_id);
            //         $(form+"input#name").val(data.name);
            //         $(form+"input#email").val(data.email);
            //         $(form+" input[type=checkbox]").prop("checked",false);
            //         role.forEach(role_id => {
            //             $(form+" input#role_"+role_id).prop("checked",true);
            //         });
            //         $(form+"input#id").val(data.id);
            //     }
            function lihatLaptop(trigerer){
                    var tr = $(trigerer).parent().parent();
                    var modal = $(trigerer).data("target");
                    $(modal + " #nama_tanaman").html("Nama Tanaman: " + $("#table-mahasiswa").DataTable().row(tr).data().nama_tanaman);
                    $(modal + " #tekanan_udara").html("Tekanan Udara: " + $("#table-mahasiswa").DataTable().row(tr).data().tekanan_udara);
                    $(modal + " #kelembaban_udara").html("Kelembaban Udara: " + $("#table-mahasiswa").DataTable().row(tr).data().kelembaban_udara);
                    $(modal + " #penyinaran_matahari").html("Penyinaran Matahari : " + $("#table-mahasiswa").DataTable().row(tr).data().penyinaran_matahari);
                    $(modal + " #jumlah_curah_hujan").html("Jumlah Curah Hujan: " + $("#table-mahasiswa").DataTable().row(tr).data().jumlah_curah_hujan);
                    $(modal + " #suhu").html("Suhu : " + $("#table-mahasiswa").DataTable().row(tr).data().suhu);
                }
            $(document).ready(function() {
                $("#table-mahasiswa").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.saw.matrix_preferensi') !!}',
                    order:[8,'desc'],
                    columns:[
                        {data:'id', name: 'id',orderable: false,visible:false},
                        {data:'nama_tanaman',name :'Nama',orderable: false},
                        {data:'tekanan_udara',name :'Tekanan',orderable: false},
                        {data:'kecepatan_angin',name :'Kecepatan',orderable: false},
                        {data:'kelembaban_udara',name :'Kelembaban',orderable: false},
                        {data:'penyinaran_matahari',name :'Penyinaran',orderable: false},
                        {data:'jumlah_curah_hujan',name :'Hujan',orderable: false},
                        {data:'suhu',name :'Suhu',orderable: false},
                        {data:'nilai_preferensi',name:'nilai_preferensi',orderable: true},
                                             
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush