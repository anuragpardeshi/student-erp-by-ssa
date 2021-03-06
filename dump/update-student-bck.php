<?php
session_start();
if (!isset($_SESSION['aai'])){
  header("Location: login-index.php");
}
if(isset($_SESSION['update'])){
  unset($_SESSION['add']);
  unset($_SESSION['update']);
  unset($_SESSION['delete']);
  $_SESSION['update']="defaultOpen";

}
else {
  if (isset($_SESSION['delete'])) {
    unset($_SESSION['add']);
    unset($_SESSION['update']);
    unset($_SESSION['delete']);
    $_SESSION['delete']="defaultOpen";

# code...
  }
  else{
    unset($_SESSION['add']);
    unset($_SESSION['update']);
    unset($_SESSION['delete']);
    $_SESSION['add']="defaultOpen";
# code...
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/tab.css">
  <link rel="shortcut icon" href="images/sis-favicon.ico" type="image/x-icon">
  <title>Welcome Admin</title>
</head>
<body class="bg">
  <div class="topnav pullUp">
    <a href="?logout">Logout</a>
    <?php
    if(isset($_GET['logout'])) {
      session_unset();
      header("Location: login-index.php");
    }
    ?>
    <a href="#">About</a>
    <a href="#">Help</a>
    <a class="developedby" href="#">Developed By</a>
  </div>
  <div class="admincard-bck">
    <!--Only For Login card Background-->
  </div>
  <div class="admincard">
    <div class="tab">
      <a class="containertitle ">Student</a>
      <button class="tablinks" onclick="opentab(event, 'Add')" id="<?php echo $_SESSION['add']?>">Add</button>
      <button class="tablinks" onclick="opentab(event, 'Update')" id="<?php echo $_SESSION['update']?>">Update</button>
      <button class="tablinks" onclick="opentab(event, 'Delete')" id="<?php echo $_SESSION['delete']?>">Delete</button>
    </div>
    <div id="Add" class="tabcontent">
      <form action="add-student-php.php" method="post">
        <ul class="form-style">
          <li><label>Full Name <span class="required">*</span></label>
            <input type="text" name="firstname" class="field-divided" placeholder="First" />
            <input type="text" name="middlename" class="field-divided" placeholder="Middle" />
            <input type="text" name="lastname" class="field-divided" placeholder="Last" />
          </li>
          <li>
            <label>Email <span class="required">*</span></label>
            <input type="email" placeholder="Email Address" name="email" class="field-long" />
          </li>
          <li><label>Roll No and Password (for student information system) <span class="required">*</span></label>
            <!-- <input type="text" name="uid" class="field-divided" placeholder="Roll Number" /> -->
            <input type="text" name="upass" class="field-divided" placeholder="Password" />
          </li>
          <li>
            <label>Academic Details <span class="required">*</span></label>
            <select name="year" class="field-select-divided dropdown-button">
              <option value="">--select year--</option>
              <option value="fe">FE</option>
              <option value="se">SE</option>
              <option value="te">TE</option>
            </select>
            <select name="dept" class="field-select-divided dropdown-button">
              <option value="">--select department--</option>
              <option value="civil">Civil</option>
              <option value="computer">Computer</option>
              <option value="it">IT</option>
              <option value="entc">ENTC</option>
              <option value="mechanical">Mechanical</option>
            </select>
          <!-- <select name="pattern" class="field-select-divided dropdown-button">
            <option value="">--select pattern--</option>
            <option value="12">FE2012 Pattern</option>
            <option value="14">FE2014 Pattern</option>
            <option value="15">FE2015 Pattern</option>
          </select> -->
        </li>
        <li><label>Date of Birth</label>
          <select name="dobday">
            <option> - day - </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <select name="dobmonth">
            <option> - month - </option>
            <option value="January">January</option>
            <option value="Febuary">Febuary</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>
          <select name="dobyear">
            <option> - year - </option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
          </select>
        </li>
        <li>
          <div class="submit">
            <button  type="submit">Submit</button>
          </div>
        </li>
      </ul>
    </form>
  </div>
  <div id="Update" class="tabcontent">
    <form action="search.php" method="post">
      <ul class="form-style">
        <li>
          <label>User ID <span class="required">*</span></label>
          <input type="text" name="uname" placeholder="User ID" />
        </li>
        <li>
          <div class="submit">
            <button  type="submit">Submit</button>
          </div>
        </li>
        <li>
          <div class="result-found">
            <?php
            if(isset($_SESSION['searched'])){

              echo 'Result found' . '<br/>'."\n";
              echo 'Name: ' . $_SESSION['username'] . '<br/>'."\n";
              echo 'User ID: ' . $_SESSION['userid'] . '<br/>'."\n";
              unset($_SESSION['searched']);
            }
            ?>

            <?php  if (isset($_SESSION['search-error']))
            {
              echo $_SESSION['search-error'];
              unset($_SESSION['search-error']);
            } ?>
          </div>
          
        </li>
      </ul>
    </form>
  </div>
  <div id="Delete" class="tabcontent">
    <form action="update-student-php.php" method="post">
      <ul class="form-style">
        <li>
          <label>User ID <span class="required">*</span></label>
          <input type="text" name="uname" placeholder="User ID" />
        </li>
        <li>
          <div class="submit">
            <button  type="submit">Submit</button>
            <div class="login-error">
              <a>
                <?php  if (isset($_SESSION['search-error']))
                {
                  echo $_SESSION['search-error'];
                  unset($_SESSION['search-error']);
                } ?>

              </a>
            </div>
          </div>
        </li>
      </ul>
    </form>
  </div>
</div>
<div class="footer">
  <p> Copyright 2017. All Rights Reserved. Developed by SSA</p>
</div>
<script type="text/javascript">
  function opentab(event, tabname) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabname).style.display = "block";
    event.currentTarget.className += " active";
  }
  document.getElementById("defaultOpen").click();
</script>
</body>
</html>