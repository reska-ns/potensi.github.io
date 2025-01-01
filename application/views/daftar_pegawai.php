  <div class="content-wrapper " style="min-height: 623.203px;">
       <div class="content-header">
            <div class="container-fluid">
                <!-- breadcrum here -->
            </div>
        </div>
    
    
    <div class="content">
        <div class="container-fluid">
            
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <div class="card card-outline card-gray loading-div">
                    <div class="card-header">
                      <h3 class="card-title"><strong>Daftar Pengguna</strong></h3>
                      <div class="card-tools">
                        <a class="btn btn-info btn-sm" href="https://tes-potensi.kemenkumham.go.id/events/create" title="Buat Event"><i class="fas fa-plus"></i> Tambah Pengguna</a>
                      </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div id="_filterKandidat">
                                    <div class="form-row">
                                  
                                    </div>
                                </div>
                            </div>
                                                        
    <div class="col-sm-12">
            <table id="myTable" class="table oli-table nowrap table-striped table-bordered table-hover" role="grid" style="width:100%">

    <thead>
        <tr>
            <th>NIP / Username</th>
            <th>Nama Pengguna</th>
            <th>Nama Pegawai</th>
            <th>Email Dinas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="text-left">198806132017121002</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">reska.nugroho@gmail.com</th>
            <th class="text-center"><a class="btn text-success"><i class="far fa-edit"></i></a></th>
        </tr>
        <tr>
        <th class="text-left">198806132017121002</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">reska.nugroho@gmail.com</th>
            <th class="text-center"><a class="btn text-success"><i class="far fa-edit"></i></a></th>
        </tr>
         <tr>
          <th class="text-left">198806132017121002</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">reska.nugroho@gmail.com</th>
            <th class="text-center"><a class="btn text-success"><i class="far fa-edit"></i></a></th>
        </tr>
         <tr>
        <th class="text-left">198806132017121002</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">reska.nugroho@gmail.com</th>
            <th class="text-center"><a class="btn text-success"><i class="far fa-edit"></i></a></th>
        </tr>
        <tr>
            <th class="text-left">198806132017121002</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">Reska Nugroho Sudarto</th>
            <th class="text-center">reska.nugroho@gmail.com</th>
            <th class="text-center"><a class="btn text-success"><i class="far fa-edit"></i></a></th>
        </tr>
    </tbody>
</table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- small modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="deleteBody"></div>
            </div>
        </div>
        <div id="loader" style="display: none;">
            <div class="text-center">
                <div class="spinner-border m-5" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>

</div>
    
    <div id="sidebar-overlay"></div></div>

    
  <script src="https://tes-potensi.kemenkumham.go.id/vendor/jquery/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

        <script src="https://tes-potensi.kemenkumham.go.id/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://tes-potensi.kemenkumham.go.id/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

        
        <script src="https://tes-potensi.kemenkumham.go.id/vendor/datatables/js/jquery.dataTables.min.js" ></script>
            
        
            
            
            
                            <script src="https://tes-potensi.kemenkumham.go.id/vendor/datatables/js/dataTables.bootstrap4.min.js" ></script>
            
        
            
            
            
                            <script src="./[Events] Tes-Potensi-Kemenkumham_files/dataTables.bootstrap4.min.js"></script>
            
        
            
            
            
            
                        
            
            
            
                            <script src="./[Events] Tes-Potensi-Kemenkumham_files/select2.min.js"></script>
            
        
            
            
            
            
                            
            
            
            
                            <script src="./[Events] Tes-Potensi-Kemenkumham_files/sweetalert2.all.min.js"></script>
            
        
            
            
            
            
                        
            
            
            
            
        
            
            
            
                            <script src="./[Events] Tes-Potensi-Kemenkumham_files/toastr.min.js"></script>
            
                
        <script src="./[Events] Tes-Potensi-Kemenkumham_files/adminlte.min.js"></script>
    
    <script> let table = new DataTable('#myTable');</script>
    
    
        <script type="module" src="./[Events] Tes-Potensi-Kemenkumham_files/ionicons.esm.js"></script>
    <script nomodule="" src="./[Events] Tes-Potensi-Kemenkumham_files/ionicons.js"></script>
        <script>
    var baseUrl = window.location.origin;

    $.fn.oli_datatable = function(option) {
        var _this = $(this)
        var _url = typeof _this.data('source') !== 'undefined' ? _this.data('source') : null
        var _default = {
            filter: true,
            responsive: true,
            autoWidth: false,
            order: [
                [1, "desc"]
            ],
            displayLength: 10,
            processing: true,
            serverSide: true,
            lengthMenu: [
                [10, 25, 50],
                [10, 25, 50]
            ],
            language: {
                emptyTable: 'Data tidak ditemukan!',
                zeroRecords: 'Data tidak ditemukan!',
                lengthMenu: 'Show  _MENU_',
            },
            dom: "<'row'<'col-sm-12 col-md-6'><'col-sm-12 col-md-6 text-right'l>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        }
        var _options = $.extend(true, _default, option)
        return _this.dataTable(_options)
    }

    // $('.oli-filter.form-control').keypress(function(e) {
    //     console.log('hai aku filter', e);
    // })

    $('form.data-olifilter button.data-search').on('click', function(e) {
        var _idOli = $(this).parents('form:first').data().olifilterTable
        var _oli_datatable = $('#' + _idOli).DataTable()
        $('.oli-filter.form-control').each(function(key, elm) {
            var _textSearch = $(elm).val()
            var _idxColumn = $(elm).data().olifilterColumn
            if (_idxColumn != undefined) {
                _oli_datatable.column(_idxColumn).search(_textSearch)
            }
        })
        _oli_datatable.draw()
    })

    $('form.data-olifilter button.data-reload').on('click', function(e) {
        var _idOli = $(this).parents('form:first').data().olifilterTable
        var _oli_datatable = $('#' + _idOli).DataTable()
        $('.oli-filter.form-control').each(function(key, elm) {
            $(elm).val('')
            var _idxColumn = $(elm).data().olifilterColumn
            if (_idxColumn != undefined) {
                _oli_datatable.column(_idxColumn).search('')
            }
        })
        _oli_datatable.draw()
    })

    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    })

    function toastmsg(type, msg) {
        Toast.fire({
            icon: type,
            title: msg
        })
    }
