<?php
/**
 * @var $data from HomeController
 */
?>
<h1>Welcome To my APP </h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Department</th>
        <th scope="col">More Details</th>
    </tr>
    </thead>
    <tbody>
<!--    --><?// var_dump($data);exit(); ?>
    <? foreach ($data['users'] as $key => $user) :{ ?>
    <tr>
        <th scope="row"><?php echo $user->user_id ?></th>
        <td><?php echo $user->user_name ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->deparment_name ?></td>
        <td><a href="/users/view/<?echo $user->user_id?>" class="btn btn-warning">More Details</a></td>
    </tr>
    <?php } endforeach; ?>
    </tbody>
</table>