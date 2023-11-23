<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('https://1.bp.blogspot.com/-NiL2tH5gsP4/UDdm1oVQ3TI/AAAAAAAAABw/5qDqSwHhINA/s1600/930E.jpg');">
        <span class="mask bg-gradient-faded-light opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://1.bp.blogspot.com/-NiL2tH5gsP4/UDdm1oVQ3TI/AAAAAAAAABw/5qDqSwHhINA/s1600/930E.jpg" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        Nama Mobil
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        Kategori [Transportasi, Pengangkut Tambang, Pengangkut Logistik]
                    </p>
                    <p class="mb-0 font-weight-normal text-sm">
                        Jenis [Milik Perusahaan, Sewaan]
                    </p>
                </div>
            </div>
        </div>
        <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-3">Pengajuan Peminjaman Kendaraan</h6>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                @if (session('status'))
                <div class="row">
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                        <span class="text-sm">{{ Session::get('status') }}</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                @if (Session::has('demo'))
                <div class="row">
                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                        <span class="text-sm">{{ Session::get('demo') }}</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                <form>
                    <div class="row">

                        <div class="mb-3 col-md-6">

                            <label class="form-label">Nama Peminjam</label>
                            <input wire:model.lazy="user.email" type="email" class="form-control border border-2 p-2">
                            @error('user.email')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">

                            <label class="form-label">Pemberi Izin</label>
                            <select class="form-select border border-2 p-2">
                                <option value="" selected>--- Pilih Pemberi Izin ---</option>
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}} - {{$user->position}}</option>
                                @endforeach
                            </select>
                            @error('user.name')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">

                            <label class="form-label">Pemberi Izin</label>
                            <input wire:model.lazy="user.name" type="text" class="form-control border border-2 p-2">
                            @error('user.name')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">

                            <label class="form-label">Phone</label>
                            <input wire:model.lazy="user.phone" type="number" class="form-control border border-2 p-2">
                            @error('user.phone')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">

                            <label class="form-label">Location</label>
                            <input wire:model.lazy="user.location" type="text" class="form-control border border-2 p-2">
                            @error('user.location')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">

                            <label class="form-label">Lokasi</label>
                            <select name="" id="" class="form-select border border-2 p-2">
                                <option value="">--Pilih Lokasi--</option>
                                <option value="">Kantor Pusat</option>
                                <option value="">Kantor Cabang</option>
                                <option value="">Tambang 1</option>
                                <option value="">Tambang 2</option>
                                <option value="">Tambang 3</option>
                                <option value="">Tambang 4</option>
                                <option value="">Tambang 5</option>
                                <option value="">Tambang 6</option>
                            </select>
                            @error('user.location')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>

                    </div>
                    <button type="submit" class="btn bg-gradient-dark">Konfirmasi</button>
                </form>

            </div>
        </div>
    </div>
</div>
