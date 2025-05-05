<?php
    $path = "./";
    $page = "Leaderboard";
    include($path . "assets/header.php");
?>

    <main class="container">
        <h2>Leaderboard</h2>
        <p>See how you rank against other quiz takers.</p>

        <div class="card">
            <table>
                <thead>
                    <tr>
                    <th>Rank</th>
                    <th>Username</th>
                    <th>Score</th>
                    </tr>
                </thead>
                <tbody id="leaderboard-body">
                    <!-- Entries will be inserted here -->
                </tbody>
            </table>
        </div>
    </main>

<?php
    include("assets/footer.php");
?>

    <script>
        // Sample leaderboard data (will later come from quiz page)
        const leaderboardData = [
            { username: 'rootMaster', score: 100 },
            { username: 'unixFan99', score: 92 },
            { username: 'cli_wizard', score: 88 },
            { username: 'terminalTuna', score: 76 },
        ];

        // Sort and render leaderboard
        const tbody = document.getElementById('leaderboard-body');
        leaderboardData
            .sort((a, b) => b.score - a.score)
            .forEach((entry, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${entry.username}</td>
                <td>${entry.score}</td>
            `;
            tbody.appendChild(row);
            });
    </script>