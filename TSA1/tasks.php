<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>

    <h1>Task List</h1>

    <?php if (!empty($tasks)): ?>

        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Task Date</th>
                <th>Created At</th>
            </tr>

            <?php foreach ($tasks as $task): ?>

                <tr>
                    <td><?= esc($task['id']) ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                    <td><?= esc($task['created_at']) ?></td>
                </tr>

            <?php endforeach; ?>

        </table>

    <?php else: ?>

        <p>No tasks found.</p>

    <?php endif; ?>

    <hr>

    <a href="/">Welcome</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>

</body>
</html>