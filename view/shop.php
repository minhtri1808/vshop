<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<style>
.list-group {
    max-height: 300px;
    margin-bottom: 5px;
    overflow: scroll;
    -webkit-overflow-scrolling: touch;
}
</style>
<div class="demo">
</div>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pb-60 pt-sm-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Begin Li's Banner Area -->
                <div class="single-banner shop-page-banner">
                    <a href="#">
                        <img src="../view/images/bg-banner/2.jpg" alt="Li's Static Banner">
                    </a>
                </div>
                <!-- Li's Banner Area End Here -->
                <!-- shop-top-bar start -->

                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper" id="shop">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div>
                                    <br>
                                    <br>

                                    <div class="row filter_data">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                            <div class="row">

                            </div>
                        </div>
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 pt-xs-15">
                                    <p>Showing 1-12 of 13 item(s)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box pt-xs-20 pb-xs-15">
                                        <li class="list-group-item"><a href="#" class="Previous"><i
                                                    class="fa fa-chevron-left"></i>
                                                Previous</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li class="list-group-item"><a href="#">2</a></li>
                                        <li class="list-group-item"><a href="#">3</a></li>
                                        <li class="list-group-item">
                                            <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
                <!--sidebar-categores-box start  -->
                <!--sidebar-categores-box end  -->
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box">
                    <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Producer</h5>
                        <div class="categori-checkbox">


                            <ul class="list-group">
                                <?php
                                $sql = "SELECT DISTINCT(id_producer) FROM product 
                                    ORDER BY id DESC";
                                $result = pdo_query($sql);
                                foreach ($result as $row) {
                                ?>
                                <li class="list-group-item">
                                    <label><input type="checkbox" onclick="scrollTopAnimated()"
                                            class="common_selector producer" value="<?php echo $row['id_producer']; ?>">

                                        <?php
                                            foreach ($producer as $row1) {
                                                if ($row['id_producer'] == $row1['id']) {
                                                    echo $row1['name'];
                                                }
                                            }
                                            ?></label>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>

                        </div>
                    </div>
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Catalog</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul class="list-group">
                                    <?php
                                    $sql = "SELECT DISTINCT(id_catalog) FROM product 
                                    ORDER BY id DESC";
                                    $result = pdo_query($sql);
                                    foreach ($result as $row) {
                                    ?>
                                    <li class="list-group-item">
                                        <!-- <a class="scrollLink" href="#shop"> -->
                                        <label><input type="checkbox" onclick="scrollTopAnimated()"
                                                class="common_selector catalog"
                                                value="<?php echo $row['id_catalog']; ?>">
                                            <?php
                                                foreach ($catalog as $row1) {
                                                    if ($row['id_catalog'] == $row1['id']) {
                                                        echo $row1['name'];
                                                    }
                                                }
                                                ?></label>
                                        <!-- </a> -->
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                        <h5 class="filter-sub-titel">RAM</h5>
                        <div class="list-group-item categori-checkbox">
                            <form action="#">
                                <ul class="list-group">
                                    <?php
                                    $sql = "SELECT DISTINCT(ram) FROM product 
                                    ORDER BY id DESC";
                                    $result = pdo_query($sql);
                                    foreach ($result as $row) {
                                    ?>
                                    <li class="list-group-item">
                                        <label><input type="checkbox" onclick="scrollTopAnimated()"
                                                class="common_selector ram" value="<?php echo $row['ram']; ?>">
                                            <?php echo $row['ram']; ?></label>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Gift</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul class="list-group">
                                    <?php
                                    $sql = "SELECT DISTINCT(id_gift) FROM product 
                                    ORDER BY id DESC";
                                    $result = pdo_query($sql);
                                    foreach ($result as $row) {
                                    ?>
                                    <?php
                                        foreach ($gift as $row1) {
                                            if ($row['id_gift'] == $row1['id']) {
                                        ?>
                                    <li class="list-group-item">
                                        <label>
                                            <input type="checkbox" onclick="scrollTopAnimated()"
                                                class="common_selector gift" value="<?php echo $row['id_gift']; ?>">
                                            <?php
                                                        echo $row1['name'];
                                                        ?>
                                        </label> </li>
                                    <?php }
                                        } ?>

                                    <?php
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">CPU</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul class="list-group">
                                    <?php
                                    $sql = "SELECT DISTINCT(cpu) FROM product 
                                    ORDER BY id DESC";
                                    $result = pdo_query($sql);
                                    foreach ($result as $row) {
                                    ?>
                                    <li class="list-group-item">
                                        <label><input type="checkbox" onclick="scrollTopAnimated()"
                                                class="common_selector cpu" value="<?php echo $row['cpu']; ?>">
                                            <?php echo $row['cpu']; ?></label>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>

                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Rom</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul class="list-group">
                                    <?php
                                    $sql = "SELECT DISTINCT(rom) FROM product 
                                    ORDER BY id DESC";
                                    $result = pdo_query($sql);
                                    foreach ($result as $row) {
                                    ?>
                                    <li class="list-group-item">
                                        <label><input type="checkbox" onclick="scrollTopAnimated()"
                                                class="common_selector rom" value="<?php echo $row['rom']; ?>">
                                            <?php echo $row['rom']; ?></label>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>

                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Battery</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul class="list-group">
                                    <?php
                                    $sql = "
                                        SELECT DISTINCT(battery) FROM product 
                                        ";
                                    $result = pdo_query($sql);
                                    foreach ($result as $row) {
                                    ?>
                                    <li class="list-group-item">
                                        <label><input type="checkbox" onclick="scrollTopAnimated()"
                                                class="common_selector battery" value="<?php echo $row['battery']; ?>">
                                            <?php echo $row['battery']; ?></label>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>

                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                        <h5 class="filter-sub-titel">Hệ điều hành</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul class="list-group">
                                    <?php
                                    $sql = "SELECT DISTINCT(operating_system) FROM product 
                                    ORDER BY id DESC";
                                    $result = pdo_query($sql);
                                    foreach ($result as $row) {
                                    ?>
                                    <li class="list-group-item">
                                        <label><input type="checkbox" onclick="scrollTopAnimated()"
                                                class="common_selector operating_system"
                                                value="<?php echo $row['operating_system']; ?>">
                                            <?php echo $row['operating_system']; ?></label>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                        <h5 class="filter-sub-titel">Màng hình</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul class="list-group">
                                    <?php
                                    $sql = "SELECT DISTINCT(screen_resolution) FROM product 
                                    ORDER BY id DESC";
                                    $result = pdo_query($sql);
                                    foreach ($result as $row) {
                                    ?>
                                    <li class="list-group-item">
                                        <label><input type="checkbox" onclick="scrollTopAnimated()"
                                                class="common_selector screen_resolution"
                                                value="<?php echo $row['screen_resolution']; ?>">
                                            <?php echo $row['screen_resolution']; ?></label>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                        <h5 class="filter-sub-titel">Kích thước màn hình</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul class="list-group">
                                    <?php
                                    $sql = "SELECT DISTINCT(screen_size) FROM product 
                                    ORDER BY id DESC";
                                    $result = pdo_query($sql);
                                    foreach ($result as $row) {
                                    ?>
                                    <li class="list-group-item">
                                        <label><input type="checkbox" onclick="scrollTopAnimated()"
                                                class="common_selector screen_size"
                                                value="<?php echo $row['screen_size']; ?>">
                                            <?php echo $row['screen_size']; ?></label>
                                    </li>

                                    <?php
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                </div>
                <!--sidebar-categores-box end  -->
                <!-- category-sub-menu start -->
                <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
                    <div class="sidebar-title">
                        <h2>Laptop</h2>
                    </div>
                    <div class="category-tags">
                        <ul>
                            <li><a href="# ">Devita</a></li>
                            <li><a href="# ">Cameras</a></li>
                            <li><a href="# ">Sony</a></li>
                            <li><a href="# ">Computer</a></li>
                            <li><a href="# ">Big Sale</a></li>
                            <li><a href="# ">Accessories</a></li>
                        </ul>
                    </div>
                    <!-- category-sub-menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wraper Area End Here -->
<!-- Begin Footer Area -->

    <style>
    #loading {
        text-align: center;
        background: url('../loader.gif') no-repeat center;
        height: 150px;
    }
    </style>
    <script src="../view/js/js/jquery-1.10.2.min.js"></script>
    <script src="../view/js/js/jquery-ui.js"></script>
    <script src="../view/js/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            
        
        filter_data();

        function filter_data() {
            $('.filter_data').html('<div id="loading" style="" ></div>');
            var action = 'fetch_data';
            // var minimum_price = $('#hidden_minimum_price').val();
            // var maximum_price = $('#hidden_maximum_price').val();
            var producer = get_filter('producer');
            var catalog = get_filter('catalog');
            var gift = get_filter('gift');
            var cpu = get_filter('cpu');
            var rom = get_filter('rom');
            var ram = get_filter('ram');
            var battery = get_filter('battery');
            var screen_size = get_filter('screen_size');
            var operating_system = get_filter('operating_system');
            var screen_resolution = get_filter('screen_resolution');
            $.ajax({
                url: "../filter/fetch_data.php",
                method: "POST",
                data: {
                    action: action,
                    // minimum_price: minimum_price,
                    // maximum_price: maximum_price,
                    producer: producer,
                    catalog: catalog,
                    gift: gift,
                    cpu: cpu,
                    rom: rom,
                    ram: ram,
                    battery: battery,
                    screen_size: screen_size,
                    operating_system: operating_system,
                    screen_resolution: screen_resolution
                },
                success: function(data) {
                    $('.filter_data').html(data);

                }
            });
        }
        function get_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {

                filter.push($(this).val());

            });
            return filter;

        }
        $('.common_selector').click(function() {
            // phan tu bi an se duoc hien len
            filter_data();
        });

        // $('#price_range').slider({
        //     range: true,
        //     min: 1000,
        //     max: 65000,
        //     values: [1000, 65000],
        //     step: 500,
        //     stop: function(event, ui) {
        //         $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
        //         $('#hidden_minimum_price').val(ui.values[0]);
        //         $('#hidden_maximum_price').val(ui.values[1]);
        //         filter_data();
        //     }
        // });

    });
    </script>