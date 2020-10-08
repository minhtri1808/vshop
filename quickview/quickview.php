<?php
include '../model/pdo.php';
include '../model/product.php';
    if(isset($_POST['quickview'])){
        $output='';
        $idpro=$_POST['quickview'];
        $pro= getproductbyid($idpro);
        $idpro=$pro['id'];
        $img=$pro['image_product_detail'];
        $price=$pro['price'];
        $name=$pro['name'];
        $output.='
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-inner-area row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images slider-navigation-1">
                            <div class="lg-image">
                                <img src="../upload/'.$img.'" alt="product image">
                            </div>
                            
                        </div>
                        
                    </div>
                    </div>';

            // <!--// Product Details Left -->
            $output.=' 
        <div class="col-lg-7 col-md-6 col-sm-6">
            <div class="product-details-view-content pt-60">
                <div class="product-info">
                    <h2>'.$name.'</h2>
                    <div class="rating-box pt-20">
                        <ul class="rating rating-with-review-item">
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                    <div class="price-box pt-20">
                        <span class="new-price new-price-2">'.number_format("$price",0,",",".").' VND</span>
                    </div>
                    <div class="product-desc">
                    <table class="table">
                    <tbody>
                        
                        <tr>
                            <th scope="row">Màn hình:</th>
                            <td>
                                <p>'.$pro['screen_size'].'</p>
                            </td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Hệ điều hành:</th>
                            <td>
                                <p>'.$pro['operating_system'].'</p>
                            </td>
                        </tr>
                        
                        <tr>
                            <th scope="row">RAM:</th>
                            <td>
                                <p>'.$pro['ram'].'</p>
                            </td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Dung lượng pin:</th>
                            <td>
                                <p>'.$pro['battery'].'</p>
                            </td>
                        </tr>
                        <!-- <tr>
                            <th scope="row">Hệ điều hành:</th>
                            <td>
                                <a href="#"><img src="../view/img/master-card.png" alt=""></a>
                                <p>Any international shipping and import charges are paid in part to Pitney Bowes Inc.</p>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
                    </div>
                    <div class="product-variants">
                    <div class="produt-variants-size">
                    <label>Màu:</label>
                    <ul class="color_list">
                        <li>';
                            
                                $productdetail=getdetail($idpro);
                                foreach ($productdetail as $productdetail) {
                                    $output .='
                                    <a style="background-color:'.$productdetail['color_code'].'; cursor: pointer; padding: 4px" href="index.php?act=prodetail&idpro='.$productdetail['id_product'].'&idprodetail='.$productdetail['id'].'">'.$productdetail['name_color'].'</a>
                                    ';
                                }
                            
                        $output.= '</li>
                        </ul>
                </div>
                    </div>
                    <div class="single-add-to-cart">
                    <form action="index.php?act=viewcart" method="post" class="cart-quantity">
                    <input type="hidden" name="idpro" value="'.$idpro.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="price" value="'.$price.'">                               
                    <input type="hidden" name="image" value="'.$img.'">
                            
                            <button  class="add-to-cart" type="submit" style="padding:0;"><input style="background: transparent;
                            border: none;
                            font-size: 1.5rem;
                            
                        " type="submit" name="submit" value="Mua hàng" ></button>
                        </form>
                    </div>
                    <div class="product-additional-info pt-25">
                        <div class="product-social-sharing pt-25">
                        

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
        ';
        echo $output;
    }
?>


