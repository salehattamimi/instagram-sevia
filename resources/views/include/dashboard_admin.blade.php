
<div class="row"> 
    <div class="col-sm-12"> 
        <div class="panel panel-body bg-info-200 has-bg-image">
            <div class="media no-margin-top content-group">
                <div class="media-body">
                    <h4 class="no-margin text-semibold">
                        Pesan Masuk
                    </h4> 
                </div>

                <div class="media-right media-middle">
                    <i class="icon-inbox icon-2x"></i>
                </div>
            </div> 
            <span class="pull-right"></span> 
            <table class="table table-bordered table-hover datatable-basic">
                <thead>
                <tr>
                    <th style="width: 2%">No</th> 
                    <th style="width: 400px !important">Data Pengirim</th>  
                    <th>Isi</th>
                    <th style="width: 120px" class="text-center">Act</th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 0; ?>
                @foreach ($data_pesan as $dt)
                <?php
                $count++; 
                ?>
                <tr>
                    <td><?= $count; ?></td> 
                    <td>
                        Tgl Pesan = <b>{!! date('d-m-Y H:i:s', strtotime($dt->created_at)) !!}</b><br>
                        Email = <b>{!! $dt->email !!}</b><br>
                        Nama = <b>{!! $dt->nama !!}</b><br> 
                        No WA = <b>{!! $dt->no_hp !!}</b><br> 
                        Instansi = <b>{!! $dt->instansi !!}</b><br>
                        Jabatan = <b>{!! $dt->jabatan !!}</b><br> 
                        Provinsi = <b>{!! $dt->provinsi !!}</b><br>
                        Kabupaten = <b>{!! $dt->kabupaten !!}</b><br> 
                    </td>  
                    <td style="vertical-align: top">
                        Subject = <b>{!! $dt->subject !!}</b><br>
                        {!! $dt->isi !!}
                    </td>
                    <td align="center">
                        @if($dt->username)
                        Sudah masuk dalam user
                        @else 
                        <button onclick="$('#ModalBiruSm').modal('show');
                            $('#ModalBiruSmLabel').html('Tambahkan User');
                            tambah_user_gomap('{{csrf_token()}}', '{!! $dt->id !!}', '#ModalBiruSmIsi')
                        "
                        title="Tambahkan" class="btn btn-xs btn-info btn_aktif_<?= $dt->id; ?>">
                            <i class="fa fa-plus"></i> User
                        </button>
                        @endif 
                        <button onclick="$('#ModalBiru').modal('show');
                            $('#ModalBiruLabel').html('Kirim Email User');
                            email_user_gomap('{{csrf_token()}}', '{!! $dt->id !!}', '#ModalBiruIsi')
                        "
                        title="Tambahkan" class="btn btn-xs btn-info btn_aktif_<?= $dt->id; ?>">
                            <i class="fa fa-mail"></i> Email
                        </button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div> 
    </div>
</div>