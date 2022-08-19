<?php
require_once __DIR__ .'/../views/partials/header.php';
?>

<div class="comment-form">

    <form class="row g-3">
        <div class="col-md-12">
            <label for="input_name" class="form-label">Name</label>
            <input type="text" class="form-control" id="input_name">
        </div>

        <div class="col-md-12">
            <label for="input_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="input_email">
        </div>

        <div class="col-md-12">
            <label for="input_url" class="form-label">Url</label>
            <input type="email" class="form-control" id="input_url">
        </div>

        <div class="col-md-12">
            <label for="input_message" class="form-label">Message</label>
            <textarea class="form-control" id="input_message" rows="3"></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>

</div>

<?php
require_once __DIR__ .'/../views/partials/footer.php';
?>
