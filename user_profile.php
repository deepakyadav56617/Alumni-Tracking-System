<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User_Profile</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
   <style> 
    body{
  background: #DAE3E7;
}

.row{
  margin-top: 40px;
}


html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
div.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.1);
}

.header {
  padding: 10px 0;
  background: #f5f5f5;
  border-top: 3px solid #3AAA64;
}

.list-group {
    list-style: disc inside;

}

.list-group-item {
    display: list-item;
}

 .find-more{
   text-align: right;
 }


.label-theme{
  background: #3AAA64;
  font-size: 14px;
  padding: .3em .7em .3em;
  color: #fff;
  border-radius: .25em;
}

.label a{
  color: inherit;
}
       #bio{
           padding-left: 10px;
           padding-right: 10px;
           padding-bottom: 10px;
       }
    </style>
</head>


<body>
  <?php include('originalroll.php') ?>    
  <?php
  
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "Pratyush.123";
  $dbname= "test";
  $connection= new mysqli($host,$dbusername,$dbpassword,$dbname);
  if(mysqli_connect_error()){
      die('Connection Error ('.mysqli_connect_errno .')'.mysqli_connect_error);
  }
  else{
      $select = "SELECT biography,email,high,grad,other,currentposition,currentcompany From profile Where rollnumber = $roll LIMIT 1";
      $stmt = $connection->prepare($select);
      $stmt->execute();
      $stmt->store_result();
      $stmt->bind_result($bio,$email,$high,$grad,$other,$currpos,$currcomp);
      $stmt->fetch();
      //echo $roll;
  ?>

  <header class="header">
    <div class="container">
      <div class="teacher-name" style="padding-top:20px;">

        <div class="row" style="margin-top:0px;">
        <div class="col-md-9">
          <h2 style="font-size:38px"><strong> <?php echo $firstname2 ." ". $lastname2 ?></strong> </h2>
        </div>
        <div class="col-md-3">
          <div class="button" style="float:right;">
            <a href="update_info1.html" class="btn btn-outline-success btn-sm">Edit Profile</a>
          </div>
        </div>
        </div>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-md-3"> <!-- Image -->
          <a href="#"> <img class="rounded-circle" src="avatar.png" alt="Kamal" style="width:200px;height:200px"></a>
        </div>

        <div class="col-md-6"> <!-- Rank & Qualifications -->
          <h5 style="color:#3AAA64"><?php echo $currpos; ?>, <small>Dept. of CSE, <?php echo $currcomp; ?></small></h5>
          <p><?php echo $other; ?></p>
        </div>

        <div class="col-md-3 text-center"> <!-- Phone & Social -->
          <span class="text" style="font-size:18px"><strong>Email:</strong><italic><?php echo $email; ?></italic></span>
          <div class="button" style="padding-top:18px">
            <a href="mailto:deepakyadav56617@gmail.com" class="btn btn-outline-success btn-block">Send Email</a>
          </div>
          <div class="social-icons" style="padding-top:18px">
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x" style="color:#3AAA64"></i>
              <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x" style="color:#3AAA64"></i>
              <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x" style="color:#3AAA64"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x" style="color:#3AAA64"></i>
              <i class="fa fa-slideshare fa-stack-1x fa-inverse"></i>
            </span></a>

          </div>
        </div>
      </div>
    </div>
  </header>
    <!--End of Header-->

  <div class="container">

<!-- Section:Biography -->
  <div class="row">
        <div class="col-md-12">
          <div class="card card-block text-xs-left">
            <h2 class="card-title" style="color:#009688"><i class="fa fa-user fa-fw"></i>Biography</h2>
            <div style="height: 15px"></div>
              <p id="bio"><?php echo $bio; ?> </p>
          </div>
        </div>
      </div>
<!-- End:Biography -->

<!--Section:Interests-->
  <div class="row">
    <div class="col-md-12">
        <div class="card card-block">
          <h2 class="card-title"  style="color:#009688"><i class="fa fa-rocket fa-fw"></i>Education Qualification</h2>
          <ul class="list-group" style="margin-top:15px;margin-bottom:15px;">
            <li class="list-group-item"><?php echo $high; ?></li>
            <li class="list-group-item"><?php echo $grad; ?></li>
            <li class="list-group-item"><?php echo $other; ?></li>
          </ul>
        </div>
    </div>
  </div>
<!-- End :Interests -->

<!-- Section:Awards -->
    <!--
  <div class="row">
      <div class="col-md-12">
          <div class="card card-block">
            <h2 class="card-title"  style="color:#009688"><i class="fa fa-trophy fa-fw"></i>Awards</h2>
            <div style="height: 15px"></div>
            <table class="table table-bordered table-hover">
              <thead class="thead-default">
                <tr>
                  <th>Year</th>
                  <th>Name of the award</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2006</td>
                  <td>Cloud & Parallel Computing</td>
                </tr>
                <tr>
                  <td>2009</td>
                  <td>Big Data Analysis and Management</td>
                </tr>
                <tr>
                  <td>2013</td>
                  <td>High-performance and Low-Power Real-Time Systems</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
-->
<!-- End:Awards -->

<!-- Section:Teaching Summary -->
  <div class="row">
      <div class="col-md-12">
          <div class="card card-block">
            <h2 class="card-title" style="color:#009688"><i class="fa fa-cubes fa-fw"></i>Job Summary</h2>
            <div style="height: 15px"></div>
            <table class="table table-bordered">
              <thead class="thead-default">
                <tr>
                  <th>Designation</th>
                  <th>Company/Institute/University</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $currpos; ?></td>
                  <td><?php echo $currcomp; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
<!-- End:Teaching Summary -->     
<!-- Section:Resources -->
      <!--
  <div class="row">
    <div class="col-md-12">
        <div class="card card-block">
          <h2 class="card-title" style="color:#009688"><i class="fa fa-database fa-fw"></i>Resources</h2>
          <div style="height: 15px"></div>
          <table class="table table-bordered">
            <thead class="thead-default">
              <tr>
                <th>Topic</th>
                <th>Info</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>How Bubble Sort Works</td>
                <td style="border-left: 3px solid #009688;">Bubble sort. Bubble sort, sometimes referred to as sinking sort, is a simple sorting algorithm that repeatedly steps through the list to be sorted, compares each pair.
                  <div class="find-more">
                    Find out more on:
                    <span class="label label-theme"><i class="fa fa-file-pdf-o"><a href="#"> PDF</a></i></span>
                    <span class="label label-theme"><i class="fa fa-youtube-square"><a href="#"> YouTube</a></i></span>
                    <span class="label label-theme"><i class="fa fa-slideshare"><a href="#"> SlideShare</a></i></span>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Greedy Method</td>
                <td style="border-left: 3px solid #009688;">A greedy algorithm is an algorithmic paradigm that follows the problem solving heuristic of making the locally optimal choice at each stage with the hope of finding a global optimum.
                  <div class="find-more">
                    Find out more on:
                    <span class="label label-theme"><i class="fa fa-file-pdf-o"><a href="#"> PDF</a></i></span>
                    <span class="label label-theme"><i class="fa fa-youtube-square"><a href="#"> YouTube</a></i></span>
                    <span class="label label-theme"><i class="fa fa-slideshare"><a href="#"> SlideShare</a></i></span>
                  </div>
                </td>
              </tr>
              <tr>
                <td>EDI Security</td>
                <td style="border-left: 3px solid #009688;">Electronic data interchange (EDI) is a major innovation in the practical use of computing. It is already being used extensively in some segments of the retailing
                  <div class="find-more">
                    Find out more on:
                    <span class="label label-theme"><i class="fa fa-file-pdf-o"><a href="#"> PDF</a></i></span>
                    <span class="label label-theme"><i class="fa fa-youtube-square"><a href="#"> YouTube</a></i></span>
                    <span class="label label-theme"><i class="fa fa-slideshare"><a href="#"> SlideShare</a></i></span>
                  </div>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
-->
<!-- End:Resources -->

<!-- Section:Publications -->
      <!--
  <div class="row">
      <div class="col-md-12">
          <div class="card card-block text-xs-left" style="margin-bottom:15px;">
            <h2 class="card-title" style="color:#009688"><i class="fa fa-newspaper-o fa-fw"></i> Publications</h2>
            <div style="height: 15px"></div>
            <ul class="list-group">
              <li class="list-group-item">A H M Kamal,"Inserting Item to a Sorted List",USTC Teachers Annual (USTA - 2002),8(1),2002</li>
              <li class="list-group-item">A H M Kamal, Cross application of Round Robin Scheduling and Shortest Job First Serve in CPU Scheduling to improve preemptive scheduling, Accepted for publication at Kabi Nazrul University Journal - 2011</li>
              <li class="list-group-item">A H M Kamal, UB Operator precedence parsing algorithm, Accepted for Computer Science & Engineering R esearch Journal (CSERJ) in Vol. 7 (2011) (ISSN: 1990-4010) of Chittagong University of Engineering and Technology (CUET)</li>
              <li class="list-group-item">A H M Kamal, Retrieving Packets from Losing during Service Disruption Time, During Vertical Handover among UMTS and WLAN, Int. J. Advanced Networking and Applications, Volume 03, Issue 04, pp 1229-1232 (2012)</li>
              <li class="list-group-item">A H M Kamal, An Algorithm to trigger VHO based on the speed of roamer- who is just leaving the WLAN in a room,International Journal of Emerging Technologies in Science and Engineering, Canada, Vol: 3, No 1, pp:21-25, 2010</li>
              <li class="list-group-item">A. H. M. Kamal,"Use of ICTs in Gender Equalization" , USTC Teachers Annual (USTA-2010)</li>
              <li class="list-group-item">A H M Kamal,"ICT in Managing Disaster in Bangladesh",USTC Teachers Annual (USTA-2010)</li>
              <li class="list-group-item">Md. Saiful Islam and AHM Kamal, “Ratio method for solving any equation of single variable”, International Journal of Engineering and Technology, Vol-6, Issue-2, June 2009, ISSN: 1812-7711</li>
              <li class="list-group-item">A H M Kamal, Montse Parada, "Blob translation based estimation technique to handle occlusion while using mean-shift in tracking",Research Journal of applied sciences, vol. 4, issue 4, pp 129-133, 2009</li>
              <li class="list-group-item">A H M Kamal,"An easy, flexible and linear way for generating precedence functions", Multimedia Cyberscape journal (MMCJ), Malaysia, Vol: 2, pp. 44-49, 2004</li>
            </ul>
          </div>
      </div>
  </div>
-->
<!-- End:Publications -->

</div> <!--End of Container-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <?php
  }
  ?>
</body>
</html>
