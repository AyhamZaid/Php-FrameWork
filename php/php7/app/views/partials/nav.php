<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
.navul ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.navul li {
  float: left;
}

.navul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navul li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: orange;
}
</style>

<body>
<nav class = "navul">
    <ul >
        <li><a class="active" href="./">Home</a></li>
        <li><a href="login">login</a></li>
        <li><a href="about">About</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="users">Manage Users</a></li>
    </ul>
</nav>
</body>
</html>
