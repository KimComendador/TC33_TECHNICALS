<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

<h1>Edit Customer</h1>

    <input type="text"
           name="full_name"
           value="<?= $customer['full_name'] ?>"
           required>

    <br><br>

    <input type="email"
           name="email"
           value="<?= $customer['email'] ?>"
           required>

    <br><br>

    <input type="text"
           name="phone"
           value="<?= $customer['phone'] ?>">

    <br><br>

    <button type="submit">
        Update Customer
    </button>

</form>

</body>
</html>