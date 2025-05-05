<?php
    $path = "./";
    $page = "Web Hosting";
    include($path . "assets/header.php");
?>

    <main class="container">
        <h2>UNIX for Web Hosting</h2>
        <p>Due to their stability, security, and efficiency, many web servers run on UNIX-based operating systems such as Linux. Mastering basic tools and protocols used in UNIX environments is essential for web administrators and developers.</p>

        <div class="card">
            <h3>Popular UNIX Web Hosting Tools</h3>
            <ul>
            <li><strong>Apache & Nginx:</strong> Powerful and widely-used web servers.</li>
            <li><strong>SSH (Secure Shell):</strong> Secure command-line access to remote servers.</li>
            <li><strong>FTP & SFTP:</strong> Used to upload/download files between local machines and remote UNIX servers.</li>
            </ul>
        </div>

        <h3>File Permissions & Security</h3>
        <div class="card">
            <p>UNIX uses a permissions system to control access to files and directories. Permissions include:</p>
            <ul>
            <li><strong>r</strong> – read</li>
            <li><strong>w</strong> – write</li>
            <li><strong>x</strong> – execute</li>
            </ul>
            <p>Permissions are set for three user types: owner, group, and others.</p>
            <p><strong>Example:</strong> <code>chmod 755 index.html</code> — gives full permissions to the owner, and read/execute to group and others.</p>
            <p>Use <code>ls -l</code> to view permissions. Modify ownership with <code>chown</code>.</p>
        </div>

        <h3>SFTP & FTP Use</h3>
        <div class="card">
            <p><strong>FTP (File Transfer Protocol)</strong> and <strong>SFTP (Secure FTP)</strong> are tools for uploading/downloading files between machines. SFTP is encrypted and recommended for secure transfers.</p>

            <h4>Example: Using SFTP from Terminal</h4>
            <pre><code>sftp username@yourserver.com
                cd /var/www/html
                put index.html
                get logs.txt
                exit
            </code></pre>

            <h4>Example: FTP Command-Line</h4>
            <pre><code>ftp yourserver.com
                Username: youruser
                Password: ••••••
                cd /public_html
                put image.png
                bye
            </code></pre>

            <p>Graphical clients like FileZilla can also simplify the process of SFTP and FTP file transfers.</p>
        </div>

        <h3>SSH & Remote Access</h3>
        <div class="card">
            <p><strong>SSH (Secure Shell)</strong> is used to log into a remote server securely and perform terminal-based tasks.</p>
            <p><strong>Example:</strong> <code>ssh user@yourserver.com</code></p>
            <p>Once logged in, you can deploy websites, manage files, and even run services directly from your UNIX shell.</p>
            <p>SSH keys can be set up to enhance security and avoid entering your password each time.</p>
        </div>
    </main>

<?php
    include("assets/footer.php");
?>