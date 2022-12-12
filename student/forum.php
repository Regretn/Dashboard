<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

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
            <li>
                <a href="evaluation.php">
                    <i class='bx bxs-group'></i>
                    <span class="text">Evaluation</span>
                </a>
            </li>
            <li class="active">
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
                    <span href="./inc/logout.php" class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <?php include_once './sidebar/sidebar.php'; ?>

    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <h1>This is the forum page</h1>

    </main>
    <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>