<?php

use App\Services\Page;

if ($_SESSION["user"]) {
    \App\Services\Router::redirect('profile');
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
    <h2 class="mt-4">Log In</h2>
    <form class="mt-4" action="/auth/login" method="post">
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" id="InputEmail">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="InputPassword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
