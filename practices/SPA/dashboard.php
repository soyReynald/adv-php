<?php
    include('header.php');
?>
<div class="container">
    <div class="row">
        <h1>Creative User Profile 
        <small>#User-Interface #User #Profile #jquery #Social #contact #accordion</small></h1>
        <ul id="accordion" class="accordion">
            <li>
                <div class="col col_4 iamgurdeep-pic">
                    <img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="https://cdn-images-1.medium.com/max/2000/1*k_HvuYIVDODaXLxeFAs2uQ.jpeg">
                </div>
                <div class="username">
                    <h2>Hi <?php echo $_SESSION['user_session']; ?><small><i class="fa fa-map-marker"></i> India </small></h2>
                </div>
            </li>
        </ul>
    </div>
        <ul class="submenu">
            <li><a href="response.php?action=logout" class="btn btn-default btn-sm">
                Logout
            </a></li>
        </ul>
    </div>
<?php
    include('footer.php')
?>