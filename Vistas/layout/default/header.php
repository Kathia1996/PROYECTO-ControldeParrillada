
<?php
/**
 * Created by PhpStorm.
 * User: Kathia
 * Date: 24/10/14
 * Time: 01:35 AM
 */
?>
<html>
    <head>
        <title><?php if(isset($this->titulo)) {echo $this->titulo;}?></title>
        <meta http-equiv="CONTENT-TYPE" content="text/html;charset=utf-8"/>
        <link href="<?php echo $_layoutParams['ruta_css']?>estilos.css" rel="stylesheet"  type="text/css"/>

    </head>
<body>
<div id="main">
    <div id="header">
        <h3><?php echo APP_NAME; ?></h3>
        <p>Desde hoy las parrilladas no serán lo mismo</p>
    </div>


    <div id="top_menu">
        <ul>
            <?php if(isset($_layoutParams['menu'])):?>
                <?php for($i = 0; $i <count ($_layoutParams['menu']); $i++): ?>
                        <?php
                        if($item && $_layoutParams['menu'][$i]['id'] == $item){
                            $_item_style='current';
                        }
                        else{
                            $_item_style='';
                        }
                        ?>
                    <li id="<?php echo $_item_style; ?>"><a href="<?php echo $_layoutParams['menu'][$i]['enlace']; ?>"> <?php echo $_layoutParams ['menu'][$i]['titulo']; ?></a></li>
                <?php endfor; ?>
            <?php endif; ?>
        </ul>
    </div>