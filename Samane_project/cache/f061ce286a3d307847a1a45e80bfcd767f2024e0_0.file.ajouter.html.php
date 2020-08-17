<?php
/* Smarty version 3.1.30, created on 2020-08-12 18:39:16
  from "/opt/lampp/htdocs/projects/Framework_SamaneMVC_Project/Samane_project/src/view/client/ajouter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f341b342dcda1_39586538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f061ce286a3d307847a1a45e80bfcd767f2024e0' => 
    array (
      0 => '/opt/lampp/htdocs/projects/Framework_SamaneMVC_Project/Samane_project/src/view/client/ajouter.html',
      1 => 1597250340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f341b342dcda1_39586538 (Smarty_Internal_Template $_smarty_tpl) {
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
Client/ajout">Ajouter un client</a></li>
            </ul>
       </div><br/>

       <div class="title">Formulaire d'ajout de client</div><br/>
       <fieldset class="form"><br/>
          <form action="clientController" method="POST">     
          <div id ="first">
                  <label for="newcli">Nouveau Client</label>
                  <input type="radio" name="stacli" id="newcli" value="nouveau">
                  <label for="cliexi">Client Existant</label>
                  <input type="radio" name="stacli" id="cliexi"  value="existant">
          </div><br>
          <div id="second">
                  <label for="cliphy">Client physique</label>
                  <input type="radio" name="typecli" id="cliphy" value="physique">
                  <label for="climo">Client Moral</label>
                  <input type="radio" name="typecli" id="climo"  value="moral">
          </div><br>
              
        <div class="group">
                  <label for="nom">Nom :</label>
                  <input type="text" name="nom" id="nom"/><br><br/>
                  <label for="prenom">Prénom :</label>
                  <input type="text" name="prenom" id="prenom"/><br><br/>
                  <label for="adresse">Adesse :</label>
                  <input type="text" name="adresse" id="adresse"/><br><br/>
                  <label for="email">Email :</label>
                  <input type="email" name="email" id="email"/><br><br/>
                  <label for="telephone">Téléphone :</label>
                  <input type="tel" name="telephone" id="telephone"/><br><br/>
        </div>
        <div class="group">
                  <label for="nomem">Nom employeur :</label>
                  <input type="text" name="nomem" id="nomem"/><br><br/>
                  <label for="raison">Raison sociale :</label>
                  <input type="text" name="raison" id="raison"/><br><br/>
                  <label for="adem">Adresse employeur :</label>
                  <input type="text" name="adem" id="adem"/><br><br/>
        </div>
        <div class="bout">
                    <input type="submit" name="envoyer" id="envoyer" value="envoyer">
                    <input type="reset" name="annuler" id="annuler" value="annuler">
        </div>
          </form><br/>
          </fieldset>
          <fieldset class="formu">
        <div class="tab">Liste des clients</div><br/>
        <table border="1">
        <tr>
        <td>ID</td>
        <td>Statut</td>
        <td>Type</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Adresse</td>
        <td>Email</td>
        <td>Tel:</td>
        <td>Employeur</td>
        <td>Raison</td>
        <td>Adresse employeur</td>
        </tr>
        </table> 
        </fieldset> 
    <footer class="bas">@Copyright-2020 Jeremy Simplon @Auf Dakar P3 Dev Web & Mobile</footer>
<?php echo '<script'; ?>
 type="text/javascript" src="public/js/client.js"><?php echo '</script'; ?>
>    
</body>
</html><?php }
}
