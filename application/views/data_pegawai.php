  <div class="content-wrapper ">

    
            <div class="content-header">
            <div class="container-fluid">
                <!-- breadcrum here -->
            </div>
        </div>
    
    
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
    
<div class="row">
  <div class="col-md-12">
    <div class="card card-outline card-gray">
      <div class="card-header">
        <h3 class="card-title">Daftar Pegawai</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool-info btn-sm" data-toggle="modal" data-target="#sincDataModal">
            <strong>
              <ion-icon name="cloud-download-outline"></ion-icon>
            </strong>&nbsp; Update Data
          </button>
        </div>
      </div>
      <div class="card-body pad table-responsive">
        <form class="data-olifilter" data-olifilter-table="table-data" onsubmit="return false">
          <div class="row">
            <div class="col-6 form-group">
              <button type="button" class="btn btn-info btn-sm data-search">
                <i class="fas fa-search"></i>&nbsp;&nbsp;&nbsp;Cari
              </button>
              <button type="button" class="btn btn-info btn-sm data-reload">
                <i class="fas fa-redo-alt"></i>&nbsp;&nbsp;&nbsp;Muat Ulang
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-3 form-group">
              <input type="text" data-olifilter-column="1" class="oli-filter form-control oli-flat form-control-sm" placeholder="NIP">
            </div>
            <div class="col-3 form-group">
              <input type="text" data-olifilter-column="2" class="oli-filter form-control oli-flat form-control-sm" placeholder="Nama Pegawai">
            </div>
          </div>
        </form>
        <table id="table-data" class="table oli-table nowrap table-striped table-bordered table-hover" role="grid" style="width:100%">
          <thead>
            <tr class="">
              <th>No</th>
              <th>NIP</th>
              <th>Nama</th>
              <th>No. Hp</th>
              <th>Email</th>
              <th>Pendidikan</th>
              <th>Satker</th>
              <th>Jabatan</th>
              <th>Eselon</th>
              <th>Golongan</th>
              <th>Pangkat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center" colspan="11">Data tidak ditemukan!</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="sincDataModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="overlay"><i class="fas fa-2x fa-sync fa-spin"></i></div>
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update Data Pegawai</h5>
        <button type="button" class="btn btn-danger btn-sm btn-labeled" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-md-center">
          <form class="form-horizontal col col-lg-6" onsubmit="return false">
            <div class="form-group row">
              <label for="apiPages" class="col-sm-3 col-form-label">Halaman</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" min="1" id="apiPages" value="1" placeholder="-">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="execSincData">Proses</button>
      </div>
    </div>
  </div>
</div>

</div>
        </div>
    </div>

</div>