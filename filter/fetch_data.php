<?php



include('../model/admin/filter/database_connection.php');
include '../model/admin/filter/pdo.php';
include '../global.php';
include '../model/catalog.php';
include '../model/admin/filter/producer.php';
include '../model/admin/filter/productdetail.php';
include '../model/admin/filter/gif.php';
$prodetail = show_productdetail();
$gift = show_gift();
$producer =  show_producer();
$catalog = show__catalog();
// var_dump($prodetail);
if (isset($_POST["action"])) {
	$sql = "SELECT * FROM product WHERE 1";
	// if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
	// 	$sql .= "
	// 	 AND product_price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
	// 	";
	// }
	if (isset($_POST["ram"])) {
		$ram_filter = implode("','", $_POST["ram"]);
		$sql .= "
		 AND ram IN('" . $ram_filter . "')";
	}
	if (isset($_POST["producer"])) {
		$producer_filter = implode("','", $_POST["producer"]);
		$sql .= "
		 AND id_producer IN('" . $producer_filter . "')
		";
	}
	if (isset($_POST["catalog"])) {
		$catalog_filter = implode("','", $_POST["catalog"]);
		$sql .= "
		 AND id_catalog IN('" . $catalog_filter . "')
		";
	}
	if (isset($_POST["gift"])) {
		$gift_filter = implode("','", $_POST["gift"]);
		$sql .= "
		 AND id_gift IN('" . $gift_filter . "')
		";
	}
	if (isset($_POST["rom"])) {
		$rom_filter = implode("','", $_POST["rom"]);
		$sql .= "
		 AND rom IN('" . $rom_filter . "')
		";
	}
	if (isset($_POST["cpu"])) {
		$cpu_filter = implode("','", $_POST["cpu"]);
		$sql .= "
		 AND cpu IN('" . $cpu_filter . "')
		";
	}
	if (isset($_POST["battery"])) {
		$battery_filter = implode("','", $_POST["battery"]);
		$sql .= "
		 AND battery IN('" . $battery_filter . "')
		";
	}
	if (isset($_POST["screen_size"])) {
		$screen_size_filter = implode("','", $_POST["screen_size"]);
		$sql .= "
		 AND screen_size IN('" . $screen_size_filter . "')
		";
	}
	if (isset($_POST["operating_system"])) {
		$operating_system_filter = implode("','", $_POST["operating_system"]);
		$sql .= "
		 AND operating_system IN('" . $operating_system_filter . "')
		";
	}
	if (isset($_POST["screen_resolution"])) {
		$screen_resolution_filter = implode("','", $_POST["screen_resolution"]);
		$sql .= "
		 AND screen_resolution IN('" . $screen_resolution_filter . "')
		";
	}

	$statement = $connect->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	$output .= ' <div class="col-lg-12 shop-top-bar mt-30">
                                        <div class="shop-bar-inner">
                                            <div class="product-view-mode">
                                            </div>
										<div style="display: flex;" class="toolbar-amount">';
	// $name = '';
	// if (isset($_POST["producer"])) {
	// 	$producer_filter = implode("','", $_POST["producer"]);
	// 	foreach ($producer as $row1) {
	// 		if ($producer_filter == $row1['id']) {
	// 			$name .= $row1['name'];
	// 		}
	// 	}
	// }

	// var_dump($name);

	// $legnth = count($name);
	// for ($i = 0; $i < offset($name); $i++) {
	// 	$output .= '<div style="background: khaki;padding: 0.5px 7px;border-radius: 6px;margin-right: 5px;">
	// 			<h4 style="font-size: 15px;color: darkblue;font-family: monospace;">' . $name . '<i style="color: red;font-size: 19px;" class="fa fa-trash-o"></i></h4>
	// 			</div>';
	// }

	$output .= '</div>
                                        </div>
                                        
                                    </div>';
	if ($total_row > 0) {
		foreach ($result as $row) {
			$output .= '<div class="col-lg-4 col-md-4 col-sm-6 mt-40">';
			$output .= '<div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="index.php?act=prodetail&idpro=' . $row['id'] . '">
                                                    <img src="' . $path . $row['image'] . '">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="index.php?act=prodetail&idpro=' . $row['id'] . '">';
			foreach ($producer as $row1) {
				if ($row['id_producer'] == $row1['id']) {
					$output .= $row1["name"];
				}
			}
			$output .=	'</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                        <h4><a class="product_name" href="index.php?act=prodetail&idpro=' . $row['id'] . '">' . $row['name'] . '</a></h4>
                                                    <div class="price-box"><span>';
			foreach ($prodetail as $row1) {
				if ($row1['id'] == $row['id']) {
					$price =$row1["price"];
					$output .= number_format("$price",0,",",".").'VND';
				}
			}
			$output .=	'</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="index.php?act=prodetail&idpro='.$row['id'].'">Xem Chi Tiết</a></li>
                                                        <li ><a class="quick-view" id="' . $row['id'] . '" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

			';
			$output .= '</div>';
		}
	} else {
		$output = '
	<div style="margin: auto;
  width: 50%;"><img src="https://fptshop.com.vn/Content/v5d/images/noti-search.png">
		<h4><br>Rất tiếc chúng tôi không tìm thấy kết quả theo yêu cầu của bạn
Vui lòng thử lại .
		</h4></div>';
	}
	echo $output;
}
?>


<div class="modal fade modal-wrapper" id="exampleModalCenter" >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="quickview">

                        </div>
                    </div>
                </div>   
            
            <!-- Quick View | Modal Area End Here -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                $('.quick-view').click(function(){
                    var idpro= $(this).attr("id");
                    $.ajax({
                        url:"../quickview/quickview.php",
                        method:"POST",
                        data:{quickview:idpro},
                        success:function(data){
                            $('#quickview').html(data);
                            $('#exampleModalCenter').modal("show");
                        }
                    });

                })
            })
            </script>