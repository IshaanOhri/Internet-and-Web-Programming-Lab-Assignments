<?php
include('db_connect.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $sql = "UPDATE addresses
 SET emailid = '$email', designation= '$designation', address1= '$add1',
address2= '$add2', city= '$city', state= '$state'
 WHERE name = '$name'";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="success">
 Updated Successfully !
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
        <span><a href="index.php"><button class="disabled">New</button></a></spa n>
            <span><a href="update.php"><button>Update</button></a></span>
            <span><a href="delete.php"><button class="disabled">Delete</button></a>
            </span>
            <span><a href="search.php"><button class='disabled'>Search</button></a>
            </span>
    </div>
    <form action="update.php" method='POST'>
        <h2>Update Entry</h2>
        <div class="name">
            <input id="name" type="text" name="name" placeholder="Name">
        </div>
        <div class="designation">
            <input id="designation" type="text" name="designation" placeholder="De
signation">
        </div>
        <div class="add1">
            <input id="add1" type="text" name="add1" placeholder="Address 1">
        </div>
        <div class="add2">
            <input id="add2" type="text" name="add2" placeholder="Address 2">
        </div>
        <div class="city">
            <input id="city" type="text" name="city" placeholder="City">
        </div>
        <div class="state">
            <input id="state" type="text" name="state" placeholder="State">
        </div>
        <div class="email">
            <input id="email" type="email" name="email" placeholder="Email ID">
        </div>
        <button name="submit" class="submit" type="submit">Submit</button>
    </form>
</div>
</body>

</html>