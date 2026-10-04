<!DOCTYPE html>
<html>
<head>
    <title>Create New Task</title>
</head>

<body>

  <h2>New Task</h2>

    <form method="post" action="<?= site_url('tasks/create') ?>">

Title:

<input type="text" name="title">

<br><br>

Status:

<select name="status">

<option value="pending">Pending</option>

<option value="completed">Completed</option>

</select>

<br><br>

Task Date:

<input type="date" name="task_date">

<br><br>

<button type="submit">

Save

</button>

</form>

    <br>

    <a href="/tasks">
        Back to Task List
    </a>


</body>
</html>