add user

<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Users</title>
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.css" />

    <style type="text/css">
        body {
            font-size: 16px;
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #f9f8f5;
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 36px 0px;
        }

        .header {
            font-size: 36px;
            background-color: #ff6f61;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .main {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .footer {
            font-family: 'Courier New', monospace;
            color: #000000;
            padding: 5px;
            text-align: center;
            border-top: solid 1px #ff6f61;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #ff6f61;
            border-color: #ff6f61;
        }

        .btn-primary:hover {
            background-color: #ff4f3e;
            border-color: #ff4f3e;
        }

        .form-control,
        .form-select {
            border-radius: 5px;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="header">Add Users</div>
    <div class="main">
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-sm-9 mx-auto">
                    <div class="card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <div class="card-header m-0 font-weight-bold text-success"
                             style="font-size:20px; border-bottom: 3px solid rgba(0, 0, 0, 0.125);">New User</div>
                        <?php flash_alert(); ?>
                        <form action="<?= site_url('add_users'); ?>" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <textarea name="lastname" id="lastname" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <textarea name="firstname" id="firstname" cols="30" rows="2" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <select class="form-select" id="Gender" name="Gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <textarea name="address" id="address" cols="30" rows="2" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" type="submit" name="adduser"> Save</button>
                                        <br>
                                        <a class="btn btn-success mt-2" href="<?= site_url('home'); ?>">Return Home</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">Page rendered with <?php echo $this->performance->memory_usage(); ?> in <strong><?php echo $this->performance->elapsed_time('lavalust'); ?></strong> seconds. <?php echo (config_item('ENVIRONMENT') === 'development') ?  'LavaLust Version <strong>' . config_item('VERSION') . '</strong>' : '' ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#user_table').DataTable();
            });
        </script>
</body>

</html>
