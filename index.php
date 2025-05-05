<?php
        $path = "./";
        $page = "noFlightSchool";
        include($path . "assets/header.php");
?>
    <main>
        <section class="hero">
            <div class="hero-text">
                <h2>Welcome to noFlightSchool</h2>
                <button onclick="location.href='getting-started.php'">Get Started</button>
            </div>
            <div class="hero-img">
                <img src="images/penguin.png" alt="Terminal Display" />
            </div>
        </section>

        <section class="info-cards">
            <div class="card">
                <h3>What is UNIX?</h3>
                <p>Learn about the origins, architecture, and long-standing influence of UNIX on modern systems like Linux and macOS.</p>
                <button onclick="location.href='what-is-unix.php'">Read More</button>
            </div>
            <div class="card">
                <h3>Getting Started</h3>
                <p>Master essential UNIX commands and understand how to navigate its powerful file system with ease.</p>
                <button onclick="location.href='getting-started.php'">Read More</button>
            </div>
            <div class="card">
                <h3>Web Hosting with UNIX</h3>
                <p>Discover how UNIX powers the web, and learn to use SSH, SFTP, and file permissions to manage a server.</p>
                <button onclick="location.href='web-hosting.php'">Read More</button>
            </div>
        </section>
    </main>


    
<?php
    include("assets/footer.php");
?>