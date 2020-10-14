@extends('layouts.admin')
@section('title')
    Matrix Normalisasi | Sitem Rekomendasi Tanaman
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Matrix Normalization</b></h4>
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
            $(document).ready(function() {
                $("#table-mahasiswa").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.saw.matrix_normalisasi') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'nama_tanaman',name :'nama_tanaman'},
                        {data:'n_tekanan_udara',name:'n_tekanan_udara'},
                        {data:'n_kecepatan_angin',name:'n_kecepatan_angin'},
                        {data:'n_kelembaban_udara',name:'n_kelembaban_udara'},
                        {data:'n_penyinaran_matahari',name:'n_penyinaran_matahari'},
                        {data:'n_jumlah_curah_hujan',name:'n_jumlah_curah_hujan'},    
                        {data:'n_suhu',name:'n_suhu'},                        
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush