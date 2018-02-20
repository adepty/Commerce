
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.2.1.352"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "museconfig.js", "jquery.watch.js", "webpro.js", "require.js", "produtos.css"], "outOfDate":[]};
</script>
  
  <title>Produtos</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=3916556066"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre.css?crc=3930608956"/>
  <link rel="stylesheet" type="text/css" href="css/produtos.css?crc=3835139931" id="pagesheet"/>

  <style type="text/css">
    
    #visualizar{
      z-index:97;
      background-color: #e67e20;
      color: #fff;
      font-weight: bold;
      min-height:30px;
      width:200px;
      height: 50px;
      position:relative;
      margin-right:-10000px;
      margin-top:450px;
      margin-bottom: 50px;
      margin-left:-33px;
      border-radius: 15px;
      left:105px;
      background:transparent #4169E1 no-repeat 0px 0px;}

    #visualizar:hover{
      background:transparent #FFDEAD
      no-repeat 0px 0px;

    }

      #visualizar:active{
        background:transparent #D3D3D3 no-repeat 0px 0px;}

        #widgetu118.frm-sub-st #visualizar{
          background:transparent #FFDEAD no-repeat 0px 0px;}
  </style>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu75"><!-- group -->
     <div class="browser_width grpelem" id="u75-bw">
      <div id="u75"><!-- group -->
       <div class="clearfix" id="u75_align_to_page">
        <div class="clip_frame grpelem" id="u97"><!-- image -->
         <img class="block" id="u97_img" src="images/carrinho_vazio.png?crc=3826677118" alt="" width="73" height="65"/>
        </div>
        <div class="clip_frame grpelem" id="u91"><!-- image -->
         <img class="block" id="u91_img" src="images/users-add-user-icon.png?crc=424074345" alt="" width="63" height="63"/>
        </div>
        <a class="nonblock nontext clip_frame grpelem" id="u103" href="login.html"><!-- image --><img class="block" id="u103_img" src="images/exit-icon-3.png?crc=341737989" alt="" width="43" height="43"/></a>
       </div>
      </div>
     </div>
     <div class="browser_width grpelem" id="u76-bw">
      <div id="u76"><!-- group -->
       <div class="clearfix" id="u76_align_to_page">
        <div class="pointer_cursor MuseLinkActive clearfix grpelem" id="u84"><!-- group -->
         <a class="block" href="produtos.html"></a>
         <a class="nonblock nontext MuseLinkActive grpelem" id="u86-4" href="produtos.html"><!-- rasterized frame --><img id="u86-4_img" alt="Produtos" width="97" height="28" src="images/u86-4.png?crc=3971695628"/></a>
        </div>
        <div class="pointer_cursor clearfix grpelem" id="u89"><!-- group -->
         <a class="block" href="clientes.html"></a>
         <a class="nonblock nontext grpelem" id="u90-4" href="clientes.html"><!-- rasterized frame --><img id="u90-4_img" alt="Cliente" width="97" height="28" src="images/u90-4.png?crc=3815241545"/></a>
        </div>
        <div class="clearfix grpelem" id="u109"><!-- group -->
         <a class="nonblock nontext grpelem" id="u110-4" href="login.html"><!-- rasterized frame --><img id="u110-4_img" alt="Logout" width="80" height="28" src="images/u110-4.png?crc=4137310762"/></a>
        </div>
       </div>
      </div>
     </div>
     <a class="nonblock nontext clip_frame grpelem" id="u78" href="index.html"><!-- image --><img class="block" id="u78_img" src="images/logo.png?crc=4254901078" alt="" width="385" height="262"/></a>
    </div>
    <img class="colelem" id="u117-4" alt="Cadastro de Produtos" width="348" height="29" src="images/u117-4.png?crc=121464987"/><!-- rasterized frame -->

    <?php
 require_once ('produto.class.php');

 require_once('lib/nusoap.php');

    $client = new nusoap_client(
      "http://localhost/commerce/servidor.php?wsdl","wsdl");
    $erro = $client->getError();
    if($erro){
      echo 'Erro: '.$erro;
      exit();
    }else{
      $r = $client->call('buscarTodos',
      array());
    }
    echo "valor".$r;
?>
<section class="container"><b>
  <meta charset="utf-8"><h3 font face="Arial">Cadastro de Produtos</h3><b>
  <table class="table table-hover">
    <tr class="warning">
      <th>id</th>
      <th>nome</th>
      <th>codigo</th>
      <th>tipo</th>
      <th>qtda</th>
      <th>descricao</th>
       <th>Alterar</th>
      <th>Excluir </th>
    </tr>

<?php
  foreach($r as $linha){
    print "<tr>";
    print "<td>".$linha['id']."</td>";
    print "<td>".$linha['nome']."</td>";
    print "<td>".$linha['codigo']."</td>";
    print "<td>".$linha['tipo']."</td>";
    print "<td>".$linha['qtda']."</td>";
    print "<td>".$linha['descricao']."</td>";
    print "<td><a href='Altprodutos.php?id=".$linha['id']."'>Alterar</a><td>";
    print "<td><a href='Apgprodutos.php?id=".$linha['id']."'>Excluir</a><td>";
    print "</tr>";
  }
  print "</table>";
?>
    </section>
    
    <div class="verticalspacer" data-offset-top="629" data-content-above-spacer="664" data-content-below-spacer="109"></div>
    <div class="browser_width colelem" id="u77-bw">
     <div id="u77"><!-- simple frame --></div>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u145-17-r.png?crc=4235726300" alt=""/>
   <img class="preload" src="images/u145-17-m.png?crc=4216307748" alt=""/>
   <img class="preload" src="images/u145-17-fs.png?crc=3979036105" alt=""/>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),i=0;i<f.length;i++)if("text/css"==f[i].type){var h=(f[i].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!h||!h[1]||!h[2])break;b[h[1]]=h[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(i=0;i<Muse.assets.required.length;){var h=Muse.assets.required[i],l=h.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(i,1),"undefined"!=typeof b[h]&&(k!=b[h]>>>24||l!=(b[h]&16777215))&&Muse.assets.outOfDate.push(h)):i++;f.className="version";break;case "js":k.match(/^jquery-[\d\.]+/gi)&&d&&d().jquery=="1.8.3"?Muse.assets.required.splice(i,1):i++;break;default:throw Error("Unsupported file type: "+
l);}}f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch","webpro"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#widgetu118', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu118 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4108833657" type="text/javascript" async data-main="scripts/museconfig.js?crc=169177150" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>