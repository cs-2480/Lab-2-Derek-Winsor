<nav class="rcorners">
    <ol>
        <?php
        print '<li class="';
        if ($path_parts['filename'] == "index") {
            print ' activePage ';
        }
        print '">';
        print '<a href = "index.php">Index</a>';
        print '</li>';

        
        print '<li class="';
        if ($path_parts['filename'] == "page-2") {
            print ' activePage ';
        }
        print '">';
        print '<a href = "page-2.php">Ocean Trash Info</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "page-3") {
            print ' activePage ';
        }
        print '">';
        print '<a href = "page-3.php">Form Page</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "page-4") {
            print ' activePage ';
        }
        print '">';
        print '<a href = "page-4.php">How to Take Action</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "contest") {
            print ' activePage ';
        }
        print '">';
        print '<a href = "contest.php">Contest</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "sql") {
            print ' activePage ';
        }
        print '">';
        print '<a href = "sql.php">Form Table</a>';
        print '</li>';
        ?>
    </ol>
</nav>

