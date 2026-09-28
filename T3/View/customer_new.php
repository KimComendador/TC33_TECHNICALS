<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>

    <style>
        body{
            font-family:Arial;
            background:#f4f4f4;
        }

        .container{
            width:500px;
            margin:40px auto;
            background:white;
            padding:20px;
        }

        input{
            width:100%;
            padding:10px;
            margin-bottom:15px;
        }

        button{
            width:100%;
            padding:10px;
            background:green;
            color:white;
            border:none;
        }
    </style>
</head>
<body>

<div class="container">

<h1>New Customer</h1>

    <input type="text"
           name="full_name"
           placeholder="Full Name"
           required>

    <input type="email"
           name="email"
           placeholder="Email"
           required>

    <input type="text"
           name="phone"
           placeholder="Phone Number">

    <button type="submit">
        Save Customer
    </button>

</form>

</div>

</body>
</html>