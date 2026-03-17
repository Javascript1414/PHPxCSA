<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="lightblue">
    <center>
        <?php
        $soumo=array(
            array("1","Soumo das","CSA","West Bengal"),
            array("2","Satyarth Kumar","CSE","BIHAR"),
array("3","Sribas Das","CSA","WEST BENGAL"),
array("4","Bikash Santra","CSA","WEST BENGAL"),
array("5","Tamal Santra","CSA","UTTAR PRADESH"),
array("6","Soumi Dolui","CSA","MADHYA PRADESH"),
array("7","Amit Sharma","CSE","DELHI"),
array("8","Priya Singh","ECE","PUNJAB"),
array("9","Riya Das","CSA","ASSAM"),
array("10","Ankit Verma","CSE","RAJASTHAN"),
array("11","Neha Gupta","ECE","HARYANA"),
array("12","Arjun Roy","CSA","WEST BENGAL"),
array("13","Kiran Patel","CSE","GUJARAT"),
array("14","Pooja Kumari","ECE","BIHAR"),
array("15","Vikram Singh","CSA","UTTAR PRADESH"),
array("16","Suman Das","CSE","WEST BENGAL"),
array("17","Deepak Yadav","ECE","BIHAR"),
array("18","Rohit Sharma","CSA","DELHI"),
array("19","Sneha Roy","CSE","WEST BENGAL"),
array("20","Aakash Singh","ECE","UTTAR PRADESH"),
array("21","Nitu Kumari","CSA","BIHAR"),
array("22","Manish Gupta","CSE","RAJASTHAN"),
array("23","Komal Verma","ECE","DELHI"),
array("24","Anjali Das","CSA","ASSAM"),
array("25","Sumit Kumar","CSE","BIHAR"),
array("26","Rakesh Singh","ECE","PUNJAB"),
array("27","Payal Roy","CSA","WEST BENGAL"),
array("28","Tarun Sharma","CSE","HARYANA"),
array("29","Divya Patel","ECE","GUJARAT"),
array("30","Nikhil Yadav","CSA","UTTAR PRADESH"),
array("31","Meena Kumari","CSE","BIHAR"),
array("32","Rajesh Das","ECE","ASSAM"),
array("33","Sonu Singh","CSA","DELHI"),
array("34","Kajal Roy","CSE","WEST BENGAL"),
array("35","Alok Kumar","ECE","BIHAR"),
array("36","Rekha Sharma","CSA","RAJASTHAN"),
array("37","Vivek Gupta","CSE","DELHI"),
array("38","Soniya Verma","ECE","HARYANA"),
array("39","Pankaj Das","CSA","ASSAM"),
array("40","Ritu Singh","CSE","PUNJAB"),
array("41","Gaurav Yadav","ECE","UTTAR PRADESH"),
array("42","Shreya Roy","CSA","WEST BENGAL"),
array("43","Abhishek Kumar","CSE","BIHAR"),
array("44","Monika Sharma","ECE","DELHI"),
array("45","Sourav Das","CSA","WEST BENGAL"),
array("46","Naveen Singh","CSE","RAJASTHAN"),
array("47","Tina Roy","ECE","ASSAM"),
array("48","Harsh Kumar","CSA","BIHAR"),
array("49","Simran Kaur","CSE","PUNJAB"),
array("50","Aditya Verma","ECE","DELHI"),
array("51","Sribas","DCS","WB"),
array("52","Rinku","CSA","up")
        );
        $record=isset($_GET['record'])?$_GET['record']:1;
        $perpage=3;
        $tp=ceil(count($soumo)/$perpage);
        $sribas=($record-1)* $perpage;
        $Gobind=array_slice($soumo,$sribas,$perpage);
        ?>
        <table border="5">
            <tr>
                <th>Roll_No</th>
                    <th>Name</th>
                        <th>Trade</th>
                            <th>State</th>
</tr>
<?php
foreach ($Gobind as $sribas):
    ?>
    <tr align="middle">
        <td><?php echo $sribas[0] ?></td>
        <td><?php echo $sribas[1] ?></td>
        <td><?php echo $sribas[2] ?></td>
        <td><?php echo $sribas[3] ?></td>
</tr>
<?php endforeach;
?>
</table>
</center>

<div>
    <?php
    for ($a=1; $a <= $tp; $a++):
        ?>
        <?php
    if ($a==$record):?>
    <strong>
        <?php
        echo $a;
        ?>
        </strong>
        <?php
        else:
            ?>
            <a href="?record=<?php echo $a ?>">
                <?php echo $a;?></a>
                <?php
                endif;
                ?>
                <?php
                endfor;
                ?>
                </div>
    
</body>
</html>