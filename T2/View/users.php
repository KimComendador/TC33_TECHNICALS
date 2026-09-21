<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>

    <h1>User Accounts</h1>

    <table border="1" cellpadding="10">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Role</th>
        <th>Created At</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['username']; ?></td>
        <td><?= $user['fullname']; ?></td>
        <td><?= $user['role']; ?></td>
        <td><?= $user['created_at']; ?></td>
    </tr>
    <?php endforeach; ?>

    </table>   <br></br>

    <a href="/">Back to Home</a>


</body>
</html>