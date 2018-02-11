<!DOCTYPE html>
<html>
<head>

  <title>STORYGRAPH V0.1</title>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">

  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/storygraph.css">
    
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/cytoscape.min.js"></script>
  <script type="text/javascript" src="js/dagre.min.js"></script>
  <script type="text/javascript" src="js/cytoscape-dagre.js"></script>

  
</head>

<body oncontextmenu="return false;">


<!--  Menu Cytoscape -->
<div class="menuTop_ST">

    <div class="menuTop_left_ST">
      <select id="layoutCh" class="layoutCh">
        <option value="dagre" selected>Dagre</option>
        <option value="breadthfirst">Breadthfirst</option>
        <option value="grid">Grid</option>
        <option value="cose">Cose</option>
        <option value="circle">Circle</option>
        <option value="concentric">Concentric</option>
        <option value="random">Random</option>
      </select>
      <button id="fit" class="bt_ST">Show All</button>
      <button id="redraw" class="bt_ST">Re Draw</button>

      <button class="disabled bt_ST" id="deleteNodes">Delete selected</button>
    </div>


    <div class="menuTop_Right_ST">
      <span id="nbNodes">Nothing to see</span>
      <button id="load" class="bt_ST">Charger</button>
      <button id="save" class="bt_ST">Save</button>
      <!-- <button id="emptyLS" class="bt_ST">Cancel</button> -->
      <button id="clear" class="bt_ST">Clear Graph</button>
    </div>


</div>


<!--  Menu Panel Left Cytoscape -->

<br class="clearBoth" />




  <div class="menuLeft_ST">

    <div class="nodeModel edge" data-type="edge">Edge</div>
    <div class="nodeModel assetM"  data-type="asset">Asset</div>    
    <div class="nodeModel sequenceM" data-type="sequence">Sequence</div>

    <hr />

      <button id="help_ST" class="help_ST">Help</button>

    <div id="menuLeft_ST_memo" class="menuLeft_ST_memo">


      <p>Drag and Drop element on screen</p>


      <ul>
        <b>Zoom</b> : <li>Molette souris</li>
        <b>Pano</b> : <li>Click+drag sur le fond</li>
        <b>Sélection</b> : 
          <li>Box-select -> SHIFT + click + drag</li>
          <li>Multiple -> SHIFT + click sur les nodes</li>
        <b>Menu contextuel</b> :
          <li>Clic-droit sur node -> actions du node</li>
          <li>Clic-droit sur fond -> actions génériques</li>
        <b>Connexions Manuelles</b> :
          <li>Sélectionner des nodes (avec SHIFT+clic ou le box-select), puis
          CRTL+click sur un node pour les connecter à ce dernier.</li>
          <li><b>Directions autorisées :</b></li>
          <li>&nbsp;&nbsp;&nbsp; -> Asset vers Asset(s)</li>
          <li>&nbsp;&nbsp;&nbsp; -> Asset vers Sequence(s)</li>
          <li>&nbsp;&nbsp;&nbsp; -> Sequence vers Sequence(s)</li>
        <b>Mémoire :</b>
          <li>
            Bouton "Charger" : charge un graphe depuis la mémoire
            du navigateur si présente, sinon charge depuis un fichier json sur le serveur.
          </li>
          <li>Bouton "Mémoriser" : mémorise le graphe courant dans la mémoire du navigateur.</li>
          <li>Bouton "Oublier" : Vide la mémoire du navigateur</li>
      </ul>
    </div>
  </div>




  <div id="container"></div>

  <div id="contextMenu">
    <div class="ctxNodeTitle overNode"></div>
    <div class="ctxMenuEntry nodeAction" id="renameNode">Rename</div>
    <div class="ctxMenuEntry nodeAction disabled">Isoler</div>
    <div class="ctxMenuEntry nodeAction disabled">Select child(s)</div>
    <div class="ctxMenuEntry nodeAction" id="deleteNode">Delete</div>
    <div class="ctxMenuEntry nodeAction disabled">Disconnect</div>
    <hr class="overNode" />
    <div class="ctxMenuEntry" id="fitM">Show all</div>
    <hr />
    <div class="ctxMenuEntry addNode" data-type="asset">Add asset</div>
    <div class="ctxMenuEntry addNode" data-type="sequence">Add sequence</div>
<!--    <div class="ctxMenuEntry addNode" data-type="shot">Ajouter un shot</div> -->
    <hr />
    <div class="ctxMenuEntry" id="clearM">Clear graph</div>
  </div>

  <script src="js/storygraph.js"></script>


<script>


$(document).ready(function(){

  $('#help_ST').on("click", function(){
    $('#menuLeft_ST_memo').toggle();
  });

});


</script>


</body>

</html>

