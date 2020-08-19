<?php
/* Smarty version 3.1.30, created on 2020-08-19 12:04:15
  from "/opt/lampp/htdocs/projets/simplon/framework/samanemvc/samanemvc/src/view/client/client.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3cf91f159330_83850748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fca10f89635a8b4c2d9fa61bc9996ed015c9faf7' => 
    array (
      0 => '/opt/lampp/htdocs/projets/simplon/framework/samanemvc/samanemvc/src/view/client/client.html',
      1 => 1597336046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3cf91f159330_83850748 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"--> 
      <!-- <link href="./node_modules/bootstrap/dist/css/bootstrap-grid.css.map" rel="stylesheet" type="text/css">
      <link href="./node_modules/bootstrap/dist/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css">
      <link href="./node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css.map" rel="stylesheet" type="text/css">
      <link href="" rel="stylesheet" type="text/css"> -->
     
  <!-- CSS only -->
<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/node_modules/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/node_modules/bootstrap/dist/css/bootstrap-reboot.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<style>

  .nav-item {
    padding: 0px 5px;
    border-radius: 3px;
  }
</style>

<!-- 
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/jquery.min.js" ><?php echo '</script'; ?>
>

<!-- <?php echo '<script'; ?>
 src="./node_modules/jquery/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/node_modules/datatables.net/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/iframe.js"><?php echo '</script'; ?>
>

</head>
<body >
  <div class="col-lg-12">
    <div class="row" id="top">
      <div class="container col-md-12" >
        <nav class="navbar navbar-expand-sm bg-info navbar-dark navbar-fixed-top">
          <a class="navbar-brand col-lg-9" href="#">Logo</a>
          <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="btn">Ok</button>
          </form>
        </nav>
      </div>
    </div>
    <div class="row col-lg-12" id="bottom">
      <div class=" row col-lg-3" id="left" style="margin-top: 20px;">
        <div class="card col-lg-12 bg-info">
            <div class="card-body">
                Navigation
            </div>
        </div>
        <div class="card col-lg-12 text-center " style="width:100%">
          <div class="card-body row">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/image/Profil.jpg" class="img-responsive rounded-circle col-lg-5" alt="Profil">
            <div class="col-lg-7">
              <h6 class="card-title">Moussa DIENE</h6>
              <p class="card-text"><i>Fonction : Responsable</i>.</p>
            </div>
          </div>
          <a href="https://github.com/moussadiene" class="btn btn-info btn-block"  target="_blank">profil</a>
        </div>
        <div class="card col-12 bg-info" style="margin-top: 20px;">
          <div class="card-body">
            <nav class="navbar navbar-dark bg-info col-lg-12">
              <ul class="navbar-nav col-lg-12">
                  <li class="nav-item dash active ">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Dashboad"><span class="fa fa-home"></span> &ThinSpace;&ThinSpace; Dashboad</a>
                  </li>
                  <li class="nav-item client">
                      <!-- <a class="nav-link" href="#" id="ok"><span class="fa fa-user"></span> &ThinSpace;&ThinSpace;Gestion Client</a> -->
                      <a class="nav-link" href="#" onclick="vueClient();"><span class="fa fa-user"></span> &ThinSpace;&ThinSpace;Gestion Client</a>
                  </li>
                  <li class="nav-item compte">
                      <a class="nav-link" href="#" onclick="vueCompte();"><i class="fas fa-briefcase"></i> &ThinSpace;&ThinSpace;Gestion Compte</a>
                  </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="col-lg-9" style="margin-top: 20px;" id="contain">
        <div class="jumbotron">
          <h1>Bienvenue banque du peuple </h1>
        
          <h2><a href="https://github.com/moussadiene" class="btn btn-success" target="_blank"> Djine</a></h2>
            
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html><?php }
}
