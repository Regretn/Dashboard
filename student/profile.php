<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

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
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <?php include_once './sidebar/sidebar.php'; ?>

    <!-- NAVBAR -->

    <!-- MAIN -->
    <main class="dashboard">
        <div class="both-rows">
            <div class="column left-side" style="background-color: rgb(255, 255, 255)">
                <div class="user-image">
                    <img src="luffy.jpg" id="photo" />
                    <input type="file" id="file" />
                    <button id="uploadbtn" class="icon-btn add-btn" onclick="importData()">
                        <div class="add-icon"></div>
                        <div class="btn-txt"><b>Add Photo</b></div>
                    </button>
                </div>
                <p></p>
            </div>
            <div class="column right-side" style="background-color: rgb(255, 255, 255)">
                <h1>My profile</h1>
                <form onsubmit="" class="flex flex-col gap-1 w-auto">
                    <div class="flex flex-row gap-1">
                        <div class="">
                            <p>FIRST NAME</p>
                            <input class="bg-gray no-border round-sm p-1" type="text" value="" />
                        </div>
                        <div class="">
                            <p>LAST NAME</p>
                            <input class="bg-gray no-border round-sm p-1" type="text" value="" />
                        </div>
                        <div class="">
                            <p>M</p>
                            <input class="bg-gray no-border round-sm p-1" type="text" value="L" class="w-1rem" />
                        </div>
                    </div>
                    <div class="flex flex-row gap-1">
                        <div class="">
                            <p>ADDRESS</p>
                            <input class="bg-gray no-border round-sm p-1" type="text" value="" />
                        </div>
                        <div class="">
                            <p>PHONE</p>
                            <input class="bg-gray no-border round-sm p-1" type="text" value="" />
                        </div>
                    </div>
                    <div class="">
                        <p>EMAIL ADDRESS</p>
                        <input class="bg-gray no-border round-sm p-1" type="text" value="" class="" />
                    </div>
                    <div class="flex flex-col"></div>
                    <h2>ENROLLMENT AUTHENTICATION</h2>
                    <div>
                        <p>SCHOOL/UNIVERSITY</p>
                        <input class="bg-gray no-border round-sm p-1" type="text" value="" />
                    </div>
                    <div>
                        <p>NAME</p>
                        <input class="bg-gray no-border round-sm p-1" type="text" value="" />
                    </div>
                    <div class="flex flex-row gap-2">
                        <div>
                            <p>LRN</p>
                            <input class="bg-gray no-border round-sm p-1" type="text" value="" />
                        </div>
                        <div>
                            <p>S.Y</p>
                            <input class="bg-gray no-border round-sm p-1" type="text" value="" />
                        </div>
                    </div>
                    <div class="flex flex-row gap-2 justify-content-center">
                        <button class="no-border text-white round-sm bg-green p-1">
                            <b>EDIT PROFILE</b>
                        </button>
                        <button class="no-border text-white round-sm bg-green p-1">
                            <b>SAVE CHANGES</b>
                        </button>
                    </div>
                </form>
                <p></p>
            </div>
        </div>
        </div>
    </main>
    <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
    <script src="index.js"></script>

</body>

</html>