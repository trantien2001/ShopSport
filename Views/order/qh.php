<option value="">==> Chọn quận huyện <==</option>
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
    $query = "SELECT * FROM  district WHERE _province_id = ".$_POST['province_id']." ORDER BY _name";
    $result = $con->query($query);
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    foreach($data as $value){
        echo '<option value="'.$value['id'].'">'.$value['_name'].'</option>';
    }
?>