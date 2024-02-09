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
    
        




        $dataIsGood = false;

        function getData($field) {
            if (!isset($_POST[$field])) {
                $data = "";
            } else {
                $data = trim($_POST[$field]);
                $data = htmlspecialchars($data);
            }
            return $data;
        }

        ?>


    <main>
        <section id="formSubmission">
        <?php
        if ($_POST['btnSubmit']) {

            $dataIsGood = true;

            // Server side Sanatize values
            
            $email = getData("txtEmail");
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            

            
            if ($email == "") {
                print '<p class="mistake">Please enter your email address</p>';
                $dataIsGood = false;
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                print '<p class="mistake">Your email address appears to be invalid</p>';
                $dataIsGood = false;
            }



            if ($dataIsGood) {
                print '<p>DATA IS GOOD</p>';
            } else {
                print '<p>DATA NOT GOOD</p>';
            }



            if ($dataIsGood) {
                // save the data
                try {
                    $sql = 'INSERT INTO tblCS2480_UserInfo(fldEmail, fldState) VALUES (?, ?)';
                    $statement = $pdo->prepare($sql);
                    $params = [$email, $state];
                    $statement->execute($params);
                    print '<p>record was successfully inserted.</p>';
                } catch (PDOException $e) {
                    print '<p>Error inserting data</p>';
                    $dataIsGood = false;
                } //end try
            } // ends data is good
        } // ends form was submitted
        // if the data is good we will email the person and display a message, 
        // otherwise we display the form
        if ($dataIsGood) {
            $to = $email;
            $from = 'Derek Winsor <winsor.derek@gmail.com>';
            $subject = 'Form submission succesfull';
            $mailMessage = '<p style ="color: rgba(4,141,69, .9); font-size: 16px">Thank you using my website!</p> <br> <p style="font-size: 12px;">Derek Winsor</p>';
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n";
            $headers .= "From: " . $from . "\r\n";


            $mailedSent = mail($to, $subject, $mailMessage, $headers);

            if ($mailedSent) {
                print "<p>EMail sent successfully</p>";
            }

            print '<h2>Thank you, information saved properly</h2>';

            die();
        }
        ?>


        
        <article id="grid-item-TLong-Form">
            <form action = "<?php print $phpSelf; ?>"
                  id = "frmRegister"
                  method = "post">

                <fieldset>
                    <p>
                        <label for="txtEmail">Email:</label>
                        <input type="text" name="txtEmail" id="txtEmail">
                    </p>
                </fieldset>
                <fieldset>
                    <legend>Please select your state</legend>
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
                </fieldset>
                <input type="submit" value="Submit" name="btnSubmit">
            </form>
        </article>

        <?php
        include('footer.php');
        ?>
</body>
</html>

