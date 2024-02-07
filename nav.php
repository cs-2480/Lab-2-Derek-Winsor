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
        if ($path_parts['filename'] == "form") {
            print ' activePage ';
        }
        print '">';
        print '<a href = "form.php">Form Table</a>';
        print '</li>';
        ?>
    </ol>
</nav>

