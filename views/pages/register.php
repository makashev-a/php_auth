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
    <h2 class="mt-4">Sign Up</h2>
    <form class="mt-4">
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="InputEmail">
        </div>
        <div class="mb-3">
            <label for="InputUsername" class="form-label">Username</label>
            <input type="text" class="form-control" id="InputUsername">
        </div>
        <div class="mb-3">
            <label for="InputFullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="InputFullName">
        </div>
        <div class="mb-3">
            <label for="InputProfilePhoto" class="form-label">Profile Photo</label>
            <input type="file" class="form-control" id="InputProfilePhoto" formenctype="multipart/form-data">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="InputPassword">
        </div>
        <div class="mb-3">
            <label for="InputPasswordConfirmation" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" id="InputPasswordConfirmation">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
