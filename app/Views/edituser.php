<div class="container mt-5">
    <h3 class="mb-4 text-center">Edit User</h3>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <form action="/users/update/<?= $user['id'] ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input 
                type="text" 
                class="form-control" 
                name="firstname" 
                id="firstname" 
                value="<?= esc($user['firstname']) ?>" 
                required>
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input 
                type="text" 
                class="form-control" 
                name="lastname" 
                id="lastname" 
                value="<?= esc($user['lastname']) ?>" 
                required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input 
                type="email" 
                class="form-control" 
                name="email" 
                id="email" 
                value="<?= esc($user['email']) ?>" 
                required>
        </div>

        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update
            </button>
            <a href="/viewusers" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </form>
</div>
