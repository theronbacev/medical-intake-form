
<?php
$link = mysqli_connect("localhost", "root", "", "pharmacy");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['ema'];
$city = $_POST['ci'];
$province = $_POST['prov'];
$postcode = $_POST['pcode'];
$docname = $_POST['dname'];
$docity = $_POST['dcity'];
$doccountry = $_POST['dcountry'];
$docid = $_POST['did'];
$perscription = $_POST['med'];
$dosage = $_POST['dos'];
$quantity = $_POST['quan'];

$query  = "INSERT INTO `pharmacy`.`customer` (`firstname`, `lastname`, `email`, `city`, `province`, `postcode`) 
VALUES ('$firstname','$lastname','$email','$city','$province','$postcode');";
$query  .= "INSERT INTO `pharmacy`.`doctor` (`doctorname`, `doctorcity`, `doctorcountry`, `doctorid`) VALUES ('$docname', '$docity', '$doccountry', '$docid');";
$query  .= "INSERT INTO `pharmacy`.`medication` (`perscriptions`, `dosage(mg)`, `quantities`) VALUES ('$perscription', '$dosage', '$quantity');";


/* execute multi query */
if (mysqli_multi_query($link, $query)) {
    do {
        /* store first result set */
        if ($result = mysqli_store_result($link)) {
            while ($row = mysqli_fetch_row($result)) {
                printf("%s\n", $row[0]);
            }
            mysqli_free_result($result);
        }
    } while (mysqli_next_result($link));
    echo"Form has been submitted";
}

/* close connection */
mysqli_close($link);
?>