<!DOCTYPE html>
<html>

<head>

<title>Users</title>

</head>

<body>

<h1>User Accounts</h1>

<p>
Welcome
<strong>
<?= session()->get('username') ?>
</strong>
</p>

<a href="/customers">Customers</a>

</a>
<class="btn" input type="submit" value="Logout">
</a>

</body>

</html>