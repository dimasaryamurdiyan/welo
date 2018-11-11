<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Main Styles CSS -->
    <link href="/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role ="navigation">
    		<div class="container-fluid head">
    			<div class="navbar-header">
    				<a class="navbar-brand logo font-italic" href="/dashboard">WELO</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <a href="/profile"><img src=""></a>
                </div>
    		</div>
</nav>

<div id="wrapper">
    <aside id="sideBar">
        <ul class="main-nav">
            <!-- Your Logo Or Site Name -->
            <li>
                <a class="menu" href="/dashboard"><img class="chart-menu" src="/dash.png" height="50" width="50">&#160 &#160 &#160 Dashboard</a>
            </li>
            <li>
                <a class="menu dropdown-menu" href="/order"><img class="chart-menu" src="/order.png" height="50" width="50">&#160 &#160 &#160 Pesanan Laundry &#160<i class="fa fa-caret-down"></i>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    </a> 
            </li>
            <li>
                <a class="menu" href="/packet"><img class="chart-menu" src="/packet.png" height="50" width="50">&#160 &#160 &#160 Paket Laundry</a>
            </li>
            <li>
                <a class="menu" href="/customer"><img class="chart-menu" src="/customer.png" height="50" width="50">&#160 &#160 &#160 Customer</a>
            </li>
            <li>
                <a class="menu" href="/"><img class="chart-menu" src="/logout.png" height="50" width="50">&#160 &#160 &#160 Logout</a>
            </li>
        </ul>
    </aside>
</div>
</body>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-menu");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</html>