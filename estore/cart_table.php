<?php

    include('conn.php');

    $result = mysqli_query($conn , "SELECT product.img as img , product.prod_name as name, product.price as price from product inner join cart on cart.img = product.img");

    
    if ($result->num_rows > 0){

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="'. $row['img'] .' " alt="" />
                    </div>
                    <div class="media-body">
                      <p>'. $row['name'] .'</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>'. $row['price'] . '</h5>
                </td>
                <td>
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5>'. $row['price'] .'</h5>
                </td>
              </tr>';
        }

    }

    mysqli_free_result($result)
?>