<?php
include('db_connect.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "DELETE FROM addresses WHERE name= '$name' and emailid= '$email'";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="success">
 Deleted Successfully !
 </div>';
    } else {
        echo '<div class="error">
 Error : ' . mysqli_error($conn) . '
 </div>';
    }
}
?>
<?php include 'header.php' ?>
<div class="form-container">
    <div class="btns">
        <span><a href="index.php"><button class="disabled">New</button></a></sp an>
            <span><a href="update.php"><button class='disabled'>Update</button></a>
                < /span> <span><a href="delete.php"><button>Delete</button></a>
            </span>
            <span><a href="search.php"><button class='disabled'>Search</button></a>
            </span>
    </div>
    <form action="delete.php" method='POST'>
        <h2>Delete Entry</h2>
        <div class="name">
            <input id="name" type="text" name="name" placeholder="Name">
        </div>
        <div class="email">
            <input id="email" type="email" name="email" placeholder="Email ID">
        </div>
        <button name="submit" class="submit" type="submit">Submit</button>
    </form>
</div>
</body>

</html>