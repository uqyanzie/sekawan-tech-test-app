<div>
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg">
                            <div class="img-thumbnail">
                                <img class="img-fluid" src="https://1.bp.blogspot.com/-NiL2tH5gsP4/UDdm1oVQ3TI/AAAAAAAAABw/5qDqSwHhINA/s1600/930E.jpg" alt="mobil-tambang">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-1">
                        <h6 class="mb-3">
                            Truk Tambang 
                            <span class="badge bg-success ms-2">Tersedia</span>
                            <span class="badge bg-danger ms-2">Tidak Tersedia</span>
                        </h6>
                        <p class="text-sm ">Last Campaign Performance</p>
                        <div class="d-flex ">
                            <i class="material-icons text-sm my-auto me-1">schedule</i>
                            <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                        </div>
                    </div>
                    <div class="card-footer d-flex gap-2">
                        <a href="#" class="btn btn-info">Lihat Detail</a>
                        @can('admin')
                        <a href="/vehicle-loans/create" class="btn btn-warning">
                            Buat Peminjaman
                        </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
