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

            <!-- add new project modal -->
        <div id="form" class="container mt-5 mb-5">

        <div class="title mb-3">
            <h4>Add New Project</h4>
        </div>
        
        <form action="addNewProject.php" method="post" id="formAdd">
                <div class="form-group mb-3">
                    <label for="inputProjectName">Project Name*</label>
                    <input type="text" class="form-control" id="inputProjectName" name="projectName" placeholder="Enter Project Name">
                </div>

                <div class="form-group mb-3">
                    <label for="inputProjectLeaderName">Project Leader Name*</label>
                    <input type="text" class="form-control" id="inputProjectLeaderName" name="leaderName" placeholder="Enter Project Leader Name">
                </div>

                <div class="form-group mb-3">
                    <label for="inputProjectLeaderEmail">Project Leader Email*</label>
                    <input type="email" class="form-control" id="inputProjectLeaderEmail" name="leaderEmail" placeholder="Enter Project Leader Email">
                </div>

                <div class="form-group mb-3">
                    <label for="inputClientName">Client Name*</label>
                    <input type="text" class="form-control" id="inputClientName" name="clientName" placeholder="Enter Client Name">
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="inputStartDate">Start Date</label>
                            <input type="date" class="form-control" id="inputStartDate" name="startDate" placeholder="Enter Start Date">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="inputEndDate">End Date</label>
                            <input type="date" class="form-control" id="inputEndDate" name="endDate" placeholder="Enter End Date">
                        </div>
                    </div>

                </div>

                <div class="form-group mb-3">
                    <label for="inputProgress" class="form-label">Project Progress</label>
                    <input type="range" class="form-range" min="0" value = "0" max="100" name="progressValue" id="inputProgress"><span id="value"></span>%</input>
                </div>

                <button type="submit" form="formAdd" class="btn btn-primary">Submit</button>
                <!-- <button type="cancel" form="formAdd" class="btn btn-primary">Submit</button> -->

                </form>
        </div>

        <footer class="container-fluid text-center">
            Created by Aria Nurhadi Zain
        </footer>


        <script src="index.js"></script>
    </body>

</html>