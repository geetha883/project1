<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Hello <?= session()->get('firstname') ?></h2>
        </div>
        
    </div>
    
</div>
<hr>

<div class="container">
    <h3 class="mb-4 text-center">User List</h3>
    
    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users) && is_array($users)) : ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td class="text-center"><?= esc($user['id']) ?></td>
                            <td><?= esc($user['firstname']) ?></td>
                            <td><?= esc($user['lastname']) ?></td>
                            <td><?= esc($user['email']) ?></td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted">No users found</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</div>
