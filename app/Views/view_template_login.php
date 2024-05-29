<br>
<br>

<main class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">

        
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">


                <!-- Login -->
                <li class="nav-item active" role="presentation">
                    <a
                      class="nav-link active"
                      id="tab-login"
                      data-mdb-pill-init
                      href="<?php echo base_url() ?>"
                      role="tab"
                      aria-controls="pills-login"
                      aria-selected="true"
                    >
                      Login
                    </a>
                </li>


                <!-- Register -->
                <li class="nav-item" role="presentation">
                    <a
                      class="nav-link"
                      id="tab-register"
                      data-mdb-pill-init
                      href="<?php echo base_url("register") ?>"
                      role="tab"
                      aria-controls="pills-register"
                      aria-selected="false"
                    >
                      Register
                    </a>
                </li>


            </ul>

            <br>

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form>

                        
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="loginName">Email or username</label>
                            <input type="email" id="loginName" class="form-control" />
                        </div>

                        
                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="loginPassword">Password</label>
                            <input type="password" id="loginPassword" class="form-control" />
                        </div>


                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>


                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</main>