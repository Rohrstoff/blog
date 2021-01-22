<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Blog</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Blog erfassen</h1>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="/blog">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titel</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="lead" class="form-label">Lead</label>
                        <textarea class="form-control" id="lead" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Inhalt</label>
                        <textarea class="form-control" id="content" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Speichern</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
