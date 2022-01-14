<header class="header" id="header">
    <div class="header_toggle"> <span class="material-icons" id="header-toggle">&#xe5d2;</span> </div>
    <div class="header_img"> <img src="img/user.png" alt=""> </div>
</header>

<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div class="items-nav">

            <a href="dashboard" class="nav_logo"> <span class="material-icons nav_logo-icon">&#xe86f;</span> <span class="nav_logo-name">Girl Power in Code</span> </a>

            <div class="nav_list">
                <a href="dashboard" title="Dashboard" class="nav_link <?php if ($page == 'dashboard') echo 'active' ?>"> <span class="material-icons nav_icon">&#xe9b0;</span> <span class="nav_name">Dashboard</span> </a>

                <a href="exercise3" title="Exercise 3" class="nav_link <?php if ($page == 'exercise3') echo 'active' ?>"> <span class="material-icons nav_icon">&#xe87e;</span> <span class="nav_name">Exercise 3</span> </a>

                <a href="exercise4" title="Exercise 4" class="nav_link <?php if ($page == 'exercise4') echo 'active' ?>"> <span class="material-icons nav_icon">&#xe87e;</span> <span class="nav_name">Exercise 4</span> </a>

                <a href="exercise5" title="Exercise 5" class="nav_link <?php if ($page == 'exercise5') echo 'active' ?>"> <span class="material-icons nav_icon">&#xe87e;</span> <span class="nav_name">Exercise 5</span> </a>

            </div>

        </div>

        <a href="#" title="Cerrar Sesión" class="nav_link"> <span class="material-icons nav_icon">&#xe9ba;</span> <span class="nav_name">Cerrar sesión</span> </a>
    </nav>
</div>