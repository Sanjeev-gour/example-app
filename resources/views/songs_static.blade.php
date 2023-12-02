<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header, main, footer {
            padding: 20px;
            background-color: #f0f0f0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        main {
            display: grid;
            grid-template-columns: 1fr 3fr;
            gap: 20px;
        }

        sidebar {
            /* Style your sidebar here */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }

        form {
            display: grid;
            gap: 10px;
            margin-top: 20px;
        }

        input, select, button {
            padding: 10px;
        }

        button {
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <h1>Playlist Title</h1>
        <div>
            <a href="#">Edit Playlist</a>
            <a href="#">New Playlist</a>
        </div>
    </header>

    <main>
        <sidebar>
            <!-- Playlist list goes here -->
        </sidebar>

        <div>
            <table>
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Song Title</th>
                        <th>Artist Name</th>
                        <th>Album Name</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Song rows go here -->
                </tbody>
            </table>

            <form>
                <label for="playlistName">Playlist Name</label>
                <input type="text" id="playlistName" name="playlistName">

                <label for="songList">Select Song</label>
                <select id="songList" name="songList">
                    <option value="song1">Song 1</option>
                    <option value="song2">Song 2</option>
                    <!-- Add more options as needed -->
                </select>

                <button type="button">Save Playlist</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Your Company | <a href="#">About</a> | <a href="#">Contact</a></p>
    </footer>
</body>

</html>
