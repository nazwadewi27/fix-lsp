  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form form-vertical" action="{{ route('admin.tambah.data') }}" method="POST">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-info-vertical">Kode</label>
                                <input type="text" id="contact-info-vertical" class="form-control"
                                    name="kode" required value="{{ $kode }}" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" id="fullname" class="form-control"
                                    name="fullname" placeholder="Fullname">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nama Pengguna</label>
                                <input type="username" id="username" class="form-control"
                                    name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password-vertical">Password</label>
                                <input type="password" id="password-vertical" class="form-control"
                                    name="contact" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset"
                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
