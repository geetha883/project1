<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form action="/register" method="POST">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('email')?>">
                            </div>
                        </div>
                    
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('email')?>">
                            </div>

                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Eamil address</label>
                                <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email')?>">
                            </div>
                        </div>
                    

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="password">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                                            <i class="fa fa-eye" id="eyeIcon"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                               <label for="password">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                                            <i class="fa fa-eye" id="eyeIcon"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
 

                        <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>    
                        <?php endif; ?>




                    </div>


                    <div class="row mt-3">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/">Already have an account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
