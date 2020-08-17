<?php
/* Smarty version 3.1.30, created on 2020-08-12 17:08:38
  from "/opt/lampp/htdocs/projects/Framework_SamaneMVC_Project/Samane_project/src/view/compte/ajouter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3405f6a0d9e8_95329544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ce80eb4cf59c855ab0222c94c0b050f2de554bd' => 
    array (
      0 => '/opt/lampp/htdocs/projects/Framework_SamaneMVC_Project/Samane_project/src/view/compte/ajouter.html',
      1 => 1597244914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3405f6a0d9e8_95329544 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li title ="gerer un compte"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/ajout">Créer un compte</a></li>
                <li title ="gerer un client"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/ajout">Ajouter un client</a></li>
        </ul>
       </div>
       <div class="title">Formulaire d'ajout de compte</div><br/>
       <fieldset class="form"><br/>
          <form action="compteController" method="POST">
              <div>
                  <label for="epargne">Compte Epargne</label>
                  <input type="radio" name="tyco" id="epargne"  value="epargne">
                  <label for="courant">Compte Courant</label>
                  <input type="radio" name="tyco" id="courant"  value="courant">
                  <label for="bloque">Compte Bloqué</label>
                  <input type="radio" name="tyco" id="bloque"  value="bloque">
              </div><br/>
              <div class="group">
                  <label for="numag">Num agence :</label>
                  <input type="number" name="agence" id="numag"/>
               </div><br/>
               <div class="group">
                  <label for="rib">RIB :</label>
                  <input type="number" name="rib" id="rib"/>
                </div><br/>
                <div class="group">
                  <label for="numco">Num compte :</label>
                  <input type="number" name="numcompte" id="numco"/>
                </div><br/>
                <div class="group">
                  <label for="montant">Montant :</label>
                  <input type="number" name="montant" id="montant"/>
                </div><br/>
                <div class="group">
                  <label for="sal">Salaire :</label>
                  <input type="number" name="salaire" id="sal"/>
                </div><br/>
                <div class="group">
                  <label for="prof">Profession :</label>
                  <input type="text" name="profession" id="prof"/>
                </div><br/>
                <div>
                  <label for="frais">Frais d'ouveture </label>
                  <input type="checkbox" name="frais" id="frais"/>
                </div><br/>
                <div>
                  <label for="agios">Agios trimestriel </label>
                  <input type="checkbox" name="agios" id="agios"/>
                </div><br/>
                
                <div class="bout">
                    <input type="submit" name="envoyer" id="envoyer" value="envoyer">
                    <input type="reset" name="annuler" id="annuler" value="annuler">
                </div>

          </form><br/>
        </fieldset> <br><br/>

        <fieldset class="formu">
        <div class="tab">Liste des comptes</div><br/>
        <table border ="1">
        <tr>
        <td>ID</td>
        <td>type compte</td>
        <td>Num Agence</td>
        <td>RIB</td>
        <td>numero compte</td>
        <td>Montant inintial</td>
        <td>Salaire</td>
        <td>Profession</td>
        <td>Frais</td>
        <td>Agios</td>
        </tr>
        </table>
        </fieldset>   
    <footer class="bas">@Copyright-2020 Jeremy Simplon @Auf Dakar P3 Dev Web & Mobile</footer>
<?php echo '<script'; ?>
 type="text/javascript" src="public/js/compte.js"><?php echo '</script'; ?>
>    
</body>
</html><?php }
}
