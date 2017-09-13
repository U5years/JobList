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
            
            <div class="row">
                <div class="form-check col-sm-3 col-xs-6">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tag" value="font-end">
                            font-end
                    </label>
                </div>
                <div class="form-check col-sm-3 col-xs-6">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tag" value="back-end">
                            back-end
                     </label>
                </div>
                <div class="form-check col-sm-3 col-xs-6">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tag" value="full-stack">
                            full-stack
                     </label>
                </div>
                <div class="form-check col-sm-3 col-xs-6">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tag" value="data science">
                            data science
                     </label>
                </div>
            </div>
            <div class="row">
                <div class="form-check col-sm-3 col-xs-6">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tag" value="mobile developement">
                            mobile developement
                     </label>
                </div>
                <div class="form-check col-sm-3 col-xs-6">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tag" value="other">
                            other
                     </label>
                </div>
            </div>
            <div class="form-group"/>
                <button class="btn btn-md btn-primary btn-block">Submit</button>
            </div>
        </form>
        <a href="#">Go back</a>
    </div>

<?php include 'inc/footer.php'; ?>

