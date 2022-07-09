<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content bg-gradient ">
        <div class="modal-header">
          <h5 class="modal-title " id="staticBackdropLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/login" method="POST">
            @csrf
            <div class="modal-body">

                        <div class="row mb-3">
                        <div class="col-sm-10 form-mid">
                            <input type="text" placeholder="Username" name="admin_name" class="form-control" id="inputEmail3">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-sm-10 form-mid">
                            <input type="password" placeholder="Password" name="Password" class="form-control" id="inputPassword3">
                        </div>
                        </div>

            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary"  value="Login">

            </div>
        </form>
      </div>
    </div>
  </div>
