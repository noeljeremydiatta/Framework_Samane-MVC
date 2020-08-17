<?php
/* Smarty version 3.1.30, created on 2020-08-12 15:30:31
  from "/opt/lampp/htdocs/projects/Framework_SamaneMVC_Project/Samane_project/src/view/pdf/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f33eef74e9726_66949820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1e88b036433ba144e3f87ce32b15afe7106061a' => 
    array (
      0 => '/opt/lampp/htdocs/projects/Framework_SamaneMVC_Project/Samane_project/src/view/pdf/index.html',
      1 => 1589558194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f33eef74e9726_66949820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PDF generator</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu test page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu test get id page </a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu test list page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Upload/index">upload file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
PdfGenerator/generate">Samane Generate pdf file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/generate">Samane Generate excel file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/read">Samane read excel file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Email/sendMail">Samane Mailing </a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['pdfResult']->value)) {?>
						<div class="alert alert-warning">
							<?php echo $_smarty_tpl->tpl_vars['pdfResult']->value;?>

							<br/>
							<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/folder/pdf/samane.pdf">Download file generated</a>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
