<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PAGINA-_-PRINCIPAL</title>
        <link href="HOJA_PAGINA.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css"rel="stylesheet"type="text/css"/>
    </head>
    <body>
        
        <div class="Contenedor">
            
            <div class="Cabecera">
                
                <img  src="imagenes/Logo.png" margin-rigth="400px" width="180px" height="180px"/>
                
               <ul class="Menu">
                    <li><a href="../NOSOTROS/NOSOTROS.php"><button type="submit" class="btn btn-primary">NOSOTROS</button></a></li>  
                    <li><a href="../TOURS/TOURS.php"> <button type="submit" class="btn btn-info">TOURS</button></a></li> 
                    <li><a href="../HOTELES/HOLTELES.php"><button type="submit" class="btn btn-info">HOTELES</button></a></li> 
                    <li>
                        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#dialogo1">CONTACTO</button>
            
                         <div class="modal fade" id="dialogo1">
                         <div class="modal-dialog modal-lg modal-dialog-centered">
                         <div class="modal-content">
                             
                                 <div class="modal-body">
                       
                                    <div class="card">
                                    <div class="contenedor">
                                     <button type="button" class="btn-danger" data-dismiss="modal" >X</button>
                                    <form>
                                      <div class="mb-3">
                                          <center><label for="nombre" class="form-l">Ingrese su nombre:</label></center> 
                                          <input type="text" class="form-control" id="nombre" name="nombre">
                                      </div>
                                      </div>
        
                                      <div class="mb-3">
                                          <center><label for="nombre" class="form-l">Ingrese su E-mail:</label></center> 
                                          <input type="text" class="form-control" id="E-mail" name="E-mail">
                                      </div>
                                      </div>
                                    
                                    
                                    <div class="mb-3"><!--tama??o  centrado del formulario-->
                                        <center><label for="comentario" class="form-label">Deje su comentario</label></center>
                                      <textarea class="form-control" name="comentario" rows="10" id="comentario"></textarea>
                                     </div>
                                     <center><button type="submit" class="btn btn-primary">Enviar</button></center>
                                     </form> 
                                  </div>
                         </div>
                         </div>
                         </div> 
                    </li> 
                    
              </ul>
                </div>
                <hr>
              <!<!-- carrusel -->
                <div class="slider-frame">
                 <ul>
                  <img src="IMAGENES-CARRUCEL/slider1.jpg" alt="" width="965px" height="350px"/>
                  <img src="IMAGENES-CARRUCEL/slider2.jpg" alt="" width="965px" height="350px"/>
                  <img src="IMAGENES-CARRUCEL/slider3.jpg" alt="" width="965px" height="350px"/>
                  <img src="IMAGENES-CARRUCEL/slider4.jpg" alt="" width="965px" height="350px"/>
                 </ul>
                </div>
              <!<!-- carrusel -->
                <hr>
                
                <div class="container">
             
                    <table border="0" id="COLIBRI">
                        <tr>
                            <td>
                                <img src="imagenes/COLIBRI.PNG" alt="" width="350" height="400"/>
                            </td> 
                           
                            <td>
                                <h4>Escoja su tipo de</h4>
                                <h3><b>VIAJE A TARAPOTO</b></h3>
                                
                                <p>
                                    En Tierra Verde somos especialistas en turismo en Tarapoto. 
                                    Por ello, le proponemos dos alternativas para organizar su 
                                    viaje a la selva: nuestros paquetes convencionales y nuestras
                                    experiencias exclusivas.
                                </p>
                                
                                <a href="../TOURS/TOURS.php">PAQUETES CONVENCIONALES</a>
                                
                                <p>
                                    <img src="imagenes/camara.png" alt="" width="35" height="35"/>
                                    <i>
                                    Con nuestros paquetes convencionales podr?? conocer los lugares 
                                    mas visitados y concurridos de San Mart??n y disfrutar de la 
                                    selva de un modo sencillo y 
                                    </i>
                                    
                                </p>
                                
                                <h4><u>EXPERIENCIAS EXCLUSIVAS</u></h4>
                                
                                <p>
                                    <img src="imagenes/binocular.png" alt="" width="50" height="50"/>
                                    <i>
                                    Con nuestras experiencias exclusivas en cambio podr?? vivir 
                                    Tarapoto de un modo alternativo disfrutando de vivencias ??nicas
                                    y especiales y visitando lugares menos concurridos
                                    </i>
                                    
                                </p>
                                
                            </td>
                        </tr>
                    </table>
                    <br>
                    
                    <table border="0">
                        <tr>
                            
                            <td>
                        <center><h4>TARAPOTO UN PARAISO POR DESCUBRIR</h4></center>
                                <p>
                                    <b>
                                    Tarapoto es una ciudad ubicada en la parte norte del departamento San Mart??n
                                    en el Per??. Se encuentra a medio camino entre la cordillera andina y la selva
                                    baja amaz??nica y por su peculiar ubicaci??n geogr??fica, Tarapoto es un lugar
                                    ideal para hacer excursiones en la naturaleza. Sus alrededores est??n repletos 
                                    de parques naturales, cascadas y cataratas que en muchos casos son adem??s
                                    de f??cil acceso. De hecho, los lugares tur??sticos de Tarapoto mas conocidos 
                                    son muy accesibles y est??n preparados para los requerimentos de todo tipo
                                    de turistas.
                                    Adem??s si, est?? interesado en un tipo de turismo mas alternativo, Tarapoto
                                    tambi??n dispone de multitud de lugares secretos, poco masificados, que tambi??n
                                    satisfar??n sus exigencias. Si le gusta el turismo de aventura podr?? aprovechar 
                                    los infinitos recursos naturales que la selva de San Mart??n le ofrece; si, en 
                                    cambio, est?? interesado en en el turismo vivencial y en tours de car??cter m??s cultural, 
                                    los alrededores de Tarapoto, est??n repletos de peque??os pueblitos que son claros 
                                    exponentes de la cultura quechua- lamista. En definitiva, Tarapoto es una tierra
                                    de contrastes donde podr?? encontrar los tours y excursiones que mas se adapten a 
                                    sus necesidades vacacionales.
                                    </b>
                                </p>
                            </td>
                            <tr>
                            <td>
                            <center><img src="imagenes/mapa-tarapoto.jpg" alt=""  height="370px" width="600px"/></center>
                            </td>
                            </tr>
                        </tr>
                    </table>
                  
                </div>
                
                <br>
               
        <div class="Pie">
            <img src="imagenes/IM-Pie.png" alt="" height="40px" width="965px"/>
            <br>
            <div class="Contenido_pie">
                
                <table width="965px" border="0" >
                    
            <tr>
                <td width="300px" rowspan="2"> 
                    <img  src="imagenes/Logo.png" width="250px" height="250px"/>
                
                    <p>La catarata de Pucyaquillo est?? comprometidad con la conservaci??n del entorno
                        y el turismo responsable
                    </p>
                </td>
            <br>
            <th width="240px">CONTACTO</th>
            <th>UBICACION</th>
            </tr>
            
            <tr>
                <td>
                    <ul class="circulollenoA">
                        <em>
                            </<li>Direcci??n:
                                  <p>Jr.Mara??on 305,Shapaja</p>
                            </li>
                        </em>
                              
                        <em>    
                            <li>Telefonos:
                                <p>918196348</p>
                             </li>
                        </em> 
                              
                        <em>  
                            <li>Email:
                                <p>Catarata_Pucayaquillo@Gmail.com</p>
                              </li>
                        </em> 
                              
                    </ul>
                </td>
                <td>
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4535838832417!2d-76.2239197!3d-6.5904069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ba6d70000bdd3f%3A0x23a9f27bc364a69a!2sCascada%20de%20Pucayaquillo!5e0!3m2!1ses-419!2spe!4v1649739276241!5m2!1ses-419!2spe" width="350px" height="280px"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
                </td>
               
            </tr>
                 </table> 
                
                <br>
                 <br>
                  <br>
             </div>
            
            <div class="PieCopiright"><center><p>Todos los derechos reserados por @ FRANCOST</p></center></div>
        </div>
        <script src="js/jquery.slim.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
    </body>
</html>
