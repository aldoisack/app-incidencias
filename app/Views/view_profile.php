<div class="load-content">
    <div class="rounded bg-white">
        <div class="row">

            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center">
                    <img class="rounded-circle mt-5" width="150px" src="https://static.vecteezy.com/system/resources/previews/020/911/740/non_2x/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png">
                    <span class="font-weight-bold"><?= $usuario["usuario"] ?></span>
                </div>
            </div>

            <div class="col-md-6 border-right">
                <div class="p-3 py-5">


                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right"><b>Perfil</b></h4>
                    </div>

                    <div class="col">
                        <label class="labels">Nombres</label><input type="text" class="form-control" placeholder="first name" value="<?= $usuario["nombres"] ?>" readonly>
                    </div>
                    <br>
                    <div class="col">
                        <label class="labels">Apellidos</label><input type="text" class="form-control" value="<?= $usuario["apellidos"] ?>" placeholder="surname" readonly>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>