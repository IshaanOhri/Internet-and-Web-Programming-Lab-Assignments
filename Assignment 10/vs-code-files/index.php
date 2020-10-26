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
    $sql = "INSERT INTO addresses(emailid, name, designation, address1, address2, city, state) VALUES('$email', '$name', '$designation', '$add1', '$add2',
'$city', '$state')";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="success">
 Added Successfully !
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
        <span><a href="index.php"><button>New</button></a></span>
        <span><a href="update.php"><button class='disabled'>Update</button></a></span>
        <span><a href="delete.php"><button class='disabled'>Delete</button></a></span>
        <span><a href="search.php"><button class='disabled'>Search</button></a>
        </span>
    </div>
    <form action="index.php" method='POST'>
        <h2>New Entry</h2>
        <div class="name">
            <input required id="name" type="text" name="name" placeholder="Name">
        </div>
        <div class="designation">
            <input required id="designation" type="text" name="designation" placeh older="Designation">
        </div>
        <div class="add1">
            <input required id="add1" type="text" name="add1" placeholder="Address1">
        </div>
        <div class="add2">
            <input required id="add2" type="text" name="add2" placeholder="Address2">
        </div>
        <div class="city">
            <input required id="city" type="text" name="city" placeholder="City">
        </div>
        <div class="state">
            <input required id="state" type="text" name="state" placeholder="State">
        </div>
        <div class="email">
            <input required id="email" type="email" name="email" placeholder="Email ID">
        </div>
        <button name="submit" class="submit" type="submit">Submit</button>
    </form>
</div>
</body>

</html>