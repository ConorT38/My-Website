
<div class="panel">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Model</th>
                                            <th>Frequency</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                    #STATEMENTS
                                    //
                                    ini_set('display_errors', 1); 
                                    error_reporting(E_ALL);
                                    require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
                                       $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

                                    // Check connection
                                    if (mysqli_connect_errno())
                                      {
                                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                      }
                                    $sql1 ="SELECT COUNT(  `stats_desktop`.`model` ) AS  `d_num` , model AS dm
                                            FROM  `stats_desktop` 
                                            WHERE 1 
                                            GROUP BY model;";
                                        if($result = mysqli_query($con,$sql1)){
                                              if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                $dtotal = intval($row['d_num']);
                                                $dmodel = $row['dm'];
                                                echo '<tr>
                                            <td>Desktop</td>
                                            <td>'.$dmodel.'</td>
                                            <td>'.$dtotal.'</td>
                                            <td><div class="sparkline8"><canvas width="17" height="17" style="display: inline-block; width: 17px; height: 17px; vertical-align: top;"></canvas></div> </td>
                                        </tr>';
                                    }
                                }

                                                $sql1 ="SELECT COUNT(  `stats_mobile`.`model` ) AS  `d_num` , model AS mm
                                            FROM  `stats_mobile` 
                                            WHERE 1 
                                            GROUP BY model;";
                                        if($result = mysqli_query($con,$sql1)){
                                              if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                $mtotal = intval($row['d_num']);
                                                $mmodel = $row['mm'];

                                                echo '<tr>
                                            <td>Mobile</td>
                                            <td>'.$mmodel.'</td>
                                            <td>'.$mtotal.'</td>
                                            <td><div class="sparkline8"><canvas width="17" height="17" style="display: inline-block; width: 17px; height: 17px; vertical-align: top;"></canvas></div> </td>
                                        </tr>';

                                            }
                                            }
                                          }else{
                                            echo "Failed to fetch...";
                                          }
                                        }
                                    


                                    ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>