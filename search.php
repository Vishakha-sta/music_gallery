
<?php	include 'user_header.php'; ?>
<link rel="stylesheet" href="css/songs.css">
        <link rel="stylesheet" href="css/search.css">

        <form method="get" action="search_result.php">
            <div class="search_bar">
                <div class="col-3">
                    <input type="search" name="search" placeholder="Search">
                </div>
                <div class="col-1">
                    <button class="btn" type="submit">Search</button>
                </div>
            </div>
        </form>


        <p class="lead">Suggestions:
                        <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords.</li>
                            <li>Try fewer keywords.</li>
                        </ul>
                    </p>


        
        <?php	include 'footer.php'; ?>