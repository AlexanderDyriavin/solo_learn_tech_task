<?php
/**
 * @var $data -> passing from UserController->index()
 */
?>
<h3>Create new Employer</h3>
<form method="post" action="/users/create">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control" id="username" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <label for="address">Address of employee </label>
        <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="phone">Phone number of employee </label>
        <input type="tel" name="phone" class="form-control" id="phone"
               placeholder="380962696266">
    </div>
    <div class="form-group">
        <label for="comments">Comments for this user</label>
        <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="department">Department</label>
        <select id="department" name="department" class="form-control">
            <option selected>Choose...</option>

            <!--Todo: Create a foreach for departments !! -->
            <? foreach ($data['departments'] as $key => $department) :{ ?>
                <option value="<? echo $department->department_id ?>"><? echo $department->name ?></option>
            <? } endforeach; ?>
        </select>
    </div>
    <?php
    if (empty($data['departments'])) {
        echo "<h5>Firstly you need to create <a href='/departments/'>Deparments</a></h5>";
        echo '<button type="submit" class="btn btn-primary" disabled>Create user</button>';
    } else {
        echo '<button type="submit" class="btn btn-primary">Create user</button>';
    }
    ?>
</form>
<section>
    <h4 class="mt-2">List of All users</h4>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($data['users'] as $key => $user) : { ?>
        <tr>
            <th scope="row"><? echo $user->user_id ?></th>
            <td><? echo $user->name ?></td>
            <td><? echo $user->email ?></td>
            <? } endforeach; ?>
        </tr>
        </tbody>
    </table>
</section>
