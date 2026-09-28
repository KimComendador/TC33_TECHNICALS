<!DOCTYPE html>
<html>
<head>
    <title>Today's Tasks</title>
</head>
<body>

    <h1>Welcome to Today's Task Manager</h1>

    <p>Today's Date: <?= date('Y-m-d') ?></p>

    <h2>Today's Tasks</h2>

    <?php if (!empty($tasks)): ?>

        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <strong><?= esc($task['title']) ?></strong>
                    -
                    <?= esc($task['status']) ?>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php else: ?>

        <p>No tasks for today.</p>

    <?php endif; ?>

    <hr>

    <a href="/">Welcome</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>

</body>
</html>