<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update Users</title>
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">

           <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

          <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.css" />
   
    <style type="text/css">
        html {
            margin: 20px;
        }

        body{
            font-size: 15px;
            font-family: Tahoma, sans-serif;
            color: #888;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        .header {
            font-size: 30px;
            background-color: #2980B9;
            color: #ffffff;
            padding: 15px;
            
        }

        .main {
            color: #000000;
            background-color: #ffffff;
            padding: 30px;
        }

        .footer {
            font-family: 'Courier New', monospace;
            color: #000000;
            background-color: #ffffff;
            padding: 5px;
            text-align: center;
            border-top: solid 1px #2980B9;
        }
    </style>
</head>
<body>
    <div class="header">Update User</div>
    <div class="main">

        <div class="container-fluid mt--6">
                <div class="row">
                    <div class="col-sm-9 mx-auto">
                        <div class="card " style="box-shadow: 2px 5px 5px 3px #888888">
                            <div class="card-header m-0 font-weight-bold text-success"
                                style="font-size:20px;border-bottom: 5px solid rgba(0, 0, 0, 0.125); ">User</div>
                            <form action="<?= site_url('edit_users/' . $user['id']); ?>" method="post" enctype="multipart/form-data">

                            <div class="card-body">
                                <div class="form-group">
                                    <label class="control-label">Last Name</label>
                                    <textarea name="lastname" id="lastname" cols="30" rows="2" class="form-control"
                                        required><?= $user['ecf_last_name']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <textarea name="firstname" id="firstname" cols="30" rows="2" class="form-control"
                                        required><?= $user['ecf_first_name']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email" required
                                        value="<?= $user['ecf_email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="category">Gender</label>
                                    <select class="form-control" id="Gender" name="Gender" required>
                                        <option value="Male" <?= $user['ecf_gender'] == 'Male' ? 'selected' : ''; ?>>Male
                                        </option>
                                        <option value="Female" <?= $user['ecf_gender'] == 'Female' ? 'selected' : ''; ?>>
                                            Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Address</label>
                                    <textarea name="address" id="address" cols="30" rows="2" class="form-control"
                                        required><?= $user['ecf_address']; ?></textarea>
                                </div>
                            </div>
                                <div class="card-footer text-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="submit" name="adduser"> Update</button>
                                            <br>
                                            <a class="btn btn-success mt-2 " href="<?= site_url('home');?>">Return Home</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <div class="footer">Page rendered with <?php echo $this->performance->memory_usage(); ?> in <strong><?php echo $this->performance->elapsed_time('lavalust'); ?></strong> seconds. <?php echo  (config_item('ENVIRONMENT') === 'development') ?  'LavaLust Version <strong>' . config_item('VERSION') . '</strong>' : '' ?>
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