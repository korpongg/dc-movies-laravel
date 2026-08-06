<!DOCTYPE html>
<html>
<?php

require_once 'database/connectdatabase.php';
$arr_espada = [];
$arr_image = [];
$arr_ch = [];

$sql_espada = "select * from bleach_cha_dc where tier =1  order by number asc";
$query_espada = mysqli_query($connect, $sql_espada);
$index = 0;
while ($row_espada = mysqli_fetch_array($query_espada)) {

    $id = $row_espada['id'];
    $name = $row_espada['name'];
    $short_name = $row_espada['short_name'];
    $color = $row_espada['color'];

    $sqlDepartment = "select * from bleach_image where cha_id='$id'";
    $queryDepartment = mysqli_query($connect, $sqlDepartment);
    $rowDepartment = mysqli_fetch_array($queryDepartment);
    $arr_espada[$index]['image'] = $rowDepartment['image'];
    $arr_espada[$index]['name'] = $name;
    $arr_espada[$index]['id'] = $id;
    $arr_espada[$index]['short_name'] = $short_name;
    $arr_espada[$index]['color'] = $color;
    $index++;
}

$arr_former_espada = [];
$sql_former_espada = "select * from bleach_cha_dc where tier =3  order by number asc";
$query_former_espada = mysqli_query($connect, $sql_former_espada);
$index = 0;
while ($row_former_espada = mysqli_fetch_array($query_former_espada)) {

    $id = $row_former_espada['id'];
    $name = $row_former_espada['name'];
    $short_name = $row_former_espada['short_name'];
    $color = $row_former_espada['color'];

    $sqlDepartment = "select * from bleach_image where cha_id='$id'";
    $queryDepartment = mysqli_query($connect, $sqlDepartment);
    $rowDepartment = mysqli_fetch_array($queryDepartment);
    $arr_former_espada[$index]['image'] = $rowDepartment['image'];
    $arr_former_espada[$index]['name'] = $name;
    $arr_former_espada[$index]['id'] = $id;
    $arr_former_espada[$index]['short_name'] = $short_name;
    $arr_former_espada[$index]['color'] = $color;
    $index++;
}

$arr_pre_espada = [];
$sql_pre_espada = "select * from bleach_cha_dc where tier =4  order by number asc";
$query_pre_espada = mysqli_query($connect, $sql_pre_espada);
$index = 0;
while ($row_pre_espada = mysqli_fetch_array($query_pre_espada)) {

    $id = $row_pre_espada['id'];
    $name = $row_pre_espada['name'];
    $short_name = $row_pre_espada['short_name'];
    $color = $row_pre_espada['color'];

    $sqlDepartment = "select * from bleach_image where cha_id='$id'";
    $queryDepartment = mysqli_query($connect, $sqlDepartment);
    $rowDepartment = mysqli_fetch_array($queryDepartment);
    $arr_pre_espada[$index]['image'] = $rowDepartment['image'];
    $arr_pre_espada[$index]['name'] = $name;
    $arr_pre_espada[$index]['id'] = $id;
    $arr_pre_espada[$index]['short_name'] = $short_name;
    $arr_pre_espada[$index]['color'] = $color;
    $index++;
}


$arr_dc = [];
$sql_dc = "select * from bleach_cha_dc where tier =2 order by number asc ";
$query_dc = mysqli_query($connect, $sql_dc);
$index = 0;
while ($row_dc = mysqli_fetch_array($query_dc)) {

    $id = $row_dc['id'];
    $name = $row_dc['name'];
    $short_name = $row_dc['short_name'];
    $color = $row_dc['color'];

    $sqlDepartment = "select * from bleach_image where cha_id='$id'";
    $queryDepartment = mysqli_query($connect, $sqlDepartment);
    $rowDepartment = mysqli_fetch_array($queryDepartment);
    $arr_dc[$index]['image'] = $rowDepartment['image'];
    $arr_dc[$index]['name'] = $name;
    $arr_dc[$index]['id'] = $id;
    $arr_dc[$index]['short_name'] = $short_name;
    $arr_dc[$index]['color'] = $color;
    $index++;
}



