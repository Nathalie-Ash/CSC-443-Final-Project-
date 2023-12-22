<?php
session_start();
if (($_SESSION["username"]) != "admin") {
    header("location:../index.php");
}
?>
<?php
$dbhost = "127.0.0.1";
$dbname = "bookingsystem";
$dbuser = "root";
$dbpass = "";
$db = null;
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function FetchUsers()
{
    $dbhost = "127.0.0.1";
    $dbname = "bookingsystem";
    $dbuser = "root";
    $dbpass = "";
    $db = null;
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    $query = "SELECT id, username, email FROM user WHERE username != 'admin'";
    $stmt = $db->query($query);
    $a_users = array();
    while ($obj = $stmt->fetch(PDO::FETCH_OBJ)) {
        $a_users[] = $obj;
    }
    return $a_users;
}


function FetchTestimonials()
{
    $dbhost = "127.0.0.1";
    $dbname = "bookingsystem";
    $dbuser = "root";
    $dbpass = "";
    $db = null;
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    $query = "SELECT  id,username, testimonial FROM testimonial WHERE username != 'admin'";
    $stmt = $db->query($query);
    $t_users = array();
    while ($obj = $stmt->fetch(PDO::FETCH_OBJ)) {
        $t_users[] = $obj;
    }
    return $t_users;
}



?>

<?php

$a_users = FetchUsers();
$t_users = FetchTestimonials();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Additional CSS for the "Add User" link */
        .add-user-button {
            display: inline-block;
            padding: 5px 10px;
            background-color: #009688;
            color: white;
            text-decoration: none;
            border: 1px solid #009688;
            border-radius: 3px;
            cursor: pointer;
            /* transition: background-color 0.3s; */
            /* margin-left: 23%; */
            margin-top: 0;
        }

        /* .add-user-button:hover {
            background-color: #00796b;
        } */

        /* CSS for the "Change Password" link */
        .change-password-link {
            display: inline-block;
            padding: 5px 10px;
            background-color: #009688;
            color: white;
            text-decoration: none;
            border: 1px solid #009688;
            border-radius: 3px;
            cursor: pointer;
        }

        .change-password-link:hover {
            background-color: #009688;
            text-decoration: none;
            color: white;
            /* Change Password text color */
        }

        /* Remove underline from all links */
        .admin-table a {
            text-decoration: none;
            color: #009688;
        }

        /* Delete button styles */
        .delete-button {
            padding: 5px 10px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
<div id ="userDiv" style="margin-bottom: 50px; color: black">
        <?php if (isset($_SESSION["username"])) : ?>
            <p>Welcome, <?php echo $_SESSION["username"]; ?></p>
            <p><a href="../BE/logout.php" id="logOut">Logout</a></p>
        <?php endif; ?>
    </div>

    <div class="admin-table">

        <h3>Admin View of the Users</h3>
        <a href="add_user_form.php" class="add-user-button" style="color: white;margin-bottom:1%">Add User</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($a_users as $user) : ?>
                    <tr>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td>
                            <form name="FrmDelete" class="FrmDelete" method="post" action="deleteUser.php">
                                <input type="hidden" name="id" value="<?php echo $user->id; ?>">
                                <button type="submit">Delete</button>
                            </form>
                            <a href="modify_user_form.php" class="change-password-link" style="color: white; text-decoration: none;">Change Password</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="admin-table">
        <h3>Admin View of the User Testimonials</h3>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Testimonial</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($t_users as $testimonial) : ?>
                    <tr>
                        <td><?php echo $testimonial->username; ?></td>
                        <td><?php echo $testimonial->testimonial; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>



</body>

</html>