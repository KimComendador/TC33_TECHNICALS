<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body{
            font-family:Arial;
            background:#f4f4f4;
        }

        .box{
            width:350px;
            margin:100px auto;
            background:white;
            padding:20px;
            border-radius:8px;
        }

        input{
            width:100%;
            padding:10px;
            margin-bottom:10px;
        }

        button{
            width:100%;
            padding:10px;
            background:#007bff;
            color:white;
            border:none;
        }

        .error{
            color:red;
        }
    </style>
</head>
<body>

<div class="box">

    <h2>POS Login</h2>

    <?php if(session()->getFlashdata('error')): ?>
        <p class="error">
            <?= session()->getFlashdata('error') ?>
        </p>
    <?php endif; ?>

    <form action="<?= site_url('login/attempt') ?>" method="post">

        <input
            type="text"
            name="username"
            placeholder="Username"
            required>

        <input
            type="password"
            name="password"
            placeholder="Password"
            required>

        <button type="submit">Login</button>

    </form>

</div>

</body>
</html>