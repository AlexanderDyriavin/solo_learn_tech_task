<?php
/**
 * @var $data -> from UsersController
 */
?>
<?php foreach ($data['user_data'] as $key => $user) :{ ?>
    <div class="jumbotron jumbotron-fluid alert alert-primary">
        <div class="container">
            <h1 class="display-4"><b>Name: </b><? echo $user->user_name ?></h1>
            <h4><b>ID: </b><? echo $user->user_id ?></h4>
            <h5><b>Email: </b><? echo $user->email ?></h5>
            <p class="lead"><b>address: </b><? echo $user->address ?></p>
            <p class="lead"><b>Phone: </b><? echo $user->phone ?></p>
            <p class="lead"><b>Comments: </b><? echo $user->comments ?></p>
            <p class="lead"><b>Department: </b><? echo $user->deparment_name ?><b> id: <? echo $user->department ?></b>
            </p>
            <a href="/users/delete/<?echo $user->user_id?>" class="btn btn-danger">Delete it!</a>
        </div>
    </div>
<?php } endforeach; ?>