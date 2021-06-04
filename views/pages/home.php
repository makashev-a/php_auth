<?php

use App\Services\Page;

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
            <h1 class="display-5 fw-bold">Welcome to Dev-land!</h1>
            <p class="col-md-12 fs-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis tempor
                odio vel efficitur. Sed semper dolor vitae dolor aliquet cursus. Quisque mattis arcu nunc, vel facilisis
                magna rhoncus mollis. Proin eget lobortis ante. Quisque semper laoreet massa, malesuada vehicula lacus
                dictum vitae. Sed convallis magna sed mattis suscipit. Etiam dapibus quam vel cursus sodales.
            </p>
            <?php
            if (!$_SESSION["user"]) {
                ?>
                <a href="/login" class="btn btn-outline-light btn-lg mt-4">Log In</a>
                <?php
            }
            ?>

        </div>
    </div>
</div>

</body>
</html>
