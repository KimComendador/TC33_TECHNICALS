<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th, td{
            border:1px solid #ddd;
            padding:10px;
        }

        th{
            background:#007bff;
            color:white;
        }

        .btn{
            padding:8px 12px;
            text-decoration:none;
            color:white;
            border-radius:4px;
        }

        .add{
            background:green;
        }

        .edit{
            background:orange;
        }

        .delete{
            background:red;
        }

        .logout{
            background:#333;
        }
    </style>
</head>
<body>

<h1>Customer Accounts</h1>

<p>
    Logged in as:
    <strong><?= session()->get('username') ?></strong>
</p>

<?= site_url('customers/create') ?> class="btn add">
    Add Customer

<br><br>

<table>

    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>

    <?php foreach($customers as $customer): ?>

    <tr>

        <td><?= $customer['id'] ?></td>
        <td><?= $customer['full_name'] ?></td>
        <td><?= $customer['email'] ?></td>
        <td><?= $customer['phone'] ?></td>

        <td>

             ?>"
                class="btn edit">
                Edit
            </a>

             ?>"
                class="btn delete"
                onclick="return confirm('Delete this customer?')">
                Delete
            </a>

        </td>

    </tr>

    <?php endforeach; ?>

</table>
    <br></br>

<input class="btn btn-danger" type="submit" value="Logout">

</body>
</html>