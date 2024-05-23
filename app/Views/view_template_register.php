<br>
<main class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab-login" data-mdb-pill-init href="<?php echo base_url("testing/login") ?>" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-register" data-mdb-pill-init href="<?php echo base_url("testing/register") ?>" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
            </ul>
            <br>
            <!-- Pills navs -->
            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerName">Name</label>
                        <input type="text" id="registerName" class="form-control" />
                    </div>
                    <!-- Username input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">Username</label>
                        <input type="text" id="registerUsername" class="form-control" />
                    </div>
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">Email</label>
                        <input type="email" id="registerEmail" class="form-control" />
                    </div>
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerPassword">Password</label>
                        <input type="password" id="registerPassword" class="form-control" />
                    </div>
                    <!-- Repeat Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                        <input type="password" id="registerRepeatPassword" class="form-control" />
                    </div>
                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-3">Sign in</button>
                    </form>
                </div>
            </div>
            <!-- Pills content -->
        </div>
        <div class="col"></div>
    </div>
</main>