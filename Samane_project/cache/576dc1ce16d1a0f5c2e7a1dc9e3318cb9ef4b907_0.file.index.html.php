<?php
/* Smarty version 3.1.30, created on 2020-08-12 17:59:08
  from "/opt/lampp/htdocs/projects/Framework_SamaneMVC_Project/Samane_project/src/view/welcome/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3411cc12bec2_34495018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '576dc1ce16d1a0f5c2e7a1dc9e3318cb9ef4b907' => 
    array (
      0 => '/opt/lampp/htdocs/projects/Framework_SamaneMVC_Project/Samane_project/src/view/welcome/index.html',
      1 => 1597247944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3411cc12bec2_34495018 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="formulaire d'ouverture de compte de la banque du peuple"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css"/>
 
    <title>GESTION DE CLIENT</title>
</head>
<body>
   
       <div class="nav">
         <ul>
                <li title ="gestion de compte"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/ajout">Créer un compte</a></li>
                <li title ="gestion de client"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/ajout">Ajouter un client</a></li>
            </ul>
	   </div>
	   <div>
		<img src="public/image/welcome.jpg" alt="Bienvenue" width="100%"> 
	   </div>
      
        
    <footer class="bas">@Copyright-2020 Jeremy Simplon @Auf Dakar P3 Dev Web & Mobile</footer>    
</body>
</html><?php }
}
