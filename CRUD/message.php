<?php
if(isset($_SESSION['message'])): ;
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">

<strong>Hey</strong> <?= $_SESSION['message']; ?>
<button class="btn-close" data-db-dismiss="alert" aria-label="close"></button>
</div>

<?php
unset($_SESSION['message']);
endif;
?>