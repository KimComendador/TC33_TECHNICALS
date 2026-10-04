<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        th, td{
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th{
            background-color: #f2f2f2;
        }

        .btn{
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }

        .btn-new{
            background: green;
        }

        .btn-edit{
            background: orange;
        }

        .btn-delete{
            background: red;
        }

        .btn-logout{
            background: #333;
        }
    </style>
</head>

<body>

<h1>Task List</h1>

<?php if(session()->get('logged_in')): ?>

 
        <button type="button" class="btn btn-new">
            New Task
        </button>
    </a>

  
        <button type="button" class="btn btn-logout">
            Logout
        </button>
    </a>

<?php else: ?>

        <button type="button" class="btn">
            Login
        </button>
    </a>

<?php endif; ?>

<br><br>

<table>

    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Status</th>
        <th>Date</th>
        <th>Action</th>
    </tr>

    <?php foreach($tasks as $task): ?>

    <tr>

        <td><?= $task['id'] ?></td>

        <td><?= $task['title'] ?></td>

        <td><?= $task['status'] ?></td>

        <td><?= $task['task_date'] ?></td>

        <td>
            <a href="<?= site_url('tasks/edit/'.$task['id']) ?>">
                <button onclick="return confirm('Are you sure you want to edit this task?')" type="button" class="btn btn-edit">
                    Edit
    </button>
            </a>

            <a href="<?= site_url('tasks/delete/'.$task['id']) ?>">
                <button onclick="return confirm('Are you sure you want to delete this task?')" type="button" class="btn btn-delete">
                    Delete
                </button>
            </a>

        </td>

    </tr>

    <?php endforeach; ?>

</table>

    </body>
</html>