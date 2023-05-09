<?php
$Conn = new mysqli("localhost", "root", "", "intitute-app");
// echo "<pre>";
// print_r($Conn);
$SQL = "SELECT * FROM dynamicheaders LEFT JOIN `subheaders` ON dynamicheaders.id=subheaders.dynamicheader_id";
$ConEx = $Conn->query($SQL);
while ($data = $ConEx->fetch_array()) {
    $MainMenu[] = $data['name'];
}
$SQLSubHeader = "SELECT * FROM dynamicheaders JOIN `subheaders` ON dynamicheaders.id=subheaders.dynamicheader_id";
$SQLSubHeaderConEx = $Conn->query($SQLSubHeader);
while ($SubHeaderdata = $SQLSubHeaderConEx->fetch_array()) {
    $SubHeader[] = $SubHeaderdata;
}
// echo "<pre>";
// // print_r($MainMenu);
// // print_r($SubHeader);
// echo "<br>";

// echo "<br>";
foreach ($SubHeader as $subkey => $subvalue) {
    $subheaderdata[] = $subvalue['name'];
}
echo "<pre>";
print_r($subheaderdata);
foreach (array_unique($MainMenu) as $key => $value) {
    // if (in_array($value,$SubHeader)) {
        echo  $value;
        if (in_array($value, $subheaderdata)) {

            foreach ($SubHeader as $subkey => $subvalue) {
                if (in_array($value, $subvalue)) {
                    echo $subvalue['submenu'];
                    // print_r($subvalue['submenu']);
                }
            }
        }
    //     echo " inside ";
    // }
    // echo $value;
}
