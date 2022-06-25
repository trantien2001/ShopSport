<option value="">==> Chọn phường xã <==</option>
<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'bandothethao';
    $con = new mysqli($server, $user, $pass, $db);
    $con->set_charset('utf8');
    if($con->connect_error) {
        die('Connect failed: ' . $con->connect_error);
    }
    $query = "SELECT * FROM  ward WHERE _district_id = ".$_POST['district_id']." ORDER BY _name";
    $result = $con->query($query);
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    foreach($data as $value){
        echo '<option value="'.$value['id'].'">'.$value['_name'].'</option>';
    }
?>