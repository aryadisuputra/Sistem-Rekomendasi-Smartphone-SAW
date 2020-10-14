@extends('layouts.admin')
@section('title')
    Data Tanaman | Sitem Rekomendasi Tanaman
@endsection
@section('content')
<br>
<div class="row">
    <div class="col-12">
        <div class="card-box">

            <h4 class="header-title m-t-0">Add Smartphone</h4>
            @include('admin.tanaman.lihat-tanaman')
            @include('admin.tanaman.add')
            {{-- @include('admin.user.edit-user') --}}


            <div class="button-list">
                <!-- Custom width modal -->
                <button type="button" class="btn btn-info waves-light waves-effect w-md" data-toggle="modal" data-target="#tambah-mahasiswa" data-table="#tabel-user"><i class="mdi mdi-library-plus"></i> Add Data</button>
            </div>
        </div>
    </div><!-- end col -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>List Smartphone</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Merk</th>
                    <th>Price</th>
                    <th>Internal Memory</th>
                    <th>Camera</th>
                    <th>Processor</th>
                    <th>RAM</th>
                    <th>Operating System</th>
                    <th>Action</th>                                            
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
                    ajax: '{!! route('admin.tanaman.index') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'nama_tanaman',name :'Nama'},
                        {data:'tekanan_udara',name :'Tekanan'},
                        {data:'kecepatan_angin',name :'Kecepatan'},
                        {data:'kelembaban_udara',name :'Kelembaban'},
                        {data:'penyinaran_matahari',name :'Penyinaran'},
                        {data:'jumlah_curah_hujan',name :'Hujan'},
                        {data:'suhu',name :'Suhu'},
                        {data:'aksi',name: 'aksi',searchable:false,orderable: false}                        
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush