<?php
//It will create a session and then will destroy and will move back to login page
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <div class="row" style="background-color:#488AC7;color:white;">
    <!-- <img class="col-sm-4" style="align: left; " width="20" height="20" src="https://media.gettyimages.com/photos/book-picture-id182470194?b=1&k=6&m=182470194&s=612x612&w=0&h=NOki1oNkhZoikVv_9fNi6fAVXS3tcy46OiVc7uMGdPY=" alt="Flowers in Chania"> -->
    <h2 class="col-sm-4"><i>BibMng</i></h2>
    <h4 class="col-md-4 pull-middle">Welcome </h4>
   <!-- <button type="submit" action="logout1.php" method="POST" class="col-sm-1 btn btn-default pull-right">Logout</button> -->
    <form align="right" name="form1" method="post" action="logout1.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="btn-login" class="btn btn-primary" value="log out">
  </label>
</form>
  </div>
</head>
<style>
  * {
    box-sizing: border-box;
  }

  /* Add a gray background color with some padding */

  body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
  }

  /* Header/Blog Title */

  .header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
  }

  /* Create two unequal columns that floats next to each other */

  /* Left column */

  .leftcolumn {
    float: left;
    width: 75%;
  }

  /* Right column */

  .rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
  }

  /* Add a card effect for articles */

  .card {
    background-color: #E9FFFF;
    padding: 20px;
    margin-top: 20px;
  }
   /* new code added by kanna*/
  
  
  
.card1 {
    background-color: #E9FFFF;
    padding: 20px;
    margin-top: 20px;
  position: relative;
  height: 300px;
  overflow: scroll;
  }
  /* Clear floats after the columns */

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .row {
    background-color: #FF7F50;
  }

  .rightcolumn {
    border: solid 2px orange;
  }

  .leftcolumn {
    border: solid 2px orange;
  }

  /* Footer */

  .footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
  }
  

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */

  @media screen and (max-width: 800px) {
    .leftcolumn,
    .rightcolumn {
      width: 100%;
      padding: 0;
    }
  }
</style>


<body>


  <div class="row">
    <div class="rightcolumn">
      <div class="card">
        <h4>Change Active Library</h4>
        <label for="inputsm">Change:</label>
        <select placeholder="Select">
  <option value="volvo">All My references</option>
  <option value="saab">Slected references</option>
</select>
        <button type="button" class="btn btn-primary active">Change Active Library</button>
      </div>
      <div class="card">
        <h4>Create New Library</h4>
        <form method="POST" action="AddLibrary.php">
        <button type="submit"  class="btn btn-primary active">Add New Library</button>
          </form>
      </div>
      <div class="card">
        <h4>Library Sharing</h4>
        <div class="container">
          <form>
            <label class="radio-inline">
            <input type="radio" name="optradio">Enable
          </label>
            <label class="radio-inline">
            <input type="radio" name="optradio">Disable
          </label>
          </form>
        </div>
        <h5>Share with:</h5>
        <input class="form-control input-sm" id="username" type="text" placeholder="Enter Username">
      </div>
      <div class="card">
        <h4>Search Library</h4>
        <label for="inputsm">Author Name</label>
        <input class="form-control input-sm" id="authorname" type="text" placeholder="Enter Authorname">
        <label for="inputsm">Title</label>
        <input class="form-control input-sm" id="title" type="text" placeholder="Enter Title">
        <label for="inputsm">Year</label>
        <input class="form-control input-sm" id="year" type="text" placeholder="Enter Year">
        <div>
        </div>
        <button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
      </div>
    </div>
    <div class="leftcolumn">
      <div class="card">
        <h3>
          All Libraries
        </h3>
        <div class="card1">
          
       
        <table class="table">
          <thead>
            <tr>
              <th>All</th>
              <th>Author</th>
              <th>Title</th>
              <th>Year</th>
              <th>Key</th>
              <th>PDF</th>
              <th>URL</th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
              <td>Test</td>
              <td>Gerry Martin</td>
              <td>2008</td>
              <td>Internet Solutions</td>
              <td>martin123</td>
              <td>Test</td>
              <td>Test</td>
            </tr>
            <tr>
              <td>Test</td>
              <td>Gerry Martin</td>
              <td>2008</td>
              <td>Internet Solutions</td>
              <td>martin123</td>
              <td>Test</td>
              <td>Test</td>
            </tr>
            <tr>
              <td>Test</td>
              <td>Gerry Martin</td>
              <td>2008</td>
              <td>Internet Solutions</td>
              <td>martin123</td>
              <td>Test</td>
              <td>Test</td>
            </tr>
<tr>
              <td>Test</td>
              <td>Gerry Martin</td>
              <td>2008</td>
              <td>Internet Solutions</td>
              <td>martin123</td>
              <td>Test</td>
              <td>Test</td>
            </tr>
            
            <tr>
              <td>Test</td>
              <td>Gerry Martin</td>
              <td>2008</td>
              <td>Internet Solutions</td>
              <td>martin123</td>
              <td>Test</td>
              <td>Test</td>
            </tr>
            <tr>
              <td>Test</td>
              <td>Gerry Martin</td>
              <td>2008</td>
              <td>Internet Solutions</td>
              <td>martin123</td>
              <td>Test</td>
              <td>Test</td>
            </tr>
           
            
          </tbody>
        </table>
           </div>
        <label for="inputsm" class="sort">Sort By:</label>
        <select placeholder="Select">
  <option value="volvo">Ascending</option>
  <option value="saab">Decending</option>
</select>
      </div>
      <div class="card">
        <h3>Edit Library</h3>
        <button type="button" class="btn btn-primary active">Update</button>
        <button type="button" class="btn btn-primary active">Delete</button>
      </div>
      <div class="card">
        <h3>Advance Filters</h3>
      </div>
    </div>
  </div>
</body>
</html>
<script>

</script>