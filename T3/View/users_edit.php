<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

    <input type="text"
           name="username"
           value="<?= $user['username'] ?>"
           required>

    <br><br>

    <input type="text"
           name="full_name"
           value="<?= $user['full_name'] ?>"
           required>

    <br><br>

    <label>Avatar:</label>

    <input type="file"
           name="avatar">

    <br><br>

    <button type="submit">
        Update User
    </button>

</form>

</body>
</html>