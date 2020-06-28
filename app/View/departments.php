<?php
/**
 * @var $data -> passed from the DepartmetClass -> method fetchAll();
 */
?>

<h3>Create new Department </h3>
<form method="post" action="/departments/create">
    <div class="form-group">
        <label for="department">Comments for this user</label>
        <input name="department" type="text" class="form-control" id="department" placeholder="department">
    </div>


    <button type="submit" class="btn btn-primary">Create department</button>
</form>

<div class="mt-2">
    <h4>List of all departments</h4>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Department Name</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($data['departments'] as $key => $department ) : ?>
        <tr>
            <th scope="row"><? echo $department->department_id ?></th>
            <td><? echo $department->name?></td>
            <td><a href="/departments/delete/<?echo $department->department_id?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <? endforeach; ?>
        </tbody>
    </table>

</div>