$arr_other_dc = [];
$sql_other_dc = "select * from bleach_cha_dc where tier =5 order by number asc ";
$query_other_dc = mysqli_query($connect, $sql_other_dc);
$index = 0;
while ($row_other_dc = mysqli_fetch_array($query_other_dc)) {

    $id = $row_other_dc['id'];
    $name = $row_other_dc['name'];
    $short_name = $row_other_dc['short_name'];
    $color = $row_other_dc['color'];

    $sqlDepartment = "select * from bleach_image where cha_id='$id'";
    $queryDepartment = mysqli_query($connect, $sqlDepartment);
    $rowDepartment = mysqli_fetch_array($queryDepartment);
    $arr_other_dc[$index]['image'] = $rowDepartment['image'];
    $arr_other_dc[$index]['name'] = $name;
    $arr_other_dc[$index]['id'] = $id;
    $arr_other_dc[$index]['short_name'] = $short_name;
    $arr_other_dc[$index]['color'] = $color;
    $index++;
}





?>

<head>
    <meta charset="utf-8" />
    <title>Our website is coming soon</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="wb_main" content="wb_element 20797a41bd0dc45e4aa8dc8046fb71caca30634359bf54b588cd0bd4c83784d4" />

    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/disabledbackbrowser.js"></script>
    <script type="text/javascript" src="javascript/jquery-ui.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.js"></script>
    <script type="text/javascript" src="javascript/functionsubmit.js"></script>
    <script type="text/javascript" src="javascript/filterinput.js"></script>
    <script type="text/javascript" src="javascript/inputfilter.js"></script>
    <script type="text/javascript" src="javascript/mytopnav.js"></script>
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/all.css">
    <style type="text/css">

    </style>
</head>

