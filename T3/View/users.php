<!DOCTYPE html>
<html>
<head>
    <title>Users</title>

    <style>
        table{
            width:100%;
            border-collapse:collapse;
        }

        th,td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }

        img{
            width:80px;
            height:80px;
            object-fit:cover;
        }
    </style>
</head>
<body>

<h1>User Accounts</h1>

<a href="/users/new" class="btn">
    Add User
</a>

<br><br>

<table>

<tr>
    <th>Avatar</th>
    <th>Username</th>
    <th>Full Name</th>
    <th>Action</th>
</tr>

<?php foreach($users as $user): ?>

<tr>

<td>

<?php if(!empty($user['avatar'])): ?>

 ?>">

<?php else: ?>

No Image

<?php endif; ?>

</td>

<td><?= $user['username'] ?></td>
<td><?= $user['fullname'] ?></td>

<td>
    <button type="submit">
        Edit
    </button>

    </a>
</td>

</tr>

<?php endforeach; ?>

</table>

</body>
</html>