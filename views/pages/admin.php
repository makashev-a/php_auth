<?php

use App\Services\Page;

if ($_SESSION["user"] && $_SESSION["user"]["group"] != 2) {
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
    <div class="p-5 mt-4 bg-light rounded-3 bg-dark text-white">
        <div class="container-fluid py-4">
            <h1>Dashboard</h1>
        </div>
    </div>
</div>

</body>
</html>