<body>
 <img src="image/imggg2.webp" id="bgimg">
    <form name="formdatabooking" method="post" action="databooking_admin.php">
        <div class="container-fluid">
            <div class="row">
                <?php include 'include/navbar/navbaradmin.php'; ?>
            </div>
        </div>

    </form>


    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Response</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this response? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn " stlye='color:#D3D3D3' data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn " style='color:blue' onclick='handleClear()'>OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="main-container ">

        <div class="container main_content  mb-5">

            <div class=" justify-content-center align-center">
                <div class='my-5'>
                    <button class="btnext me-2 btn" onclick="humans()">Next</button>
                    <button class="btnext me-2 btn" onclick="shinigami()">ยมทูต</button>


                    <button class="btnext me-2 btn" onclick="dc()">อารันคาร์</button>
                    <button class="btnext me-2 btn" onclick="quincy()">ควีนซี่</button>



                </div>
                <div id="page1" class=" page-content active ">
                    <!-- Content will change here -->
                    <div class="p-chara__inner">
                        <h2>Espada</h2>

                        <ul class="p-chara_in__list">
                            <?php
                            for ($i = 0; $i < count($arr_espada); $i++) { ?>
                                <li class=" p-chara_in__list-item image-wrapper"
                                    onclick="redirectToPage2(<?php echo $arr_espada[$i]['id']; ?>)" style='width:160px;'>
                                    <div class="p-chara_in__thumb  js-chara-modal-open" data-chara-modal="01">
                                        <figure class="p-chara_in__thumb-img image-container"
                                            style='background-color:<?php echo $arr_espada[$i]['color'] ?>'>
                                            <img class="u-lazy " src="<?php echo str_replace('.png','.webp',$arr_espada[$i]['image']); ?>" alt="黒崎一護 "
                                                >

                                            <h1 class='fixed-top-right container_2 text-center text-white'>
                                                <?php echo $arr_espada[$i]['short_name'] ?></h1>

                                            <div class="overlay"></div>


                                        </figure>

                                    </div>

                                </li>
                            <?php } ?>



                        </ul>
                    </div>

             


                    <div class="p-chara__inner">
                        <h2>Privaron Espada</h2>
                        <ul class="p-chara_in__list">
                            <?php
                            for ($i = 0; $i < count($arr_pre_espada); $i++) { ?>
                                <li class="p-chara_in__list-item image-wrapper"
                                    onclick="redirectToPage2(<?php echo $arr_pre_espada[$i]['id']; ?>)"
                                    style='width:160px;'>
                                    <div class="p-chara_in__thumb  js-chara-modal-open" data-chara-modal="01">
                                        <figure class="p-chara_in__thumb-img image-container"
                                            style='background-color:<?php echo $arr_pre_espada[$i]['color'] ?>'>
                                            <img class="u-lazy " src="<?php echo str_replace('.png','.webp',$arr_pre_espada[$i]['image']); ?>"
                                                alt="黒崎一護 " >
                                            <div class="overlay"></div>
                                            <h1 class='fixed-top-right container_2 text-center text-white'>
                                                <?php echo $arr_pre_espada[$i]['short_name'] ?></h1>

                                        </figure>


                                    </div>

                                </li>
                            <?php } ?>



                        </ul>
                    </div>


                    <div class="p-chara__inner mt-5">
                        <h2>Números</h2>
                        <ul class="p-chara_in__list">
                            <?php
                            for ($i = 0; $i < count($arr_dc); $i++) { ?>
                                <li class="p-chara_in__list-item image-wrapper mt-3"
                                    onclick="redirectToPage2(<?php echo $arr_dc[$i]['id']; ?>)" style='width:160px;'>
                                    <div class="p-chara_in__thumb  js-chara-modal-open" data-chara-modal="01"
                                        style='text-align:center;'>
                                        <figure class="p-chara_in__thumb-img image-container"
                                            style='background-color:<?php echo $arr_dc[$i]['color'] ?>'>
                                            <img class="u-lazy "  src="<?php echo str_replace('.png','.webp',$arr_dc[$i]['image']); ?>" alt="黒崎一護 "
                                                >
                                            <div class="overlay"></div>
                                            <h1 class='fixed-top-right container_2 text-center text-white'>
                                                <?php echo $arr_dc[$i]['short_name'] ?></h1>

                                        </figure>

                                    </div>

                                </li>
                            <?php } ?>



                        </ul>
                    </div>

                    <div class="p-chara__inner mt-5">
                        <h2>Other</h2>
                        <ul class="p-chara_in__list">
                            <?php
                            for ($i = 0; $i < count($arr_other_dc); $i++) { ?>
                                <li class="p-chara_in__list-item image-wrapper mt-3"
                                    onclick="redirectToPage2(<?php echo $arr_other_dc[$i]['id']; ?>)"
                                    style='width:160px;'>
                                    <div class="p-chara_in__thumb  js-chara-modal-open" data-chara-modal="01"
                                        style='text-align:center;'>
                                        <figure class="p-chara_in__thumb-img image-container"
                                            style='background-color:<?php echo $arr_other_dc[$i]['color'] ?>'>
                                            <img class="u-lazy "  src="<?php echo str_replace('.png','.webp',$arr_other_dc[$i]['image']); ?>" 
                                                alt="黒崎一護 " >
                                            <div class="overlay"></div>
                                            <h1 class='fixed-top-right container_2 text-center text-white'>
                                                <?php echo $arr_other_dc[$i]['short_name'] ?></h1>

                                        </figure>

                                    </div>

                                </li>
                            <?php } ?>



                        </ul>
                    </div>

                </div>
                <div id="page2" class=" page-content ">

                    22222222222222222222222
                </div>
                <div id="page3" class="page-content">
                    33333333333333333333
                </div>


                <div id="page4" class="page-content">
                    44444444444444444
                </div>

            </div>


        </div>
        <div>

        </div>

    </div>


</body>
<script>
    let currentPage = 1;
    const totalPages = 4;

    function updateContent() {
        // Hide all pages
        document.querySelectorAll('.page-content').forEach(page => {
            page.classList.remove('active');
        });

        // Show the current page
        document.getElementById('page' + currentPage).classList.add('active');

        // Optional: disable buttons at end positions
        document.querySelector('button:first-of-type').disabled = (currentPage === 1);
        document.querySelector('button:last-of-type').disabled = (currentPage === totalPages);
    }

    function humans() {
        currentPage = 1;
        updateContent();
    }

    function shinigami() {
        currentPage = 2;
        updateContent();
    }

    function dc() {
        currentPage = 3;
        updateContent();
    }

    function quincy() {
        currentPage = 4;
        updateContent();
    }

    function redirectToPage2(id) {
        // Get the value from the input field

        // Encode the value for safe URL transmission

        // Construct the new URL with a query parameter (e.g., 'data')
        const destinationUrl = 'detail.php?id=' + id;

        // Redirect the browser to the new URL
        window.locations.href = destinationUrl;
    }



</script>

</html>