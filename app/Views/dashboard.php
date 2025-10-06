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
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
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
                            <td class="text-center">
                                <a href="/users/edit/<?= $user['id'] ?>" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="/users/delete/<?= $user['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted">No users found</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</div>
