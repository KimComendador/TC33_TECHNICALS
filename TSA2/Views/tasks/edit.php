<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>

<body>

    <h2>Edit Task</h2>

    <form method="post" action="<?= site_url('tasks/update/'.$task['id']) ?>">

Title:

<input
type="text"
name="title"
value="<?= $task['title'] ?>">

<br><br>

Status:

<select name="status">

<option value="pending"
<?= $task['status']=='pending'?'selected':'' ?>>
Pending
</option>

<option value="completed"
<?= $task['status']=='completed'?'selected':'' ?>>
Completed
</option>

</select>

<br><br>

Task Date:

<input
type="date"
name="task_date"
value="<?= $task['task_date'] ?>">

<br><br>

<button type="submit">

Update

</button>

</form>

    <br>

    <a href="/tasks">
        Back to Task List
    </a>

</body>
</html>