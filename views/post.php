<?php
require_once __DIR__ .'/../views/partials/header.php';
?>

<article class="blog-single">
    <div class="container">
        <div class="post card mb-3">
            <div class="head p-3">
                <p class="card-text"><small class="text-muted"><b>Last updated</b> 3 mins ago</small></p>
                <h1 class="h1">title here</h1>
            </div>
            <img src="https://via.placeholder.com/1900x300" width="100%" alt="...">
            <div class="card-body">
                <h5 class="card-title">Post title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><b>Author:</b> dsfds fds </small></p>
            </div>
        </div>
        <div class="comments">
            <ul class="comments-list">
                <li>
                    <p>
                        <b class="card-text"><small class="text-muted"><b>Author:</b> dsfds fds </small> <small class="text-muted"><b>Last updated</b> 3 mins ago</small> : </b>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aliquam atque, dolor eius eos est ex explicabo fugit in iure optio quia recusandae sed temporibus, vitae? Accusamus cumque ea officiis.
                        <a href="#" class="btn btn-danger">X</a>
                    </p>
                </li>
                <li>
                    <p>
                        <b class="card-text"><small class="text-muted"><b>Author:</b> dsfds fds </small> <small class="text-muted"><b>Last updated</b> 3 mins ago</small> : </b>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aliquam atque, dolor eius eos est ex explicabo fugit in iure optio quia recusandae sed temporibus, vitae? Accusamus cumque ea officiis.
                        <a href="#" class="btn btn-danger">X</a>
                    </p>
                </li>
            </ul>
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
        </div>
    </div>
</article>

<?php
require_once __DIR__ .'/../views/partials/footer.php';
?>
