<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Digital parking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        
        .row.content {
            height: 450px
        }
        /* Set gray background color and 100% height */
        
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }
        /* Set black background color, white text and some padding */
        
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
        /* On small screens, set height to 'auto' for sidenav and grid */
        
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {
                height: auto;
            }
        }

    </style>
    <script type="text/javascript" src="js/index.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                <a class="navbar-brand" href="#">Digital parking</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php?logout=true"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col">
                <h2>Parking</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="max-width : 500px;">
                <form method="get" onsubmit="event.preventDefault();  formSubmit(this.elements);">
                    <div class="form-group">
                        <label for="vnum">Vehicle number : </label>
                        <input type="text" class="form-control" placeholder="Vehicle number" name="vnum" oninput="checkAlreadyAlloted(this.value.trim())">
                    </div>
                    <div class="form-group">
                        <label for="vtype">Vehicle type : </label>
                        <select name="vtype_id" id="vtype" class="form-control">
                                <option value="101">bike</option>
                                <option value="102">car</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="">Vehicle Owner : </label>
                        <input class="form-control" name="owner" id="owner" placeholder="vehicle owner" />
                    </div>
                    <button type="submit" class="btn btn-primary" id="allotSlot" name="submit" value="submit">Allot</button>
                    <button class="btn btn-primary" id="releaseSlot" style="display: none;" onclick="event.preventDefault(); releaseSlots()" >Release</button>
                </form>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col">
                <div class="table-responsive">
                <table id="recents" class="table hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Vehicle number</th>
                            <th>Owner</th>
                            <th>Vehicle type</th>
                            <th>Parking</th>
                            <th>Slot id</th>
                            <th>Arrival time</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            include("./dbconnect.php");
		$query='SELECT a.id,a.vnum,a.owner,a.login,a.slot_id,d.name "plot_name", b.name "vtype_name" FROM vehicle as a,vtype as b, slot as c, parking as d WHERE a.vtype_id=b.id and a.logout is NULL and a.slot_id=c.id and c.plot_id=d.id';
		$result=$con->query($query);
		while ($row=$result->fetch_assoc()) {
            extract($row);
			 echo "<tr>";
            echo "<td>$id</td>";
             echo "<td>$vnum</td>";
            echo "<td>$owner</td>";
            echo "<td>$vtype_name</td>";
            echo "<td>$plot_name</td>";
             echo "<td>$slot_id</td>";
            echo "<td>$login</td>";
            
            
            echo "</tr>";
		}
		$con->close();
                            ?>
                        
                    </tbody>

                </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>This is a small modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="container-fluid text-center">
        <p>&copy; Digital parking</p>
    </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
