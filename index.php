<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link href="style.css" rel="stylesheet">

        <title>Monitoring Project</title>
    </head>

    <body>
    
        <header>
            <div class="title container-fluid text-center">
                PROJECT MONITORING
            </div>
        </header>

        <div class="container-fluid full-height min-100">
            <div class="row justify-content-md-center gap-3 mt-5">
                <a href="addPage.php" type="button" class="col col-lg-1 item-info btn-add">
                    <span> <i class="bi-plus" style="font-size: 3rem;"></i></span>
                    <p>Add New Project</p>
                </a>
                <div class="col col-lg-1 item-info " style="background-color: var(--red)">
                    <h2>5</h2>
                    <p>Projects</p>
                </div>
                <div class="col col-lg-1 item-info" style="background-color: var(--green)">
                    <h2>2</h2>
                    <p>Finish</p>
                </div>
            </div>

            <div class="container-fluid mt-5 table-responsive">
                <table class="table">
                    <tr class="table-head">
                        <th>PROJECT NAME</th>
                        <th>CLIENT</th>
                        <th>PROJECT LEADER</th>
                        <th>START DATE</th>
                        <th>END DATE</th>
                        <th>PROGRESS</th>
                        <th>ACTION</th>
                    </tr>
                    <?php
                        include 'databaseConnection.php';
                        $data = mysqli_query($connection, "select * from project");
                        while($d = mysqli_fetch_array($data)){
                    ?>

                    <tr class="table-content">
                        <td><?php echo $d['projectName'];?></td>
                        <td><?php echo $d['clientName'];?></td>
                        <td class="item-leader">
                            <div>
                                <img src="images/profile_user.jpg" alt="profil picture">
                            </div>
                            <div>
                                <h6><?php echo $d['leaderName'];?></h6>
                                <?php echo $d['leaderEmail'];?>
                            </div>
                        </td>
                        <td><?php echo $d['startDate'];?></td>
                        <td><?php echo $d['endDate'];?></td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $d['progressValue'];?>%" aria-valuenow="<?php echo $d['progressValue'];?>" aria-valuemin="0" aria-valuemax="100"><?php echo $d['progressValue'];?>%</div>
                            </div>
                        </td>
                        <td>
                            <a href="deleteProject.php?id=<?php echo $d['projectId']; ?>" class="btn-action btn-action1"><i class="bi bi-trash" style="font-size: 1.5rem;"></i></a>
                            <a href="editPage.php?id=<?php echo $d['projectId']; ?>" class="btn-action btn-action2"><i class="bi bi-pencil-square" style="font-size: 1.5rem;"></i></button>
                        </td>
                    </tr>
                    
                    <?php
                        
                        }

                    ?>
                </table>
            </div>

        </div>

        <footer class="container-fluid text-center">
            Created by Aria Nurhadi Zain
        </footer>


        <script src="index.js"></script>
    </body>

</html>