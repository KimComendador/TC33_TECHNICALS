<!DOCTYPE html>
<html>
<head>
    <title>Today's Tasks</title>
</head>

<body>

    <h1>Welcome to Today's Task Manager</h1>

    <p>
        Today's Date:
        <strong><?= date('Y-m-d') ?></strong>
    </p>


    <?php if (session()->getFlashdata('message')): ?>

        <p style="color: green;">
            <?= esc(session()->getFlashdata('message')) ?>
        </p>

    <?php endif; ?>


    <?php if (session()->getFlashdata('error')): ?>

        <p style="color: red;">
            <?= esc(session()->getFlashdata('error')) ?>
        </p>

    <?php endif; ?>


    <h2>Today's Tasks</h2>


    <?php if (!empty($tasks)): ?>

        <table border="1" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Task Date</th>
            </tr>


            <?php foreach ($tasks as $task): ?>

                <tr>

                    <td>
                        <?= esc($task['id']) ?>
                    </td>

                    <td>
                        <?= esc($task['title']) ?>
                    </td>

                    <td>
                        <?= esc($task['status']) ?>
                    </td>

                    <td>
                        <?= esc($task['task_date']) ?>
                    </td>

                </tr>

            <?php endforeach; ?>

        </table>

    <?php else: ?>

        <p>No active tasks for today.</p>

    <?php endif; ?>


    <hr>


    <a href="/">Welcome</a> |
    <a href="/tasks">Task List</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>

    <?php if (session()->get('isLoggedIn')): ?>

        |
        <a href="/logout">Logout</a>

    <?php else: ?>

        |
        <a href="/login">Login</a>

    <?php endif; ?>


</body>
</html>