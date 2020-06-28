<?php
/**
 * @var $error_code -> from ErrorHandler Class
 * @var $message -> from ErrorHandler Class
 * @var $data -> from View Class
 */
?>
<div class="container-fluid h-100">
    <div class="alert alert-danger" role="alert">
        <h1 class="m-0 text-center"><?php echo $data['error_code']; ?></h1>
        <h6 class="text-center"><?php echo $data['message']; ?></h6>
    </div>
<!--    <div class="row d-flex justify-content-center align-items-center h-100">-->
<!--        <div class="">-->
<!--            <h1 class="m-0 text-center">--><?php //echo $data['error_code']; ?><!--</h1>-->
<!--            <h6 class="text-center">--><?php //echo $data['message']; ?><!--</h6>-->
<!--        </div>-->
<!--    </div>-->
</div>

