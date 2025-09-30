
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
            <div class="container">
                <h3>Login</h3>
                <hr>

                <?php if (session()->get('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?> 
                
                
                <form action="<?= base_url('/login') ?>" method="POST">

                    <div class="form-group">
                        <label for="email">Eamil adress</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= old('email') ?>">
                    </div>

                    
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

                    <?php if (isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>    
                    <?php endif; ?>

                    <div class="row mt-3">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="./register">Don't have account yet?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
