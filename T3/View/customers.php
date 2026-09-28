<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>

    <style>
        body{
            font-family:Arial;
            background:#f4f4f4;
        }

        .container{
            width:90%;
            margin:auto;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th,td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }

        th{
            background:#007bff;
            color:white;
        }

        .btn{
            background:green;
            color:white;
            padding:8px 12px;
            text-decoration:none;
            border-radius:5px;
        }
    </style>
</head>
<body>

<div class="container">

<h1>Customer Accounts</h1>

 <a href="/customers/new" class="btn">
    Add Customer
</a>

<br><br>

<table>

<tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th>
</tr>

<?php foreach($customers as $customer): ?>

<tr>
    <td><?= $customer['id'] ?></td>
    <td><?= $customer['fullname'] ?></td>
    <td><?= $customer['email'] ?></td>
    <td><?= $customer['phone'] ?></td>

    <td>
         ?>">
            Edit
        </a>
    </td>
</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>