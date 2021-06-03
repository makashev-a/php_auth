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
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <a href="/login" class="btn btn-outline-light btn-lg mt-4">Log In</a>
        </div>
    </div>
</div>

</body>
</html>
