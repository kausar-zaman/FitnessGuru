
<?php
/* Include database connection file */

require_once("inc/connection.inc.php");
$db_handle = new connection();

/* Starting Session */
session_start();

// Get full year date
$year = date('Y', time());
$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
$days = array(31,
    (strtotime("1 Mar " . $year) - strtotime("1 Feb " . $year)) / (24 * 60 * 60),
    31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
$wday = array('', '', '', '', '', '', '');
$cal = array();
foreach (range(0, 11) as $i) {
    $firstday = getdate(strtotime('1 ' . $months[$i] . ' ' . $year));
    $fromday = $firstday['wday'];
    $leftday = 7 - ($fromday + $days[$i]) % 7;
    $cal[] = array_merge(array_slice($wday, 0, $fromday),
        range(1, $days[$i]),
        array_slice($wday, 0, $leftday)
    );
}
$nowmo=date('n');
$nowdd=date('d');
$sql = 'SELECT * FROM course p1 where p1.date > Date(now())';
$res = $db_handle->runQuery($sql);
$index = [];
!empty($res) && $index = array_column($res, 'date');

foreach ($res as $v) {
    $dateData[$v['date']] = $v;
}
?>

<!DOCTYPE HTML>
<!-- Credit for template: www.html5templates.com -->
<html>
<head>

    <!--Header-->
    <title>Fitness Guru - Gym Calendar</title>
    <meta name="description" content="website description"/>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252"/>
    <link rel="stylesheet" type="text/css" href="style/book.css"/>
    <link rel="stylesheet" type="text/css" href="style/calendar.css"/>
    <link rel="stylesheet" type="text/css" href="style/footer.css"/>
    <style type="text/css">
        #site_content .box h1 {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>

<!--Links to pages -->
<div id="header">
    <div id="logo">
        <div id="logo_text">
            <link rel="icon" type="image/png" href="img/fgl1ogo.jpg"/>
            <h1>Fitness Guru</h1>
            <h2>We believe in transforming physique</h2>
        </div>
        <ul id="menu">
            <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
            <li class="selected"><a href="index.php"><b>Home</b></a></li>
            <li><a href="aboutus.php"><b>About Us</b></a></li>
            <li><a href="contactus.php"><b>Contact Us</b></a></li>
            <?php
            if (isset($_SESSION['username'])) {
                ?>
                <li><a href="account.php"><b>My Account </b></a></li>
                <li><a href="logout.php"><b>Logout</b></a></li>

                <?php
            } else {
                ?>
                <li><a href="signup1.php"><b>Join Today</b></a></li>
                <li><a href="login.php"><b>Login</b></a></li>

                <?php
            }
            ?>
        </ul>
    </div>
</div>
<body>


<div id="site_content">
<div class="pic">
<img src="img/gym1.jpg" width="720" height="400"></div>
<div class="box">

<!-- Calendar display -->
    <h2 align="center"><u><b>Calendar</b></u></h2>
        <h2 align="center">To book a class, simply click book on the class you wish to participate.</h2>
          <h2 align="center">All of our classes are free to our student, standard and senior members but there are limited spaces.</h2>
		  <h2 align="center">So book your classes as early as you can without missing out.</h2>
          <h6 align="center">Note: these classes are scheduled by the gym for a group training system.</h6>
<h6 align="center"> For 1-to-1 session, <a href="book.php">click here</a></h6>


        <?php foreach (range($nowmo-1, 11) as $i) : ?>
            <table style="width: 100%;">
                <thead>
                <tr>
                    <th colspan="7"><?php echo $months[$i] . ' ' . $year; ?></th>
                </tr>
                <tr>
                    <th width="14%">Sun</th>
                    <th width="14%">Mon</th>
                    <th width="14%">Tue</th>
                    <th width="14%">Wed</th>
                    <th width="14%">Thu</th>
                    <th width="14%">Fri</th>
                    <th width="14%">Sat</th>
                </thead>
                <tbody>
                <tr>
                    <?php
                       
                    foreach ($cal[$i] as $k => $v) {
                        if ($k && !($k % 7)) echo "</tr><tr>";
                        echo '<td>';
                        echo "<b style='font-size:21px;display:block;width:100%;text-align:center'>{$v}</b>";
                       
                        $curDate = date('Y-m-d', strtotime($year.'-'.($i + 1).'-'.$v));
                        if (in_array($curDate, $index)) {
                            echo "<div style='border-bottom:1px solid white;text-align:center'>Course name:{$dateData[$curDate]['course_name']}</div>";
                            echo "<div style='border-bottom:1px solid white;text-align:center'>Time:{$dateData[$curDate]['time']}</div>";
                            echo "<div style='border-bottom:1px solid white;text-align:center'>Remaining amount:<b data-id='{$dateData[$curDate]['id']}' class='booknum'>{$dateData[$curDate]['num']}</b></div>";
                            echo "<div style='border-bottom:1px solid white;text-align:center'>trainer:{$dateData[$curDate]['trainer']}</div>";
                            echo "<button data-id='{$dateData[$curDate]['id']}' class='bookbtn' style='display:block;width:100%;padding:5px 0px;background-color:orange;color:white'>Book</button>";
                        }
                          
                        echo '</td>';
                    }
                    ?>
                </tr>
                </tbody>
            </table>
        <?php endforeach ?>
    </div>
</div>
</body>


<!--Footer-->
<div id="footer">
    <div class="col1">
        <img src="img/fglogo.jpg" width="177" height="106"><br/>
        <p>Copyright &copy; 2018 Fitness Guru Inc. </p>
        <p>&nbsp;</p>
    </div>
    <div class="col2">
        <h1>Join us on social media</h1>
        <p align="left"><u><strong><a href="http://www.facebook.com"><img src="img/fb.png" width="50" height="50"></a>Facebook</strong></u>
        </p>
        <p align="left"><strong><u><a href="http://twitter.com"><img src="img/twitter.png" width="50" height="50"></a>Twitter</u></strong>
        </p>
        <p align="left"><strong><u><a href="http://www.instagram.com"><img src="img/ig.png" width="50" height="50"></a>Instagram</u></strong>
        </p>
        <p align="left"><strong><u><a href="http://www.youtube.com"><img src="img/youtube.png" width="50"
                                                                         height="50"></a>YouTube</u></strong></p>
    </div>
</div>

<!-- Calendar booking script -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $('.bookbtn').click(function () {
        var id = $(this).attr('data-id');

        $.post(
            'calendarApi.php',
            {action: 'book', id: id},
            function (res) {
                if (res.status == 1) {
                    var allbutton = document.getElementsByTagName("button")
                    for (var i = 0; i < allbutton.length; i++) {
                        var bt = allbutton[i]
                        if (bt.getAttribute("data-id")) {
							
							
                            var oid = bt.getAttribute("data-id");
                            if (oid == id) {
								alert("Your place for this class has been booked.");
                                bt.innerText = "Class Booked";
                                bt.style.backgroundColor = "gray";
                            }
                        }
                    }
                    var allnum = document.getElementsByClassName("booknum")
                    for (var i = 0; i < allnum.length; i++) {
                        var nt = allnum[i]
                        if (nt.getAttribute("data-id")) {
                            var nid = nt.getAttribute("data-id");
                            if (nid == id) {
                                nt.innerText = parseInt(nt.innerText) - 1;
                            }
                        }
                    }
                } else {
                    alert(res.msg);
                }
            },
            'json'
        );
    });
    $.post(
        'calendarApi.php',
        { action: 'select'},
        function (res) {
            var allbutton = document.getElementsByTagName("button")
            for (var i = 0; i < allbutton.length; i++) {
                var bt = allbutton[i]
                if (bt.getAttribute("data-id")) {
                    var id=bt.getAttribute("data-id");
                    var fob = res.msg.find(function (p) { return p.course_id == id });
                    if (fob) {
                        bt.innerText = "Class Booked";
                        bt.style.backgroundColor = "gray";
                    }
                }
            }
          
        },
        'json'
    );
</script>

</html>