</script>
<script src="./[Events] Tes-Potensi-Kemenkumham_files/tabulator.min.js"></script>
<script src="./[Events] Tes-Potensi-Kemenkumham_files/lodash.min.js"></script>
<script src="./[Events] Tes-Potensi-Kemenkumham_files/loadingoverlay.min.js"></script>
<script type="text/javascript" src="./[Events] Tes-Potensi-Kemenkumham_files/moment.min.js"></script>
<script type="text/javascript" src="./[Events] Tes-Potensi-Kemenkumham_files/daterangepicker.min.js"></script>
<script src="./[Events] Tes-Potensi-Kemenkumham_files/ckeditor.js"></script>
<script>

    (function() {

        let filterDate = $('input[name="filter[tanggal]"]');
        let filterName = $('input[name="filter[nama]"]');

        filterDate.daterangepicker({
          autoUpdateInput: false,
        });
        filterDate.on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));
        });
        filterDate.on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
        });

        $(document).on("click", "a.deleteBtn" , function(e) {
            $(".loading-div").LoadingOverlay("show");
            var confirmation = confirm('Hapus event ?');
            if (!confirmation) {
                e.stopPropagation();
                e.preventDefault();
                $(".loading-div").LoadingOverlay("hide", true);
                return false;
            }
        });

        $(document).on("click", "a.publishBtn" , function(e) {
            $(".loading-div").LoadingOverlay("show");
            var confirmation = confirm('Publish event ?');
            if (!confirmation) {
                e.stopPropagation();
                e.preventDefault();
                $(".loading-div").LoadingOverlay("hide", true);
                return false;
            }
        });

        var table = new Tabulator("#events-table", {
            placeholder:"No Data Available",
            layout:"fitColumns",
            ajaxURL:baseUrl+"/events/fetch-event",
            pagination:true,
            paginationMode:"remote",
            filterMode:"remote",
            columns: [
                {title: "Nama Event", field: "title", formatter:"textarea"},
                {title: "Tanggal Event", field: "jadwal", width:200},
                {title: "Peserta", field: "peserta_count", width:100, bottomCalc:"sum"},
                {title: "Module", field: "module_count", width:100, bottomCalc:"sum"},
                {title: "SubTest", field: "subtest_count", width:100, bottomCalc:"sum"},
                {title: "Opsi", field: "links", formatter:"html", width:275}
            ]
        });

        function updateFilter(){
            var filterVal = [];

            if(filterName.val() !== "" && filterName.val().length >= 3) {
                filterVal.push({field:"title", type:"like", value:filterName.val()});
            }
            if(filterDate.val() !== "") {
                filterVal.push({field:"jadwal", type:"like", value:filterDate.val()});
            }

            if(filterVal.length > 0) {
                table.setFilter(filterVal);
            }
        }

        document.getElementById("filter-submit").addEventListener("click", updateFilter);
        document.getElementById("filter-clear").addEventListener("click", function(){
          filterName.val("");
          filterDate.val("");
          table.clearFilter();
        });

    })();

</script><div class="daterangepicker ltr show-calendar opensright"><div class="ranges"></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div>




</body></html>