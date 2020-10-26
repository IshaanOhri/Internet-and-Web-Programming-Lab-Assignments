<?php
include('db_connect.php');
?>
<?php include 'header.php' ?>
<div class="form-container">
    <div class="btns">
        <span><a href="index.php"><button class="disabled">New</button></a></spa n>
            <span><a href="update.php"><button class="disabled">Update</button></a>
            </span>
            <span><a href="delete.php"><button class="disabled">Delete</button></a>
            </span>
            <span><a href="search.php"><button>Search</button></a></span>
    </div>
    <form action="search.php" method='POST'>
        <h2>Search Entry</h2>
        <div class="email">
            <input id="email" type="email" name="email" placeholder="Email ID">
        </div>
        <button name="submit" class="submit" type="submit">Submit</button>
    </form>
</div>
<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $sql = "SELECT * from addresses WHERE emailid= '$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $address = mysqli_fetch_assoc($result);
        echo "<table>
 <tr>
 <th>Name</th>
 <th>Email ID</th>
 <th>Designation</th>
 <th>Address 1</th>
 <th>Address 2</th>
 <th>City</th>
 <th>State</th>
 </tr>
 <tr>
 <td>" . $address['name'] . "</td>
 <td>" . $address['emailid'] . "</td>
 <td>" . $address['designation'] . " </td>
 <td>" . $address['address1'] . "</td>
 <td>" . $address['address2'] . "</td>
 <td>" . $address['city'] . "</td>
 <td>" . $address['state'] . "</td>
 </tr>
 </table>";
    } else {
        echo '<div class="error">
 Error : ' . mysqli_error($conn) . '
 </div>';
    }
}
?>
</body>

</html>