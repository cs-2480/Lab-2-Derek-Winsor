<?php
include('top.php');
?>
<html>
    
        <?php
        $sql = 'SELECT fldStateId, fldState, fldJoined from tblCS2480_lab_2_states';

        $statement = $pdo->prepare($sql);
        $statement->execute();
        $rows = $statement->fetchAll();

        print '<select name="userState" size="5">';
        foreach ($rows as $row) {
            print '<option>' . $row['fldState'] . '</option>';
        }
        print '</select>';
    
        ?>

        
        <?php
        include('footer.php');
        ?>
</body>
</html>

