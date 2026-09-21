<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>

    <h1>Customer Accounts</h1>

    <table border="1" cellpadding="10">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Created At</th>
    </tr>

    <?php foreach ($customers as $customer): ?>
    <tr>
        <td><?= $customer['fullname']; ?></td>
        <td><?= $customer['email']; ?></td>
        <td><?= $customer['phone']; ?></td>
        <td><?= $customer['created_at']; ?></td>
    </tr>
    <?php endforeach; ?>

</table> <br></br>

    <a href="/">Back to Home</a> |

</body>
</html>