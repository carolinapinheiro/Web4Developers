<?php   
// conectar com a base dados
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "shopweb4developers");  
 ?>  
 <!-- INICIO HTML -->
 <!DOCTYPE html>  
 <html>  
      <head>  
      <!-- SCRIPTS, LINKS, BOOTSTRAP E AJAX -->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="styles/shop.css">
           <link rel="icon" href="imagens/logopreto.png">
      <!-- icons -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src='https://kit.fontawesome.com/a076d05399.js'></script>
           
      </head>  
      <body>  
           <br>  
           <div class="container" style="width:800px;">   <!-- div container -->
              <!-- Logo da pagina -->
              <img src="imagens/shopon.png">
               <!-- Criar as tabs productos e carrinho -->
                <ul class="nav nav-tabs">  
                    <!-- Tab produtos -->
                     <li class="active"><a data-toggle="tab" href="#products">Produtos</a></li>  
                     <!-- Tab cart -->                                               <!-- Contar o numero de produtos activos no carrrinho ---------------------------------------------------->
                     <li><a data-toggle="tab" href="#cart">Cart <span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a></li>  
                    <a href="../index.html"><button class="btn btn-warning" style="position:absolute; margin-left:23%"> &larr;  Back to Home</button></a>
               </ul>  
                 <!-- Pagina tab produtos -->
                <div class="tab-content">  <!-- div tab content --> 
                     <div id="products" class="tab-pane fade in active">  
                      <!-- Inicio da query para adicionar produtos da base de dados na pagina -->
                     <?php  
                     $query = "SELECT * FROM productos ORDER BY id ASC";  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?> 
                     <!-- Fim da query --> 
                     <div class="col-md-4" style="margin-top:12px;">  <!-- div col-md-4 --> 
                          <div style="border:5px solid #333; background-color:white; border-radius:5px; padding:8px; height:400px;" align="center">  
                               <!-- imagem produto da db-->
                               <img src="imagens/<?php echo $row["imagem"]; ?>" class="img-responsive" /><br />  
                               <!-- nome do produto da db -->
                               <h4 class="text-info"><?php echo $row["nome"]; ?></h4>  
                               <!-- preço do produto da db -->
                               <h4 class="text-danger"> <?php echo $row["preco"]; ?> € </h4>  
                               <!-- Quantidade -->
                               <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["nome"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["preco"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />  
                          </div>  <!-- fim div border -->
                     </div>  <!-- fim div col-md-4 -->
                     <?php  
                     }  
                     ?>  
                     </div>  <!-- fim div id produtos -->

                     <div id="cart" class="tab-pane fade">   <!-- div tab pane --> 
                          <div class="table-responsive" id="order_table">   <!-- div table-responsive --> 
                               <table class="table table-bordered">    <!-- div table --> 
                                    <tr>  
                                    <!-- table do carrinho de compras -->
                                         <th width="40%">Product Name</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <!-- nome do produto adicionado -->
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         <!-- quantidade de vezes do produto adicionado -->
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         <!-- preço do produto adicionado -->
                                         <td align="right"><?php echo $values["product_price"]; ?> €</td> 
                                          <!-- multiplicar quantidade com o preço  -->
                                         <td align="right"><?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?> €</td> 
                                          <!--button de remover produto  -->
                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <!-- total do valor a pagar -->
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right"><?php echo number_format($total, 2); ?>€</td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                    <!-- ir para a finalização do pagamento e dados -->
                                         <td colspan="5" align="center">  
                                              <form method="post" action="confirm.php">  
                                                   <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                                              </form>  
                                         </td>  
                                    </tr>  

                                    <?php  
                                    }  
                                    ?>  

                               </table>  <!-- fim table -->
                          </div>   <!-- fim div table_responsive -->
                     </div>  <!-- fim div tab pane -->
                </div>  <!-- fim da tab-content -->
           </div> <!-- fim da div container -->
      </body>   <!-- fim body -->

     <div class="footer" id="contacts"> <!-- div foooter -->
          <div class="container"><!-- div container -->
            <hr class="hrFooter">
                 <img class="imgFooter" src="imagens/logoBrancoSmall.png"><br>
   
                    <p>Have a project you’d like to discuss? I'd love to hear from you.</p><br> 
                    <ul>
                      <a href="">HOME</a> 
                      <a href="">ABOUT</a> 
                      <a href="">TEAM</a>
                    </ul>
                    <br>
                    <p class="mail">web4developers@gmail.com</p><br>
    
                    <div class="icons">
                         <i style='font-size:24px' class='fab'>&#xf16d;</i>
                         <i style='font-size:24px' class='fab'>&#xf082;</i>
                         <i style='font-size:24px' class='fab'>&#xf081;</i>
                         <i style='font-size:24px' class='fab'>&#xf08c;</i>
                         <i style='font-size:24px' class='fab'>&#xf092;</i>
                    </div>

                    <p class="copyright">Copyright © 2020 Web4Developers</p>
          </div><!-- fim div container -->
     </div><!--fim div foooter -->
     
 </html>  <!-- FIM HTML -->

 <!-- SCRIPTS -->
 <script>  
 $(document).ready(function(data){ 
      // adicionar evento ao botão add to cart 
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add"; 
           //se os produtos forem maior que 0 executa isto: 
           if(product_quantity > 0)  
           {  
                $.ajax({  
                      // envia para action.php
                     url:"action.php",  
                     // metodo para enviar a data para o servidor
                     method:"POST",  
                     // receber a data do servidor e vir em formato json
                     dataType:"json",  
                      // a data que vai ser enviada para o servidor
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                      // a função recebe a data do servidor e insere nesta data argumentos
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      // delete function
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>
<!-- FIM DOS SCRIPTS -->
