<?php   
 $connect = mysqli_connect("localhost", "root", "", "zzz");  
 $query = "SELECT * FROM product ORDER BY product_price desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>How to load Product on price change using Ajax Jquery with PHP Mysql</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:800px;">  
                <br />  
                <h3 align="center">Load Product on price change using Ajax Jquery with PHP Mysql</h3>  
                <br />  
                <div align="center">  
                     <input type="range" min="10000" max="55000" step="1000" value="10000" id="min_price" name="min_price" />  
                     <span id="price_range"></span>  
                </div>  
                <br /><br /><br />  
                <div id="product_loading">  
                <?php  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <div style="border:1px solid #ccc; padding:12px; margin-bottom:16px; height:375px;" align="center">  
                          <img src="<?php echo $row["product_image"];?>" class="img-responsive" />  
                          <h3><?php echo $row["product_name"]; ?></h3>  
                          <h4>Price - <?php echo $row["product_price"]; ?></h4>  
                     </div>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#min_price').change(function(){  
           var price = $(this).val();  
           $("#price_range").text("Product under Price Rs." + price);  
           $.ajax({  
                url:"load_product.php",  
                method:"POST",  
                data:{price:price},  
                success:function(data){  
                     $("#product_loading").fadeIn(500).html(data);  
                }  
           });  
      });  
 });  
 </script>  
