<?php

  require_once('lib/nusoap.php');
    $client = new nusoap_client(
      "http://localhost/commerce/servidor.php?wsdl",
      "wsdl");
    $erro = $client->getError();
    if($erro){
      echo 'Erro: '.$erro;
      exit();
    }else{
      $r = $client->call('inserirCliente',
      array('nome'=>$_POST['nome'],
        'serie'=>$_POST['codigo'],
        'tipo'=>$_POST['tipo'],
        'qtda'=>$_POST['qtda'],
        'descricao'=>$_POST['descricao']
      ));
    }

?>
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

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
    <form class="form-grp clearfix colelem" id="widgetu118" method="POST" enctype="multipart/form-data" action="scripts/form-u118.php"><!-- none box -->
     <div class="fld-grp clearfix grpelem" id="widgetu128" data-required="true"><!-- none box -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u129-4" for="widgetu128_input"><!-- content --><span class="actAsPara">Nome do produto:</span></label>
      <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u131-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="nome" name="nome" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu128_prompt" for="widgetu128_input"><span class="actAsPara">Inserir nome do produto</span></label></span>
      <div class="fld-message clearfix grpelem" id="u130-4"><!-- content -->
       <p>Obrigatório</p>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu155" data-required="true" data-type="float"><!-- none box -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u156-4" for="widgetu155_input"><!-- content --><span class="actAsPara">Código do Produto:</span></label>
      <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u158-4"><!-- content --><input class="wrapped-input" type="float" spellcheck="false" id="codigo" name="codigo" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu155_prompt" for="widgetu155_input"><span class="actAsPara">Inserir código do produto</span></label></span>
      <div class="fld-message clearfix grpelem" id="u157-4"><!-- content -->
       <p>Obrigatório</p>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu123" data-required="true"><!-- none box -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u125-4" for="widgetu123_input"><!-- content --><span class="actAsPara">Tipo:</span></label>
      <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u126-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="tipo" name="tipo" tabindex="3"/><label class="wrapped-input fld-prompt" id="widgetu123_prompt" for="widgetu123_input"><span class="actAsPara">Inserir tipo</span></label></span>
      <div class="fld-message clearfix grpelem" id="u124-4"><!-- content -->
       <p>Obrigatório</p>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu141" data-required="true"><!-- none box -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u143-4" for="widgetu141_input"><!-- content --><span class="actAsPara">Quantidade:</span></label>
      <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u142-4"><!-- content --><input class="wrapped-input" type="number" spellcheck="false" id="qtda" name="qtda" tabindex="4"/><label class="wrapped-input fld-prompt" id="widgetu141_prompt" for="widgetu141_input"><span class="actAsPara">Inserir quantidade</span></label></span>
      <div class="fld-message clearfix grpelem" id="u144-4"><!-- content -->
       <p>Obrigatório</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="u127-4"><!-- content -->
      <p>Enviando formulário…</p>
     </div>
     <div class="clearfix grpelem" id="u136-4"><!-- content -->
      <p>O servidor encontrou um erro.</p>
     </div>
     <div class="clearfix grpelem" id="u154-4"><!-- content -->
      <p>Cadastro recebido.</p>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu150" data-required="true"><!-- none box -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u153-4" for="widgetu150_input"><!-- content --><span class="actAsPara">Descrição;</span></label>
      <span class="fld-textarea actAsDiv rounded-corners clearfix grpelem" id="u152-4"><!-- content --><textarea class="wrapped-input" id="descricao" name="descricao" tabindex="5"></textarea><label class="wrapped-input fld-prompt" id="widgetu150_prompt" for="widgetu150_input"><span class="actAsPara">Insira sua descrição</span></label></span>
      <div class="fld-message clearfix grpelem" id="u151-4"><!-- content -->
       <p>Obrigatório</p>
      </div>
     </div>
     <input class="submit-btn NoWrap grpelem" id="u145-17" type="submit" value="" tabindex="6"/><!-- state-based BG images -->
    </form>
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
