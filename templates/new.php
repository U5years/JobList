<?php include 'inc/header.php'; ?>

    <h1 style="text-align: center">Post a new Job Info</h1>

    <div>
        <form action="/" method="POST">
            <div class="form-group"/>
                <label for="title">Job title</label>
                <input id="title" class="form-control" type="text" name="title">
            </div>
            <div class="form-group"/>
                <label for="link">link</label>
                <input id="link" class="form-control" type="text" name="url">
            </div>
            <div class="form-group"/>
                <label for="description">Description</label>
                <textarea id="description" class="form-control" name="description" rows="5"></textarea>
            </div>
            <div class="form-group"/>
                <button class="btn btn-lg btn-primary btn-block">Submit</button>
            </div>
        </form>
        <a href="#">Go back</a>
    </div>

<?php include 'inc/footer.php'; ?>