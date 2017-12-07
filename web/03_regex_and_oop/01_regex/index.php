<!doctype html>
<html>
<head>
    <title>Form</title>
    <style>
        .validation {
            margin: 10px 0;
            padding: 1px 10px;
            background: #ddd;
        }
    </style>
</head>
<body>
<h2>Register</h2>
<div class="validation"><?php require "validation.php"; ?></div>
<form method="post" action="">
    <input name="login" placeholder="Login">
    <br><br>
    <input name="full_name" placeholder="Name">
    <br><br>
    <input name="phone" placeholder="Phone">
    <br><br>
    <input name="website" placeholder="Website">
    <br><br>
    <label for="role">Role</label>
    <select name="role" id="role">
        <option value="">- Please select -</option>
        <option value="manager">Manager</option>
        <option value="developer">Developer</option>
        <option value="qa">QA Engineer</option>
    </select>
    <br><br>
    <input type="submit">
</form>
</body>
</html>