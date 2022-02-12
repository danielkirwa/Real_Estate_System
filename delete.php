<?php
include('dbcon.php');


mysql_query("delete from candidate where CandidateID='$id'");


//mysql_query("INSERT INTO history (`data`,`action`,`date`,user)VALUES('$data_name', 'Deleted Candidate', '$pc_date $pc_time','Admin')"); 


?>