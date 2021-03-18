<?php
session_start();
$mensaje="";
error_reporting(0);
include("global/conexion.php");
include 'global/config.php';
if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case 'Agregar':
            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);

            }else{
            //NO se hace nada
            }
            if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
           
            }else{
             //NO se hace nada
            }
            if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
            
            }else{
            //NO se hace nada
            }
            if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
              
            }else{
              //NO se hace nada
            }
            if(!isset($_SESSION['CARRITO'])){
               $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO,
               ); 
               $_SESSION['CARRITO'][0]=$producto;
               $mensaje="Producto agregado al carrito";
            }else{
                foreach($_SESSION['CARRITO'] as $indice=>$producto){
                    if($producto['NOMBRE']==$NOMBRE){
                        // print_r($_SESSION['CARRITO'][$indice]);
                        $_SESSION['CARRITO'][$indice]['CANTIDAD']=$_SESSION['CARRITO'][$indice]['CANTIDAD']+1;
                        $mensaje="Producto agregado al carrito";
                    }else{
                        $NumeroProductos=count($_SESSION['CARRITO']);
                        $producto=array(
                            'ID'=>$ID,
                            'NOMBRE'=>$NOMBRE,
                            'CANTIDAD'=>$CANTIDAD,
                            'PRECIO'=>$PRECIO,
                            'CANTIDAD'=>$CANTIDAD
                           ); 
                           $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                           $mensaje="Producto agregado al carrito";
                    }
                }

                  
            }
     

        break;
        case 'Eliminar':
            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                foreach($_SESSION['CARRITO'] as $indice=>$producto){
                    if($producto['ID']==$ID){
                        unset($_SESSION['CARRITO'][$indice]);
                    }
                }
            }else{
   
            }
        break;
            
    }

}

?>