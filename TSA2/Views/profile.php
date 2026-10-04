<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>

<body>

    <h1>Demo User Profile</h1>


    <?php if ($user): ?>

        <p>
            <strong>ID:</strong>
            <?= esc($user['id']) ?>
        </p>

        <p>
            <strong>Username:</strong>
            <?= esc($user['username']) ?>
        </p>

        <p>
            <strong>Full Name:</strong>
            <?= esc($user['full_name']) ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?= esc($user['email']) ?>
        </p>

        <p>
            <strong>Created At:</strong>
            <?= esc($user['created_at']) ?>
        </p>

    <?php else: ?>

        <p>User not found.</p>

    <?php endif; ?>


    <hr>


    <a href="/">Welcome</a> |
    <a href="/tasks">Task List</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>

</body>
</html>