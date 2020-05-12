<?php

include "db_connection.php";
include "functions.php";

$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$link) {
    die ("Error " . mysqli_connect_error());
}

insertData($firstname, $lastname, $email, $age, $country);

$result = mysqli_query($link, "SELECT * FROM users");

mysqli_close($link);

?>
<main>
    <h1>Procedural page</h1>
    <div class="content">
        <section class="form">
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="firstname">First Name:</label>
                        <input type="text" name="firstname" id="firstname">
                    </li>
                    <li>
                        <label for="lastname">Last Name:</label>
                        <input type="text" name="lastname" id="lastname">
                    </li>
                    <li>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email">
                    </li>
                    <li>
                        <label for="age">Age:</label>
                        <input type="text" name="age" id="age">
                    </li>
                    <li>
                        <label for="country">Country:</label>
                        <input type="text" name="country" id="country">
                    </li>
                    <input type="submit" name="submit" value="Send!!!">
                </ul>
            </form>
        </section>
        <section class="result">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["firstname"]; ?></td>
                        <td><?php echo $row["lastname"]; ?></td>
                        <td><a href="mailto:<?php echo $row["mail"]?>" target="_blank"><?php echo $row["email"]; ?></a></td>
                        <td><?php echo $row["age"]; ?></td>
                        <td><?php echo $row["country"]; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </div>
</main>