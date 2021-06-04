<?php

use App\Services\Page;

if (!$_SESSION["user"]) {
    \App\Services\Router::redirect('/login');
}

?>
<!doctype html>
<html lang="en">
<?php
Page::part("head");
?>
<body>
<?php
Page::part("navbar");
?>

<div class="container">
    <div class="p-5 mt-4 bg-light rounded-3 bg-dark text-white">
        <div class="container-fluid py-4">
            <h1 class="display-5 fw-bold">Welcome to Dev-land, <?= $_SESSION["user"]["fullname"] ?>!</h1>
            <img src="<?= $_SESSION["user"]["profile_photo"] ?>" alt="profile_photo" height="300">
        </div>
    </div>
</div>

</body>
</html>
