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
                .row.content {height: 450px}

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
                  .row.content {height:auto;} 
                }
              </style>
                  <script type="text/javascript">
                      function formSubmit(formdata){
                          console.log(formdata['vnum'].value);
                          console.log(formdata['vtype'].value);
                      }
                  </script>
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
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
                            <input type="text" class="form-control" placeholder="Vehicle number" name="vnum">
                          </div>
                            <div class="form-group">
                              <label for="">Vehicle type : </label>
                            <select name="vtype_id" id="vtype" class="form-control">
                                <option value="101">bike</option>
                                <option value="102">car</option>
                            </select>
                          </div>
                            <div class="form-group">
                              <label for="">Vehicle Owner : </label>
                            <input class="form-control" name="owner" placeholder="vehicle owner"/>
                          </div>
                          <button type="submit" class="btn btn-primary">Allot</button>
                        </form>
                    </div>
                </div>
              <div class="row">
                  <div class="col">
                    <table id="recents" class="table hover">
                        <thead> 
                            <tr>
                                <th>Id</th>
                                <th>Vehicle number</th>
                                <th>Owner</th>
                                <th>Vehicle type</th>
                                <th>Arrival time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>

                  </table>
                  </div>
              </div>
            </div>

            <footer class="container-fluid text-center">
              <p>&copy; Digital parking</p>
            </footer>
                </div>

                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
              </body>
            </html>