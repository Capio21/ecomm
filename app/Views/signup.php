<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CodeIgniter Auth User Registration Example</title>

    <style>
        * {
            font-family: fantasy;
            font-style: italic;
        }

        /* Center-align the container */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(125deg, #ffcccc, #000);
        }

        /* Style the form and table */
        .form-container, .table-container {
            background-color: rgba(155, 155, 155, 0.9); /* Light red background with transparency */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 0 10px rgba(0, 1, 4, 0.9);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>
                <?php if(isset($validation)): ?>
                    <div class="alert alert-warning"><?= $validation->listErrors() ?></div>
                <?php endif; ?>
                <form action="<?= base_url('/') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
