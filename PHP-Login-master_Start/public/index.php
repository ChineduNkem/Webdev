<?php require_once '../template/header.php';?>
<title>Home page</title>
</head>


<body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contacts.php">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">PHP Login exercise - Home page</h3>
      </div>

        <div class="mainarea">
                <h1>Welcome <?php echo htmlspecialchars($_SESSION['Username'] ?? 'Guest'); ?></h1>
                <p class="lead">You are successfully logged in</p>

                <form action="logout.php" method="post">
                    <button type="submit" class="button">Log out</button>
                </form>
              </div>

      <div class="row marketing">
        <div>
          <h4>Home page</h4>
          <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>

       </div>

          <?php require_once '../template/footer.php';?>
