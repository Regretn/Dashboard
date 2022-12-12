<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="teacher.css?v=<?php echo time(); ?>">


    <title>Teacher Evaluation Teacher</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand" style="justify-content: center;">
            <img src="./img/test.png">
        </a>
        <ul class="side-menu top">
            <li>
                <a href="index.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="">
                    <i class='bx bxs-group'></i>
                    <span class="text">Evaluation</span>
                </a>
            </li>
            <li>
                <a href="forum.php">
                    <i class='bx bxs-message-alt-dots'></i>
                    <span class="text">Forum</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="../inc/logout.php" class="logout">
                    <i class='bx bxs-log-out'></i>
                    <span class="text">Logout</a>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <?php include_once './sidebar/sidebar.php'; ?>

    <!-- MAIN -->
    <main class="evaluation">
        <?php

        $id = $user_data["year"];
        $sql = "SELECT * FROM teacher;";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="card">
                    <div class="image">
                        <img src="https://i.pinimg.com/736x/2a/db/c1/2adbc1009f2a9b074ee09be620be0568.jpg?> alt="">
            </div>
            <div class=" capt">

                        <p class="name"><?php echo $row["name"]; ?></del></p>
                        <p class="price"><b><?php echo $row["password"]; ?></b></p>
                        <p class="description"><b><?php echo $row["description"]; ?></b></p>

                        <?php
                        echo  "<td><a href=\"../student/evaluation/evaluate.php?var= {$row['teacher_id']} \">Evaluate</a></td>";
                        ?>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "There are no users";
        }
        ?>

    </main>

    <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>