<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Homepage</title>
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.css" />

    <style type="text/css">
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f8e2e2;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .header {
            background-color: #ff6f61;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .main {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #ff6f61;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .table thead th {
            background-color: #ff6f61;
            color: #fff;
            border: none;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .btn {
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-success {
            background-color: #ff9f40;
        }

        .btn-success:hover {
            background-color: #ff6f61;
        }

        .btn-warning {
            background-color: #ffcc40;
        }

        .btn-danger {
            background-color: #ff3f3f;
        }

        .btn-danger:hover {
            background-color: #ff1f1f;
        }

        .btn-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .m-0 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Home Page</h1>
    </div>
    <div class="main">
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card" style="box-shadow: 2px 2px 2px 3px #888888;">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col">
                                    <h1 class="m-0 font-weight-bold">All Users</h1>
                                    <div class="col" align="right">
                                        <button type="button" onclick="location.href='<?php echo site_url('add_users');?>'" class="btn btn-success btn-circle btn-sm"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                                <?php flash_alert(); ?>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="user_table" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">ID</th>
                                                    <th class="text-center">Last Name</th>
                                                    <th class="text-center">First Name</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Gender</th>
                                                    <th class="text-center">Address</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $record): ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $record['id']; ?></td>
                                                    <td class="text-center"><?php echo $record['ecf_last_name']; ?></td>
                                                    <td class="text-center"><?php echo $record['ecf_first_name']; ?></td>
                                                    <td class="text-center"><?php echo $record['ecf_email']; ?></td>
                                                    <td class="text-center"><?php echo $record['ecf_gender']; ?></td>
                                                    <td class="text-center"><?php echo $record['ecf_address']; ?></td>
                                                    <td class="text-center">
                                                        <button onclick="location.href='<?php echo site_url('edit_users/'.$record['id']);?>'" type="button" name="edit_button" class="btn btn-warning btn-sm edit_button">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <button onclick="location.href='<?php echo site_url('delete_users/'.$record['id']);?>'" type="button" name="delete_button" class="btn btn-danger btn-sm edit_button">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>                                                       
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        Page rendered with <?php echo $this->performance->memory_usage(); ?> in <strong><?php echo $this->performance->elapsed_time('lavalust'); ?></strong> seconds. <?php echo (config_item('ENVIRONMENT') === 'development') ? 'LavaLust Version <strong>' . config_item('VERSION') . '</strong>' : ''; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#user_table').DataTable();
        });
    </script>
</body>
</html>
