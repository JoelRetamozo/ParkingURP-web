<?php  
require_once 'header.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Vehiculo
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="controlarIngreso.php"><i class="fa fa-dashboard"></i> Controlar Ingreso</a></li>
        <li class="active">Administrar Vehiculo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">

        <div class="col-md-12">

 <div class="conteiner">
   <button id="entrarmoto" onclick="entramoto()" name="entrar" class="boton"><img src="https://cdn0.iconfinder.com/data/icons/different-types-of-two-wheels-transport-in-glyph-s/128/mini-enduro-512.png" width="30" height="30"/></button>
   <button id="entrarbicicleta"onclick="entrabici()" name ="entrar" class="boton"><img src="https://image.flaticon.com/icons/svg/35/35085.svg" width="30" height="30"/></button>
   <button id="entrarcarro" onclick="ingresar()" name="entrar" class="boton"><img src="https://image.flaticon.com/icons/png/512/27/27442.png" width="30" height="30"/></button>
   <button id="salir" onclick="salir()" name="salir" value ="SALIR" class="boton">Salir</button>

   <input type="hidden" id="recogertipoVehiculo" value="<?php if(isset($_GET["tv"])){echo $_GET['tv'];}else{echo "";}?>">
    
 <font color="black"> 
<h2>Ingresó en:</h2>
<p id="lugarocupado">**</p>

  <h2>Hay:</h2>
<p id="numerototaldecarros"></p>
</font>
</div>

<style type="text/css">
  .boton{
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: helvetica;
    font-weight: 300;
    font-size: 20px;
    font-style: normal;
    color: black;
    background-color: white;
    border-radius: 10px;
    border:3px double black;
  }
</style>


</script>
  <?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!-- Created with Inkscape (http://www.inkscape.org/) -->


<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="200mm"
   height="75mm"
   viewBox="0 0 780.66888 320.44846"
   version="1.1"
   id="svg8"
   inkscape:version="0.92.3 (2405546, 2018-03-11)"
   sodipodi:docname="TPv1.svg">
  <defs
     id="defs2">
    <inkscape:perspective
       sodipodi:type="inkscape:persp3d"
       inkscape:vp_x="0 : 148.5 : 1"
       inkscape:vp_y="0 : 999.99996 : 0"
       inkscape:vp_z="210.00001 : 148.5 : 1"
       inkscape:persp3d-origin="105 : 98.999996 : 1"
       id="perspective3713" />
  </defs>
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.49497475"
     inkscape:cx="1335.4773"
     inkscape:cy="190.43005"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
     showgrid="false"
     inkscape:snap-bbox="true"
     inkscape:measure-start="160,982.857"
     inkscape:measure-end="288.571,888.571"
     inkscape:object-paths="false"
     inkscape:snap-to-guides="false"
     inkscape:snap-midpoints="true"
     fit-margin-top="0"
     fit-margin-left="0"
     fit-margin-right="0"
     fit-margin-bottom="0"
     inkscape:window-width="2560"
     inkscape:window-height="1361"
     inkscape:window-x="-9"
     inkscape:window-y="-9"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title />
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Capa 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(154.83428,29.403837)">
    <rect
       style="fill:#e6e6e6;stroke-width:0.20510899"
       id="aA"
       width="106.37329"
       height="44.63401"
       x="121.70232"
       y="-96.503784"
       ry="6.943429"
       transform="matrix(0.00104071,0.99999946,0.99999946,-0.00104071,0,0)"
       inkscape:label="A">
      <title
         id="title5534">Area A</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK3"
       width="10.583874"
       height="18.976137"
       x="-182.02507"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K3">
      <title
         id="title5031">Seccion K3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK8"
       width="10.583874"
       height="18.976137"
       x="-234.94444"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K8">
      <title
         id="title5043">Seccion K8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK7"
       width="10.583874"
       height="18.976137"
       x="-224.36055"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K7">
      <title
         id="title5041">Seccion K7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK4"
       width="10.583874"
       height="18.976137"
       x="-192.60893"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K4">
      <title
         id="title5035">Seccion K4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sM1"
       width="10.583904"
       height="18.976133"
       x="106.76691"
       y="-275.08832"
       ry="2.6243582"
       transform="rotate(179.94037)"
       inkscape:label="M1">
      <title
         id="title5171">Seccion M1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK2"
       width="10.583874"
       height="18.976137"
       x="-171.44115"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K2">
      <title
         id="title5029">Seccion K2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK1"
       width="10.583874"
       height="18.976137"
       x="-160.85725"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K1">
      <title
         id="title5027">Seccion K1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK10"
       width="10.583874"
       height="18.976137"
       x="-256.11218"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K10">
      <title
         id="title5047">Seccion K10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK9"
       width="10.583874"
       height="18.976137"
       x="-245.52831"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K9">
      <title
         id="title5045">Seccion K9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK6"
       width="10.583874"
       height="18.976137"
       x="-213.77669"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K6">
      <title
         id="title5039">Seccion K6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sK5"
       width="10.583874"
       height="18.976137"
       x="-203.19279"
       y="-136.32697"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="K5">
      <title
         id="title5037">Seccion K5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM10"
       width="10.583875"
       height="18.976137"
       x="11.511994"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M10">
      <title
         id="title5187">Seccion M10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM8"
       width="10.583875"
       height="18.976137"
       x="32.679737"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M8">
      <title
         id="title5183">Seccion M8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM7"
       width="10.583875"
       height="18.976137"
       x="43.263626"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M7">
      <title
         id="title5181">Seccion M7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM9"
       width="10.583875"
       height="18.976137"
       x="22.095869"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M9">
      <title
         id="title5185">Seccion M9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM2"
       width="10.583875"
       height="18.976137"
       x="96.183022"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M2">
      <title
         id="title5169">Seccion M2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM11"
       width="10.583875"
       height="18.976137"
       x="0.92811477"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M11">
      <title
         id="title5189">Seccion M11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM5" 
       width="10.583875"
       height="18.976137"
       x="64.431381"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M5">
      <title
         id="title5177">Seccion M5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM6"
       width="10.583875"
       height="18.976137"
       x="53.847507"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M6">
      <title
         id="title5179">Seccion M6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM3"
       width="10.583875"
       height="18.976137"
       x="85.599136"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M3">
      <title
         id="title5173">Seccion M3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM4"
       width="10.583875"
       height="18.976137"
       x="75.015251"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M4">
      <title
         id="title5175">Seccion M4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sM13"
       width="10.583904"
       height="18.976133"
       x="-20.239672"
       y="-275.08832"
       ry="2.6243582"
       transform="rotate(179.94037)"
       inkscape:label="M13">
      <title
         id="title5193">Seccion M13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM12"
       width="10.583875"
       height="18.976137"
       x="-9.6557627"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M12">
      <title
         id="title5191">Seccion M12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sM14"
       width="10.583904"
       height="18.976133"
       x="-51.991356"
       y="-275.08832"
       ry="2.6243582"
       transform="rotate(179.94037)"
       inkscape:label="M14">
      <title
         id="title5195">Seccion M14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM23"
       width="10.583875"
       height="18.976137"
       x="-147.24628"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M23">
      <title
         id="title5213">Seccion M23</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM21"
       width="10.583875"
       height="18.976137"
       x="-126.07853"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M21">
      <title
         id="title5209">Seccion M21</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM20"
       width="10.583875"
       height="18.976137"
       x="-115.49463"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M20">
      <title
         id="title5207">Seccion M20</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM22"
       width="10.583875"
       height="18.976137"
       x="-136.66238"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M22">
      <title
         id="title5211">Seccion M22</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM15"
       width="10.583875"
       height="18.976137"
       x="-62.575233"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M15">
      <title
         id="title5197">Seccion M15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM24"
       width="10.583875"
       height="18.976137"
       x="-157.83014"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M24">
      <title
         id="title5215">Seccion M24</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM18"
       width="10.583875"
       height="18.976137"
       x="-94.326866"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M18">
      <title
         id="title5203">Seccion M18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM19"
       width="10.583875"
       height="18.976137"
       x="-104.91075"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M19">
      <title
         id="title5205">Seccion M19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM16"
       width="10.583875"
       height="18.976137"
       x="-73.159111"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M16">
      <title
         id="title5199">Seccion M16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM17"
       width="10.583875"
       height="18.976137"
       x="-83.742996"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M17">
      <title
         id="title5201">Seccion M17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sM26"
       width="10.583904"
       height="18.976133"
       x="-178.99792"
       y="-275.08832"
       ry="2.6243582"
       transform="rotate(179.94037)"
       inkscape:label="M26">
      <title
         id="title5219">Seccion M26</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM25"
       width="10.583875"
       height="18.976137"
       x="-168.41403"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M25">
      <title
         id="title5217">Seccion M25</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sM27"
       width="10.583904"
       height="18.976133"
       x="-189.58182"
       y="-275.08832"
       ry="2.6243582"
       transform="rotate(179.94037)"
       inkscape:label="M27">
      <title
         id="title5221">Seccion M27</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM36"
       width="10.583875"
       height="18.976137"
       x="-284.83676"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M36">
      <title
         id="title5239">Seccion M36</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM34"
       width="10.583875"
       height="18.976137"
       x="-263.66901"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M34">
      <title
         id="title5235">Seccion M34</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM33"
       width="10.583875"
       height="18.976137"
       x="-253.08511"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M33">
      <title
         id="title5233">Seccion M33</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM35"
       width="10.583875"
       height="18.976137"
       x="-274.25287"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M35">
      <title
         id="title5237">Seccion M35</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM28"
       width="10.583875"
       height="18.976137"
       x="-200.16571"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M28">
      <title
         id="title5223">Seccion M28</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM37"
       width="10.583875"
       height="18.976137"
       x="-295.42062"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M37">
      <title
         id="title5241">Seccion M37</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM31"
       width="10.583875"
       height="18.976137"
       x="-231.91736"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M31">
      <title
         id="title5229">Seccion M31</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM32"
       width="10.583875"
       height="18.976137"
       x="-242.50122"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M32">
      <title
         id="title5231">Seccion M32</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM29"
       width="10.583875"
       height="18.976137"
       x="-210.7496"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M29">
      <title
         id="title5225">Seccion M29</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM30"
       width="10.583875"
       height="18.976137"
       x="-221.33347"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M30">
      <title
         id="title5227">Seccion M30</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sM39"
       width="10.583904"
       height="18.976133"
       x="-316.58841"
       y="-275.08832"
       ry="2.6243582"
       transform="rotate(179.94037)"
       inkscape:label="M39">
      <title
         id="title5245">Seccion M39</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM38"
       width="10.583875"
       height="18.976137"
       x="-306.00449"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M38">
      <title
         id="title5243">Seccion M38</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM46"
       width="10.583875"
       height="18.976137"
       x="-443.595"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M46">
      <title
         id="title5259">Seccion M46</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM44"
       width="10.583875"
       height="18.976137"
       x="-422.42715"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M44">
      <title
         id="title5255">Seccion M44</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM43"
       width="10.583875"
       height="18.976137"
       x="-411.84329"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M43">
      <title
         id="title5253">Seccion M43</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM45"
       width="10.583875"
       height="18.976137"
       x="-433.01102"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M45">
      <title
         id="title5257">Seccion M45</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM47"
       width="10.583875"
       height="18.976137"
       x="-454.17886"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M47">
      <title
         id="title5261">Seccion M47</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM41"
       width="10.583875"
       height="18.976137"
       x="-390.67557"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M41">
      <title
         id="title5249">Seccion M41</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM42"
       width="10.583875"
       height="18.976137"
       x="-401.25943"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M42">
      <title
         id="title5251">Seccion M42</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM40"
       width="10.583875"
       height="18.976137"
       x="-380.09164"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M40">
      <title
         id="title5247">Seccion M40</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sM49"
       width="10.583904"
       height="18.976133"
       x="-475.34659"
       y="-275.08832"
       ry="2.6243582"
       transform="rotate(179.94037)"
       inkscape:label="M49">
      <title
         id="title5265">Seccion M49</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sM48"
       width="10.583875"
       height="18.976137"
       x="-464.76273"
       y="-275.08832"
       ry="2.6243587"
       transform="rotate(179.94037)"
       inkscape:label="M48">
      <title
         id="title5263">Seccion M48</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sJ6"
       width="10.583875"
       height="18.976137"
       x="-193.74924"
       y="523.55322"
       ry="2.6243587"
       transform="rotate(-89.639595)"
       inkscape:transform-center-x="24.878462"
       inkscape:transform-center-y="-4.8910333"
       inkscape:label="J6">
      <title
         id="title5021">Seccion J6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sJ4"
       width="10.583875"
       height="18.976137"
       x="-172.58141"
       y="523.55322"
       ry="2.6243587"
       transform="rotate(-89.639595)"
       inkscape:transform-center-x="24.745312"
       inkscape:transform-center-y="-26.058456"
       inkscape:label="J4">
      <title
         id="title5017">Seccion J4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sJ3"
       width="10.583875"
       height="18.976137"
       x="-161.99754"
       y="523.55322"
       ry="2.6243587"
       transform="rotate(-89.639595)"
       inkscape:transform-center-x="24.678736"
       inkscape:transform-center-y="-36.642111"
       inkscape:label="J3">
      <title
         id="title5015">Seccion J3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sJ5"
       width="10.583875"
       height="18.976137"
       x="-183.16525"
       y="523.55322"
       ry="2.6243587"
       transform="rotate(-89.639595)"
       inkscape:transform-center-x="24.811885"
       inkscape:transform-center-y="-15.474808"
       inkscape:label="J5">
      <title
         id="title5019">Seccion J5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sJ7"
       width="10.583875"
       height="18.976137"
       x="-204.33313"
       y="523.55322"
       ry="2.6243587"
       transform="rotate(-89.639595)"
       inkscape:transform-center-x="24.945035"
       inkscape:transform-center-y="5.6926427"
       inkscape:label="J7">
      <title
         id="title5025">Seccion J7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sJ8"
       width="10.583875"
       height="18.976137"
       x="-214.91699"
       y="523.55322"
       ry="2.6243587"
       transform="rotate(-89.639595)"
       inkscape:transform-center-x="25.011611"
       inkscape:transform-center-y="16.276293"
       inkscape:label="J8">
      <title
         id="title5023">Seccion J8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sJ2"
       width="10.583875"
       height="18.976137"
       x="-151.41368"
       y="523.55322"
       ry="2.6243587"
       transform="rotate(-89.639595)"
       inkscape:transform-center-x="24.745312"
       inkscape:transform-center-y="-26.058442"
       inkscape:label="J2">
      <title
         id="title5013">Seccion J2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sJ1"
       width="10.583875"
       height="18.976137"
       x="-140.82982"
       y="523.55322"
       ry="2.6243587"
       transform="rotate(-89.639595)"
       inkscape:transform-center-x="24.678736"
       inkscape:transform-center-y="-36.642097"
       inkscape:label="J1">
      <title
         id="title5011">Seccion J1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA2"
       width="10.583875"
       height="18.976137"
       x="-157.94411"
       y="-96.37014"
       ry="2.6243587"
       inkscape:label="A2"
       transform="rotate(-90.059628)">
      <title
         id="title5538">Seccion A2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA7"
       width="10.583875"
       height="18.976137"
       x="-210.86348"
       y="-96.37014"
       ry="2.6243587"
       inkscape:label="A7"
       transform="rotate(-90.059628)">
      <title
         id="title5548">Seccion A7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA6"
       width="10.583875"
       height="18.976137"
       x="-200.27959"
       y="-96.37014"
       ry="2.6243587"
       inkscape:label="A6"
       transform="rotate(-90.059628)">
      <title
         id="title5546">Seccion A6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA3"
       width="10.583875"
       height="18.976137"
       x="-168.52797"
       y="-96.37014"
       ry="2.6243587"
       inkscape:label="A3"
       transform="rotate(-90.059628)">
      <title
         id="title5540">Seccion A3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA1"
       width="10.583875"
       height="18.976137"
       x="-147.36018"
       y="-96.37014"
       ry="2.6243587"
       inkscape:label="A1"
       transform="rotate(-90.059628)">
      <title
         id="title5536">Seccion A1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA8"
       width="10.583875"
       height="18.976137"
       x="-221.44734"
       y="-96.37014"
       ry="2.6243587"
       inkscape:label="A8"
       transform="rotate(-90.059628)">
      <title
         id="title5550">Seccion A8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA5"
       width="10.583875"
       height="18.976137"
       x="-189.69572"
       y="-96.37014"
       ry="2.6243587"
       inkscape:label="A5"
       transform="rotate(-90.059628)">
      <title
         id="title5544">Seccion A5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA4"
       width="10.583875"
       height="18.976137"
       x="-179.11186"
       y="-96.37014"
       ry="2.6243587"
       inkscape:label="A4"
       transform="rotate(-90.059628)">
      <title
         id="title5542">Seccion A4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA15"
       width="10.583875"
       height="18.976137"
       x="-158.21138"
       y="-71.514084"
       ry="2.6243587"
       inkscape:label="A15"
       transform="rotate(-90.059628)">
      <title
         id="title5582">Seccion A15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA10"
       width="10.583875"
       height="18.976137"
       x="-211.13075"
       y="-71.514084"
       ry="2.6243587"
       inkscape:label="A10"
       transform="rotate(-90.059628)">
      <title
         id="title5554">Seccion A10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA11"
       width="10.583875"
       height="18.976137"
       x="-200.54686"
       y="-71.514084"
       ry="2.6243587"
       inkscape:label="A11"
       transform="rotate(-90.059628)">
      <title
         id="title5556">Seccion A11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA14"
       width="10.583875"
       height="18.976137"
       x="-168.79524"
       y="-71.514084"
       ry="2.6243587"
       inkscape:label="A14"
       transform="rotate(-90.059628)">
      <title
         id="title5580">Seccion A14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA16"
       width="10.583875"
       height="18.976137"
       x="-147.62746"
       y="-71.514084"
       ry="2.6243587"
       inkscape:label="A16"
       transform="rotate(-90.059628)">
      <title
         id="title5584">Seccion A16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA17"
       width="10.583875"
       height="18.976137"
       x="-137.04356"
       y="-71.514084"
       ry="2.6243587"
       inkscape:label="A17"
       transform="rotate(-90.059628)">
      <title
         id="title5586">Seccion A17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA9"
       width="10.583875"
       height="18.976137"
       x="-221.71461"
       y="-71.514084"
       ry="2.6243587"
       inkscape:label="A9"
       transform="rotate(-90.059628)">
      <title
         id="title5552">Seccion A9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA12"
       width="10.583875"
       height="18.976137"
       x="-189.963"
       y="-71.514084"
       ry="2.6243587"
       inkscape:label="A12"
       transform="rotate(-90.059628)">
      <title
         id="title5558">Seccion A12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sA13"
       width="10.583875"
       height="18.976137"
       x="-179.3791"
       y="-71.514084"
       ry="2.6243587"
       inkscape:label="A13"
       transform="rotate(-90.059628)">
      <title
         id="title5578">Seccion A13</title>
    </rect>
    <rect
       style="fill:#e6e6e6;stroke-width:0.22312775"
       id="aB"
       width="125.88398"
       height="44.634014"
       x="102.45891"
       y="-24.741922"
       ry="6.943429"
       transform="matrix(0.00104071,0.99999946,0.99999946,-0.00104071,0,0)"
       inkscape:label="B">
      <title
         id="title4543">Area B</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB4"
       width="10.583875"
       height="18.976137"
       x="-158.21141"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B4">
      <title
         id="title4565">Seccion B4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB9"
       width="10.583875"
       height="18.976137"
       x="-211.13075"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B9">
      <title
         id="title4573">Seccion B9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB8"
       width="10.583875"
       height="18.976137"
       x="-200.54689"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B8">
      <title
         id="title4571">Seccion B8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB5"
       width="10.583875"
       height="18.976137"
       x="-168.79524"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B5">
      <title
         id="title4577">Seccion B5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB3"
       width="10.583875"
       height="18.976137"
       x="-147.62746"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B3">
      <title
         id="title4563">Seccion B3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB10"
       width="10.583875"
       height="18.976137"
       x="-221.71461"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B10">
      <title
         id="title4575">Seccion B10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB7"
       width="10.583875"
       height="18.976137"
       x="-189.963"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B7">
      <title
         id="title4569">Seccion B7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB6"
       width="10.583875"
       height="18.976137"
       x="-179.37914"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B6">
      <title
         id="title4567">Seccion B6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB17"
       width="10.583875"
       height="18.976137"
       x="-158.47865"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B17">
      <title
         id="title4591">Seccion B17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB12"
       width="10.583875"
       height="18.976137"
       x="-211.39803"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B12">
      <title
         id="title4581">Seccion B12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB13"
       width="10.583875"
       height="18.976137"
       x="-200.81416"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B13">
      <title
         id="title4583">Seccion B13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB16"
       width="10.583875"
       height="18.976137"
       x="-169.06255"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B16">
      <title
         id="title4589">Seccion B16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB18"
       width="10.583875"
       height="18.976137"
       x="-147.89473"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B18">
      <title
         id="title4593">Seccion B18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB19"
       width="10.583875"
       height="18.976137"
       x="-137.31081"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B19">
      <title
         id="title4595">Seccion B19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB11"
       width="10.583875"
       height="18.976137"
       x="-221.98189"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B11">
      <title
         id="title4579">Seccion B11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB14"
       width="10.583875"
       height="18.976137"
       x="-190.23027"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B14">
      <title
         id="title4585">Seccion B14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB15"
       width="10.583875"
       height="18.976137"
       x="-179.64638"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B15">
      <title
         id="title4587">Seccion B15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB2"
       width="10.583875"
       height="18.976137"
       x="-137.04359"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B2">
      <title
         id="title4561">Seccion B2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sB1"
       width="10.583875"
       height="18.976137"
       x="-126.45973"
       y="-24.608286"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B1">
      <title
         id="title4559">Seccion B1</title>
    </rect>
    <rect
       style="fill:#0000ff;stroke-width:0.26845393"
       id="sBd"
       width="19.67104"
       height="18.976137"
       x="-126.72694"
       y="0.24777825"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="B Discapacitados">
      <title
         id="title4541">Seccion B Discapacitados</title>
    </rect>
    <rect
       style="fill:#e6e6e6;stroke-width:0.23444706"
       id="aC"
       width="138.98019"
       height="44.634018"
       x="88.961777"
       y="44.213612"
       ry="6.943429"
       transform="matrix(0.00104071,0.99999946,0.99999946,-0.00104071,0,0)"
       inkscape:label="C">
      <title
         id="title4545">Area C</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC4"
       width="10.583875"
       height="18.976137"
       x="-157.8105"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C4">
      <title
         id="title4603">Seccion C4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC9"
       width="10.583875"
       height="18.976137"
       x="-210.72984"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C9">
      <title
         id="title4613">Seccion C9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC8"
       width="10.583875"
       height="18.976137"
       x="-200.14595"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C8">
      <title
         id="title4611">Seccion C8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC5"
       width="10.583875"
       height="18.976137"
       x="-168.39433"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C5">
      <title
         id="title4605">Seccion C5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC3"
       width="10.583875"
       height="18.976137"
       x="-147.22655"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C3">
      <title
         id="title4641">Seccion C3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC10"
       width="10.583875"
       height="18.976137"
       x="-221.31371"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C10">
      <title
         id="title4615">Seccion C10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC7"
       width="10.583875"
       height="18.976137"
       x="-189.56209"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C7">
      <title
         id="title4609">Seccion C7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC6"
       width="10.583875"
       height="18.976137"
       x="-178.97823"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C6">
      <title
         id="title4607">Seccion C6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC17"
       width="10.583875"
       height="18.976137"
       x="-158.07774"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C17">
      <title
         id="title4629">Seccion C17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC12"
       width="10.583875"
       height="18.976137"
       x="-210.99712"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C12">
      <title
         id="title4619">Seccion C12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC13"
       width="10.583875"
       height="18.976137"
       x="-200.41322"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C13">
      <title
         id="title4621">Seccion C13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC16"
       width="10.583875"
       height="18.976137"
       x="-168.66161"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C16">
      <title
         id="title4627">Seccion C16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC18"
       width="10.583875"
       height="18.976137"
       x="-147.49382"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C18">
      <title
         id="title4631">Seccion C18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC19"
       width="10.583875"
       height="18.976137"
       x="-136.9099"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C19">
      <title
         id="title4633">Seccion C19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC11"
       width="10.583875"
       height="18.976137"
       x="-221.58098"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C11">
      <title
         id="title4617">Seccion C11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC14"
       width="10.583875"
       height="18.976137"
       x="-189.82936"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C14">
      <title
         id="title4623">Seccion C14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC15"
       width="10.583875"
       height="18.976137"
       x="-179.24547"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C15">
      <title
         id="title4625">Seccion C15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC2"
       width="10.583875"
       height="18.976137"
       x="-136.64268"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C2">
      <title
         id="title4601">Seccion C2</title>
    </rect>
    <rect
       style="fill:#0000ff;stroke-width:0.26845393"
       id="sCd"
       width="19.67104"
       height="18.976137"
       x="-115.47493"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C Discapacitados">
      <title
         id="title4597">Seccion C Discapacitados</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC1"
       width="10.583875"
       height="18.976137"
       x="-126.05879"
       y="44.347248"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C1">
      <title
         id="title4599">Seccion C1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC20"
       width="10.583875"
       height="18.976137"
       x="-126.326"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C20">
      <title
         id="title4635">Seccion C20</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC21"
       width="10.583875"
       height="18.976137"
       x="-115.74214"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C21">
      <title
         id="title4637">Seccion C21</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sC22"
       width="10.583875"
       height="18.976137"
       x="-105.15825"
       y="69.203316"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="C22">
      <title
         id="title4639">Seccion C22</title>
    </rect>
    <rect
       style="fill:#e6e6e6;stroke-width:0.24351434"
       id="aD"
       width="149.93825"
       height="44.634018"
       x="78.137375"
       y="115.30732"
       ry="6.943429"
       transform="matrix(0.00104071,0.99999946,0.99999946,-0.00104071,0,0)"
       inkscape:label="D">
      <title
         id="title4547">Area D</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD7"
       width="10.583875"
       height="18.976137"
       x="-157.94414"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D7">
      <title
         id="title4655">Seccion D7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD12"
       width="10.583875"
       height="18.976137"
       x="-210.86348"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D12">
      <title
         id="title4663">Seccion D12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD11"
       width="10.583875"
       height="18.976137"
       x="-200.27959"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D11">
      <title
         id="title4661">Seccion D11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD8"
       width="10.583875"
       height="18.976137"
       x="-168.52797"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D8">
      <title
         id="title4657">Seccion D8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD6"
       width="10.583875"
       height="18.976137"
       x="-147.36021"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D6">
      <title
         id="title4653">Seccion D6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD13"
       width="10.583875"
       height="18.976137"
       x="-221.44737"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D13">
      <title
         id="title4665">Seccion D13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD10"
       width="10.583875"
       height="18.976137"
       x="-189.69572"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D10">
      <title
         id="title4659">Seccion D10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD9"
       width="10.583875"
       height="18.976137"
       x="-179.11186"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D9">
      <title
         id="title4693">Seccion D9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD20"
       width="10.583875"
       height="18.976137"
       x="-158.21138"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D20">
      <title
         id="title4679">Seccion D20</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD15"
       width="10.583875"
       height="18.976137"
       x="-211.13075"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D15">
      <title
         id="title4669">Seccion D15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD16"
       width="10.583875"
       height="18.976137"
       x="-200.54689"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D16">
      <title
         id="title4671">Seccion D16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD19"
       width="10.583875"
       height="18.976137"
       x="-168.79527"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D19">
      <title
         id="title4677">Seccion D19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD21"
       width="10.583875"
       height="18.976137"
       x="-147.62746"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D21">
      <title
         id="title4681">Seccion D21</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD22"
       width="10.583875"
       height="18.976137"
       x="-137.04353"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D22">
      <title
         id="title4683">Seccion D22</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD14"
       width="10.583875"
       height="18.976137"
       x="-221.71465"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D14">
      <title
         id="title4667">Seccion D14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD17"
       width="10.583875"
       height="18.976137"
       x="-189.963"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D17">
      <title
         id="title4673">Seccion D17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD18"
       width="10.583875"
       height="18.976137"
       x="-179.3791"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D18">
      <title
         id="title4675">Seccion D18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD5"
       width="10.583875"
       height="18.976137"
       x="-136.77632"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D5">
      <title
         id="title4651">Seccion D5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD4"
       width="10.583875"
       height="18.976137"
       x="-126.19246"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D4">
      <title
         id="title4649">Seccion D4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD23"
       width="10.583875"
       height="18.976137"
       x="-126.45967"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D23">
      <title
         id="title4685">Seccion D23</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD24"
       width="10.583875"
       height="18.976137"
       x="-115.87578"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D24">
      <title
         id="title4687">Seccion D24</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD25"
       width="10.583875"
       height="18.976137"
       x="-105.29192"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D25">
      <title
         id="title4689">Seccion D25</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD3"
       width="10.583875"
       height="18.976137"
       x="-115.60857"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D3">
      <title
         id="title4647">Seccion D3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD2"
       width="10.583875"
       height="18.976137"
       x="-105.0247"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D2">
      <title
         id="title4645">Seccion D2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD1"
       width="10.583875"
       height="18.976137"
       x="-94.440811"
       y="115.44096"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D1">
      <title
         id="title4643">Seccion D1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sD26"
       width="10.583875"
       height="18.976137"
       x="-94.708023"
       y="140.29701"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="D26">
      <title
         id="title4691">Seccion D26</title>
    </rect>
    <rect
       style="fill:#e6e6e6;stroke-width:0.25846496"
       id="aE"
       width="168.91438"
       height="44.634018"
       x="58.754978"
       y="188.00465"
       ry="6.943429"
       transform="matrix(0.00104071,0.99999946,0.99999946,-0.00104071,0,0)"
       inkscape:label="E">
      <title
         id="title4549">Area E</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE8"
       width="10.583875"
       height="18.976137"
       x="-157.53786"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E8">
      <title
         id="title4709">Seccion E8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE13"
       width="10.583875"
       height="18.976137"
       x="-210.45723"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E13">
      <title
         id="title4717">Seccion E13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE12"
       width="10.583875"
       height="18.976137"
       x="-199.87334"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E12">
      <title
         id="title4715">Seccion E12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE9"
       width="10.583875"
       height="18.976137"
       x="-168.12172"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E9">
      <title
         id="title4721">Seccion E9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE7"
       width="10.583875"
       height="18.976137"
       x="-146.95393"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E7">
      <title
         id="title4707">Seccion E7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE14"
       width="10.583875"
       height="18.976137"
       x="-221.04109"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E14">
      <title
         id="title4719">Seccion E14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE11"
       width="10.583875"
       height="18.976137"
       x="-189.28947"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E11">
      <title
         id="title4713">Seccion E11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE10"
       width="10.583875"
       height="18.976137"
       x="-178.70558"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E10">
      <title
         id="title4711">Seccion E10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE21"
       width="10.583875"
       height="18.976137"
       x="-157.80513"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E21">
      <title
         id="title4735">Seccion E21</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE16"
       width="10.583875"
       height="18.976137"
       x="-210.7245"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E16">
      <title
         id="title4725">Seccion E16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE17"
       width="10.583875"
       height="18.976137"
       x="-200.14061"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E17">
      <title
         id="title4727">Seccion E17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE20"
       width="10.583875"
       height="18.976137"
       x="-168.38899"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E20">
      <title
         id="title4733">Seccion E20</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE22"
       width="10.583875"
       height="18.976137"
       x="-147.22121"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E22">
      <title
         id="title4737">Seccion E22</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE23"
       width="10.583875"
       height="18.976137"
       x="-136.63728"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E23">
      <title
         id="title4739">Seccion E23</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE15"
       width="10.583875"
       height="18.976137"
       x="-221.30836"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E15">
      <title
         id="title4723">Seccion E15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE18"
       width="10.583875"
       height="18.976137"
       x="-189.55672"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E18">
      <title
         id="title4729">Seccion E18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE19"
       width="10.583875"
       height="18.976137"
       x="-178.97285"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E19">
      <title
         id="title4731">Seccion E19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE6"
       width="10.583875"
       height="18.976137"
       x="-136.37007"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E6">
      <title
         id="title4705">Seccion E6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE5"
       width="10.583875"
       height="18.976137"
       x="-125.78618"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E5">
      <title
         id="title4703">Seccion E5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE24"
       width="10.583875"
       height="18.976137"
       x="-126.05339"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E24">
      <title
         id="title4741">Seccion E24</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE25"
       width="10.583875"
       height="18.976137"
       x="-115.46953"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E25">
      <title
         id="title4743">Seccion E25</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE26"
       width="10.583875"
       height="18.976137"
       x="-104.88564"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E26">
      <title
         id="title4745">Seccion E26</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE4"
       width="10.583875"
       height="18.976137"
       x="-115.20232"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E4">
      <title
         id="title4701">Seccion E4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE3"
       width="10.583875"
       height="18.976137"
       x="-104.61842"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E3">
      <title
         id="title4699">Seccion E3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE2"
       width="10.583875"
       height="18.976137"
       x="-94.034561"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E2">
      <title
         id="title4697">Seccion E2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE27"
       width="10.583875"
       height="18.976137"
       x="-94.301773"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E27">
      <title
         id="title4747">Seccion E27</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sE1"
       width="10.583875"
       height="18.976137"
       x="-83.450668"
       y="188.13829"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E1">
      <title
         id="title4695">Seccion E1</title>
    </rect>
    <rect
       style="fill:#0000ff;stroke-width:0.26845393"
       id="sEd"
       width="19.67104"
       height="18.976137"
       x="-83.71788"
       y="212.99434"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="E Discapacitados">
      <title
         id="title4749">Seccion E Discapacitados</title>
    </rect>
    <rect
       style="fill:#e6e6e6;stroke-width:0.26612186"
       id="aF"
       width="179.07062"
       height="44.634018"
       x="48.203205"
       y="258.59595"
       ry="6.943429"
       transform="matrix(0.00104071,0.99999946,0.99999946,-0.00104071,0,0)"
       inkscape:label="F">
      <title
         id="title4551">Area F</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF9"
       width="10.583875"
       height="18.976137"
       x="-157.1423"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F9">
      <title
         id="title4767">Seccion F9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF14"
       width="10.583875"
       height="18.976137"
       x="-210.06169"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F14">
      <title
         id="title4779">Seccion F14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF13"
       width="10.583875"
       height="18.976137"
       x="-199.4778"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F13">
      <title
         id="title4775">Seccion F13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF10"
       width="10.583875"
       height="18.976137"
       x="-167.72618"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F10">
      <title
         id="title4769">Seccion F10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF8"
       width="10.583875"
       height="18.976137"
       x="-146.5584"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F8">
      <title
         id="title4765">Seccion F8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF15"
       width="10.583875"
       height="18.976137"
       x="-220.64555"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F15">
      <title
         id="title4777">Seccion F15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF12"
       width="10.583875"
       height="18.976137"
       x="-188.89394"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F12">
      <title
         id="title4773">Seccion F12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF11"
       width="10.583875"
       height="18.976137"
       x="-178.31004"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F11">
      <title
         id="title4771">Seccion F11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF22"
       width="10.583875"
       height="18.976137"
       x="-157.40959"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F22">
      <title
         id="title4793">Seccion F22</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF17"
       width="10.583875"
       height="18.976137"
       x="-210.32896"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F17">
      <title
         id="title4783">Seccion F17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF18"
       width="10.583875"
       height="18.976137"
       x="-199.74507"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F18">
      <title
         id="title4785">Seccion F18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF21"
       width="10.583875"
       height="18.976137"
       x="-167.99345"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F21">
      <title
         id="title4791">Seccion F21</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF23"
       width="10.583875"
       height="18.976137"
       x="-146.82567"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F23">
      <title
         id="title4795">Seccion F23</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF24"
       width="10.583875"
       height="18.976137"
       x="-136.24174"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F24">
      <title
         id="title4797">Seccion F24</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF16"
       width="10.583875"
       height="18.976137"
       x="-220.91283"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F16">
      <title
         id="title4781">Seccion F16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF19"
       width="10.583875"
       height="18.976137"
       x="-189.16118"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)">
      <title
         id="title4787">Seccion F19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF20"
       width="10.583875"
       height="18.976137"
       x="-178.57732"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F20">
      <title
         id="title4789">Seccion F20</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF7"
       width="10.583875"
       height="18.976137"
       x="-135.97453"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F7">
      <title
         id="title4763">Seccion F7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF6"
       width="10.583875"
       height="18.976137"
       x="-125.39064"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F6">
      <title
         id="title4761">Seccion F6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF25"
       width="10.583875"
       height="18.976137"
       x="-125.65785"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F25">
      <title
         id="title4799">Seccion F25</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF26"
       width="10.583875"
       height="18.976137"
       x="-115.07399"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F26">
      <title
         id="title4801">Seccion F26</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF27"
       width="10.583875"
       height="18.976137"
       x="-104.4901"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F27">
      <title
         id="title4803">Seccion F27</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF5"
       width="10.583875"
       height="18.976137"
       x="-114.80675"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F5">
      <title
         id="title4759">Seccion F5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF4"
       width="10.583875"
       height="18.976137"
       x="-104.22289"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F4">
      <title
         id="title4757">Seccion F4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF3"
       width="10.583875"
       height="18.976137"
       x="-93.639023"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F3">
      <title
         id="title4755">Seccion F3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF28"
       width="10.583875"
       height="18.976137"
       x="-93.906235"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F28">
      <title
         id="title4807">Seccion F28</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF2"
       width="10.583875"
       height="18.976137"
       x="-83.05513"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F2">
      <title
         id="title4753">Seccion F2</title>
    </rect>
    <rect
       style="fill:#0000ff;stroke-width:0.26845393"
       id="sFd"
       width="19.67104"
       height="18.976137"
       x="-72.73848"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F Discapacitados">
      <title
         id="title4809">Seccion F Discapacitados</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF29"
       width="10.583875"
       height="18.976137"
       x="-83.322342"
       y="283.58563"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F29">
      <title
         id="title4805">Seccion F29</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sF1"
       width="10.583875"
       height="18.976137"
       x="-72.471268"
       y="258.72958"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="F1">
      <title
         id="title4751">Seccion F1</title>
    </rect>
    <rect
       style="fill:#e6e6e6;stroke-width:0.26888788"
       id="aG"
       width="182.81241"
       height="44.634018"
       x="44.194141"
       y="323.23761"
       ry="6.943429"
       transform="matrix(0.00104071,0.99999946,0.99999946,-0.00104071,0,0)"
       inkscape:label="G">
      <title
         id="title4553">Area G</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG10"
       width="10.583875"
       height="18.976137"
       x="-156.87508"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G10">
      <title
         id="title4829">Seccion G10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG15"
       width="10.583875"
       height="18.976137"
       x="-209.79442"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G15">
      <title
         id="title4839">Seccion G15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG14"
       width="10.583875"
       height="18.976137"
       x="-199.21053"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G14">
      <title
         id="title4837">Seccion G14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG11"
       width="10.583875"
       height="18.976137"
       x="-167.45889"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G11">
      <title
         id="title4831">Seccion G11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG9"
       width="10.583875"
       height="18.976137"
       x="-146.29112"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G9">
      <title
         id="title4827">Seccion G9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG16"
       width="10.583875"
       height="18.976137"
       x="-220.37828"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G16">
      <title
         id="title4841">Seccion G16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG13"
       width="10.583875"
       height="18.976137"
       x="-188.62666"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G13">
      <title
         id="title4835">Seccion G13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG12"
       width="10.583875"
       height="18.976137"
       x="-178.04277"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G12">
      <title
         id="title4833">Seccion G12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG23"
       width="10.583875"
       height="18.976137"
       x="-157.1423"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G23">
      <title
         id="title4855">Seccion G23</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG18"
       width="10.583875"
       height="18.976137"
       x="-210.06169"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G18">
      <title
         id="title4845">Seccion G18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG19"
       width="10.583875"
       height="18.976137"
       x="-199.4778"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G19">
      <title
         id="title4847">Seccion G19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG22"
       width="10.583875"
       height="18.976137"
       x="-167.72618"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G22">
      <title
         id="title4853">Seccion G22</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG24"
       width="10.583875"
       height="18.976137"
       x="-146.5584"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G24">
      <title
         id="title4857">Seccion G24</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG25"
       width="10.583875"
       height="18.976137"
       x="-135.97447"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G25">
      <title
         id="title4859">Seccion G25</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG17"
       width="10.583875"
       height="18.976137"
       x="-220.64555"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G17">
      <title
         id="title4843">Seccion G17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG20"
       width="10.583875"
       height="18.976137"
       x="-188.89391"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G20">
      <title
         id="title4849">Seccion G20</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG21"
       width="10.583875"
       height="18.976137"
       x="-178.31004"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G21">
      <title
         id="title4851">Seccion G21</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG8"
       width="10.583875"
       height="18.976137"
       x="-135.70726"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G8">
      <title
         id="title4825">Seccion G8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG7"
       width="10.583875"
       height="18.976137"
       x="-125.12337"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G7">
      <title
         id="title4823">Seccion G7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG26"
       width="10.583875"
       height="18.976137"
       x="-125.39058"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G26">
      <title
         id="title4861">Seccion G26</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG27"
       width="10.583875"
       height="18.976137"
       x="-114.80672"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G27">
      <title
         id="title4863">Seccion G27</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG28"
       width="10.583875"
       height="18.976137"
       x="-104.22282"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G28">
      <title
         id="title4865">Seccion G28</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG6"
       width="10.583875"
       height="18.976137"
       x="-114.53947"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G6">
      <title
         id="title4821">Seccion G6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG5"
       width="10.583875"
       height="18.976137"
       x="-103.95561"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G5">
      <title
         id="title4819">Seccion G5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG4"
       width="10.583875"
       height="18.976137"
       x="-93.37175"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G4">
      <title
         id="title4817">Seccion G4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG29"
       width="10.583875"
       height="18.976137"
       x="-93.638962"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G29">
      <title
         id="title4867">Seccion G29</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG3"
       width="10.583875"
       height="18.976137"
       x="-82.787857"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G3">
      <title
         id="title4815">Seccion G3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG30"
       width="10.583875"
       height="18.976137"
       x="-83.055069"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G30">
      <title
         id="title4869">Seccion G30</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG2"
       width="10.583875"
       height="18.976137"
       x="-72.203995"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G2">
      <title
         id="title4813">Seccion G2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG1"
       width="10.583875"
       height="18.976137"
       x="-61.620121"
       y="323.37125"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G1">
      <title
         id="title4811">Seccion G1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG31"
       width="10.583875"
       height="18.976137"
       x="-72.471207"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G31">
      <title
         id="title4871">Seccion G31</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sG32"
       width="10.583875"
       height="18.976137"
       x="-61.887333"
       y="348.22729"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="G32">
      <title
         id="title4873">Seccion G32</title>
    </rect>
    <rect
       style="fill:#e6e6e6;stroke-width:0.27587318"
       id="aH"
       width="192.43411"
       height="44.634018"
       x="33.236088"
       y="389.52582"
       ry="6.943429"
       transform="matrix(0.00104071,0.99999946,0.99999946,-0.00104071,0,0)"
       inkscape:label="H">
      <title
         id="title4555">Area H</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH11"
       width="10.583875"
       height="18.976137"
       x="-155.53871"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H11">
      <title
         id="title4895">Seccion H11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH16"
       width="10.583875"
       height="18.976137"
       x="-208.45805"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H16">
      <title
         id="title4903">Seccion H16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH15"
       width="10.583875"
       height="18.976137"
       x="-197.87419"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H15">
      <title
         id="title4901">Seccion H15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH12"
       width="10.583875"
       height="18.976137"
       x="-166.12254"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H12">
      <title
         id="title4907">Seccion H12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH10"
       width="10.583875"
       height="18.976137"
       x="-144.95479"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H10">
      <title
         id="title4893">Seccion H10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH17"
       width="10.583875"
       height="18.976137"
       x="-219.04195"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H17">
      <title
         id="title4905">Seccion H17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH14"
       width="10.583875"
       height="18.976137"
       x="-187.29033"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H14">
      <title
         id="title4899">Seccion H14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH13"
       width="10.583875"
       height="18.976137"
       x="-176.70644"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H13">
      <title
         id="title4897">Seccion H13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH24"
       width="10.583875"
       height="18.976137"
       x="-155.80595"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H24">
      <title
         id="title4921">Seccion H24</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH19"
       width="10.583875"
       height="18.976137"
       x="-208.72533"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H19">
      <title
         id="title4911">Seccion H19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH20"
       width="10.583875"
       height="18.976137"
       x="-198.14146"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H20">
      <title
         id="title4913">Seccion H20</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH23"
       width="10.583875"
       height="18.976137"
       x="-166.38985"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H23">
      <title
         id="title4919">Seccion H23</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH25"
       width="10.583875"
       height="18.976137"
       x="-145.22206"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H25">
      <title
         id="title4923">Seccion H25</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH26"
       width="10.583875"
       height="18.976137"
       x="-134.63811"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H26">
      <title
         id="title4925">Seccion H26</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH18"
       width="10.583875"
       height="18.976137"
       x="-219.30922"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H18">
      <title
         id="title4909">Seccion H18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH21"
       width="10.583875"
       height="18.976137"
       x="-187.55757"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H21">
      <title
         id="title4915">Seccion H21</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH22"
       width="10.583875"
       height="18.976137"
       x="-176.97369"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H22">
      <title
         id="title4917">Seccion H22</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH9"
       width="10.583875"
       height="18.976137"
       x="-134.3709"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H9">
      <title
         id="title4891">Seccion H9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH8"
       width="10.583875"
       height="18.976137"
       x="-123.78703"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H8">
      <title
         id="title4889">Seccion H8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH27"
       width="10.583875"
       height="18.976137"
       x="-124.05424"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H27">
      <title
         id="title4927">Seccion H27</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH28"
       width="10.583875"
       height="18.976137"
       x="-113.47035"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H28">
      <title
         id="title4937">Seccion H28</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH29"
       width="10.583875"
       height="18.976137"
       x="-102.88649"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H29">
      <title
         id="title4929">Seccion H29</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH7"
       width="10.583875"
       height="18.976137"
       x="-113.20314"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H7">
      <title
         id="title4887">Seccion H7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH6"
       width="10.583875"
       height="18.976137"
       x="-102.61928"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H6">
      <title
         id="title4885">Seccion H6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH5"
       width="10.583875"
       height="18.976137"
       x="-92.035385"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)">
      <title
         id="title4883">Seccion H5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH30"
       width="10.583875"
       height="18.976137"
       x="-92.302597"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H30">
      <title
         id="title4931">Seccion H30</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH4"
       width="10.583875"
       height="18.976137"
       x="-81.451523"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H4">
      <title
         id="title4881">Seccion H4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH31"
       width="10.583875"
       height="18.976137"
       x="-81.718735"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H31">
      <title
         id="title4933">Seccion H31</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH3"
       width="10.583875"
       height="18.976137"
       x="-70.867645"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H3">
      <title
         id="title4879">Seccion H3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH2"
       width="10.583875"
       height="18.976137"
       x="-60.283772"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H2">
      <title
         id="title4877">Seccion H2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH32"
       width="10.583875"
       height="18.976137"
       x="-71.134857"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H32">
      <title
         id="title4935">Seccion H32</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH33"
       width="10.583875"
       height="18.976137"
       x="-60.550983"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H33">
      <title
         id="title4939">Seccion H33</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH1"
       width="10.583875"
       height="18.976137"
       x="-49.699894"
       y="389.65948"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H1">
      <title
         id="title4875">Seccion H1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sH34"
       width="10.583875"
       height="18.976137"
       x="-49.967106"
       y="414.5155"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="H34">
      <title
         id="title4941">Seccion H34</title>
    </rect>
    <rect
       style="fill:#e6e6e6;stroke-width:0.27587321"
       id="aI"
       width="192.43411"
       height="44.634018"
       x="32.96883"
       y="453.67053"
       ry="6.943429"
       transform="matrix(0.00104071,0.99999946,0.99999946,-0.00104071,0,0)"
       inkscape:label="I">
      <title
         id="title4557">Area I</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI11"
       width="10.583875"
       height="18.976137"
       x="-155.27145"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I11">
      <title
         id="title4963">Seccion I11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI16"
       width="10.583875"
       height="18.976137"
       x="-208.19081"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I16">
      <title
         id="title4973">Seccion I16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI15"
       width="10.583875"
       height="18.976137"
       x="-197.60692"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I15">
      <title
         id="title4971">Seccion I15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI12"
       width="10.583875"
       height="18.976137"
       x="-165.8553"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I12">
      <title
         id="title4965">Seccion I12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI10"
       width="10.583875"
       height="18.976137"
       x="-144.68752"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I10">
      <title
         id="title4961">Seccion I10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI17"
       width="10.583875"
       height="18.976137"
       x="-218.77467"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I17">
      <title
         id="title4975">Seccion I17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI14"
       width="10.583875"
       height="18.976137"
       x="-187.02306"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I14">
      <title
         id="title4969">Seccion I14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI13"
       width="10.583875"
       height="18.976137"
       x="-176.43916"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I13">
      <title
         id="title4967">Seccion I13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI24"
       width="10.583875"
       height="18.976137"
       x="-155.53871"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I24">
      <title
         id="title5003">Seccion I24</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI19"
       width="10.583875"
       height="18.976137"
       x="-208.45808"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I19">
      <title
         id="title4979">Seccion I19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI20"
       width="10.583875"
       height="18.976137"
       x="-197.87419"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I20">
      <title
         id="title4981">Seccion I20</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI23"
       width="10.583875"
       height="18.976137"
       x="-166.12257"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I23">
      <title
         id="title4987">Seccion I23</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI25"
       width="10.583875"
       height="18.976137"
       x="-144.95479"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I25">
      <title
         id="title4989">Seccion I25</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI26"
       width="10.583875"
       height="18.976137"
       x="-134.37086"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I26">
      <title
         id="title4991">Seccion I26</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI18"
       width="10.583875"
       height="18.976137"
       x="-219.04195"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I18">
      <title
         id="title4977">Seccion I18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI21"
       width="10.583875"
       height="18.976137"
       x="-187.29033"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I21">
      <title
         id="title4983">Seccion I21</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI22"
       width="10.583875"
       height="18.976137"
       x="-176.70644"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I22">
      <title
         id="title4985">Seccion I22</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI9"
       width="10.583875"
       height="18.976137"
       x="-134.10365"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I9">
      <title
         id="title4959">Seccion I9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI8"
       width="10.583875"
       height="18.976137"
       x="-123.51976"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I8">
      <title
         id="title4957">Seccion I8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI27"
       width="10.583875"
       height="18.976137"
       x="-123.78697"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I27">
      <title
         id="title4993">Seccion I27</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI28"
       width="10.583875"
       height="18.976137"
       x="-113.20311"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I28">
      <title
         id="title4995">Seccion I28</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI29"
       width="10.583875"
       height="18.976137"
       x="-102.61922"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I29">
      <title
         id="title4997">Seccion I29</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI7"
       width="10.583875"
       height="18.976137"
       x="-112.93587"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I7">
      <title
         id="title4955">Seccion I7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI6"
       width="10.583875"
       height="18.976137"
       x="-102.35201"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I6">
      <title
         id="title4953">Seccion I6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI5"
       width="10.583875"
       height="18.976137"
       x="-91.768143"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I5">
      <title
         id="title4951">Seccion I5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI30"
       width="10.583875"
       height="18.976137"
       x="-92.035355"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I30">
      <title
         id="title4999">Seccion I30</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI4"
       width="10.583875"
       height="18.976137"
       x="-81.18425"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I4">
      <title
         id="title4949">Seccion I4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI31"
       width="10.583875"
       height="18.976137"
       x="-81.451462"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I31">
      <title
         id="title5001">Seccion I31</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI3"
       width="10.583875"
       height="18.976137"
       x="-70.600388"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I3">
      <title
         id="title4947">Seccion I3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI2"
       width="10.583875"
       height="18.976137"
       x="-60.016514"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I2">
      <title
         id="title4945">Seccion I2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI32"
       width="10.583875"
       height="18.976137"
       x="-70.867599"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I32">
      <title
         id="title5005">Seccion I32</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI33"
       width="10.583875"
       height="18.976137"
       x="-60.283726"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I33">
      <title
         id="title5007">Seccion I33</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI1"
       width="10.583875"
       height="18.976137"
       x="-49.432621"
       y="453.8042"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I1">
      <title
         id="title4943">Seccion I1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sI34"
       width="10.583875"
       height="18.976137"
       x="-49.699848"
       y="478.66022"
       ry="2.6243587"
       transform="rotate(-90.059628)"
       inkscape:label="I34">
      <title
         id="title5009">Seccion I34</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL1"
       width="10.583904"
       height="18.976133"
       x="118.38658"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L1">
      <title
         id="title5049">Seccion L1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL10"
       width="10.583875"
       height="18.976137"
       x="23.131691"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L10">
      <title
         id="title5067">Seccion L10</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL8"
       width="10.583875"
       height="18.976137"
       x="44.299435"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L8">
      <title
         id="title5063">Seccion L8</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL7"
       width="10.583875"
       height="18.976137"
       x="54.883324"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L7">
      <title
         id="title5061">Seccion L7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL9"
       width="10.583875"
       height="18.976137"
       x="33.715584"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L9">
      <title
         id="title5065">Seccion L9</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL2"
       width="10.583875"
       height="18.976137"
       x="107.80273"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L2">
      <title
         id="title5051">Seccion L2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL11"
       width="10.583875"
       height="18.976137"
       x="12.547816"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L11">
      <title
         id="title5069">Seccion L11</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL5"
       width="10.583875"
       height="18.976137"
       x="76.051064"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L5">
      <title
         id="title5057">Seccion L5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL6"
       width="10.583875"
       height="18.976137"
       x="65.467194"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L6">
      <title
         id="title5059">Seccion L6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL3"
       width="10.583875"
       height="18.976137"
       x="97.218834"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L3">
      <title
         id="title5053">Seccion L3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL4"
       width="10.583875"
       height="18.976137"
       x="86.634949"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L4">
      <title
         id="title5055">Seccion L4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL13"
       width="10.583904"
       height="18.976133"
       x="-8.6199865"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L13">
      <title
         id="title5073">Seccion L13</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL12"
       width="10.583875"
       height="18.976137"
       x="1.9639231"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L12">
      <title
         id="title5071">Seccion L12</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL16"
       width="10.583904"
       height="18.976133"
       x="-40.371677"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L16">
      <title
         id="title5079">Seccion L16</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL25"
       width="10.583875"
       height="18.976137"
       x="-135.62656"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L25">
      <title
         id="title5097">Seccion L25</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL23"
       width="10.583875"
       height="18.976137"
       x="-114.45882"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L23">
      <title
         id="title5093">Seccion L23</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL22"
       width="10.583875"
       height="18.976137"
       x="-103.87493"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L22">
      <title
         id="title5091">Seccion L22</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL24"
       width="10.583875"
       height="18.976137"
       x="-125.04272"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L24">
      <title
         id="title5095">Seccion L24</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL17"
       width="10.583875"
       height="18.976137"
       x="-50.955555"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L17">
      <title
         id="title5081">Seccion L17</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL26"
       width="10.583875"
       height="18.976137"
       x="-146.21046"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L26">
      <title
         id="title5099">Seccion L26</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL20"
       width="10.583875"
       height="18.976137"
       x="-82.707214"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L20">
      <title
         id="title5087">Seccion L20</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL21"
       width="10.583875"
       height="18.976137"
       x="-93.291069"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L21">
      <title
         id="title5089">Seccion L21</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL18"
       width="10.583875"
       height="18.976137"
       x="-61.539417"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L18">
      <title
         id="title5083">Seccion L18</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL19"
       width="10.583875"
       height="18.976137"
       x="-72.123322"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L19">
      <title
         id="title5085">Seccion L19</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL28"
       width="10.583904"
       height="18.976133"
       x="-167.37825"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L28">
      <title
         id="title5103">Seccion L28</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL27"
       width="10.583875"
       height="18.976137"
       x="-156.79436"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L27">
      <title
         id="title5101">Seccion L27</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL29"
       width="10.583904"
       height="18.976133"
       x="-177.96214"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L29">
      <title
         id="title5107">Seccion L29</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL38"
       width="10.583875"
       height="18.976137"
       x="-273.21704"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L38">
      <title
         id="title5125">Seccion L38</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL36"
       width="10.583875"
       height="18.976137"
       x="-252.04932"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L36">
      <title
         id="title5121">Seccion L36</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL35"
       width="10.583875"
       height="18.976137"
       x="-241.46542"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L35">
      <title
         id="title5119">Seccion L35</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL37"
       width="10.583875"
       height="18.976137"
       x="-262.63318"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L37">
      <title
         id="title5123">Seccion L37</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL30"
       width="10.583875"
       height="18.976137"
       x="-188.54604"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L30">
      <title
         id="title5109">Seccion L30</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL39"
       width="10.583875"
       height="18.976137"
       x="-283.8009"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L39">
      <title
         id="title5127">Seccion L39</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL33"
       width="10.583875"
       height="18.976137"
       x="-220.29768"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L33">
      <title
         id="title5115">Seccion L33</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL34"
       width="10.583875"
       height="18.976137"
       x="-230.88153"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L34">
      <title
         id="title5117">Seccion L34</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL31"
       width="10.583875"
       height="18.976137"
       x="-199.12996"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L31">
      <title
         id="title5111">Seccion L31</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL32"
       width="10.583875"
       height="18.976137"
       x="-209.71379"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L32">
      <title
         id="title5113">Seccion L32</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL41"
       width="10.583904"
       height="18.976133"
       x="-304.96869"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L41">
      <title
         id="title5131">Seccion L41</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL40"
       width="10.583875"
       height="18.976137"
       x="-294.38477"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L40">
      <title
         id="title5129">Seccion L40</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL15"
       width="10.583904"
       height="18.976133"
       x="-29.787773"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L15">
      <title
         id="title5077">Seccion L15</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL14"
       width="10.583875"
       height="18.976137"
       x="-19.203859"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L14">
      <title
         id="title5075">Seccion L14</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL42"
       width="10.583875"
       height="18.976137"
       x="-315.55255"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L42">
      <title
         id="title5133">Seccion L42</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL43"
       width="10.583875"
       height="18.976137"
       x="-326.13638"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L43">
      <title
         id="title5135">Seccion L43</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL45"
       width="10.583904"
       height="18.976133"
       x="-347.30426"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L45">
      <title
         id="title5139">Seccion L45</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL44"
       width="10.583875"
       height="18.976137"
       x="-336.72028"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L44">
      <title
         id="title5137">Seccion L44</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL46"
       width="10.583875"
       height="18.976137"
       x="-357.88806"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L46">
      <title
         id="title5141">Seccion L46</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL53"
       width="10.583875"
       height="18.976137"
       x="-431.97522"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L53">
      <title
         id="title5155">Seccion L53</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL51"
       width="10.583875"
       height="18.976137"
       x="-410.80743"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L51">
      <title
         id="title5151">Seccion L51</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL50"
       width="10.583875"
       height="18.976137"
       x="-400.22357"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L50">
      <title
         id="title5149">Seccion L50</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL52"
       width="10.583875"
       height="18.976137"
       x="-421.39124"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L52">
      <title
         id="title5153">Seccion L52</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL54"
       width="10.583875"
       height="18.976137"
       x="-442.55908"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L54">
      <title
         id="title5157">Seccion L54</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL48"
       width="10.583875"
       height="18.976137"
       x="-379.05585"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L48">
      <title
         id="title5145">Seccion L48</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL49"
       width="10.583875"
       height="18.976137"
       x="-389.63971"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L49">
      <title
         id="title5147">Seccion L49</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL47"
       width="10.583875"
       height="18.976137"
       x="-368.47186"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L47">
      <title
         id="title5143">Seccion L47</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL56"
       width="10.583904"
       height="18.976133"
       x="-463.72681"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L56">
      <title
         id="title5161">Seccion L56</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL55"
       width="10.583875"
       height="18.976137"
       x="-453.14294"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L55">
      <title
         id="title5159">Seccion L55</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL57"
       width="10.583875"
       height="18.976137"
       x="-474.31067"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L57">
      <title
         id="title5163">Seccion L57</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.1969151"
       id="sL59"
       width="10.583904"
       height="18.976133"
       x="-495.47842"
       y="-74.452362"
       ry="2.6243582"
       transform="rotate(170.18346)"
       inkscape:label="L59">
      <title
         id="title5167">Seccion L59</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sL58"
       width="10.583875"
       height="18.976137"
       x="-484.89453"
       y="-74.452362"
       ry="2.6243587"
       transform="rotate(170.18346)"
       inkscape:label="L58">
      <title
         id="title5165">Seccion L58</title>
    </rect>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#ff0000;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="-76.069557"
       y="111.16591"
       id="text5283"><tspan
         sodipodi:role="line"
         id="tspan5281"
         x="-76.069557"
         y="120.8214"
         style="stroke-width:0.26458332" /></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#ff0000;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="-2.3182867"
       y="102.46138"
       id="text5287"><tspan
         sodipodi:role="line"
         id="tspan5285"
         x="-2.3182867"
         y="112.11687"
         style="stroke-width:0.26458332" /></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:Broadway;-inkscape-font-specification:Broadway;letter-spacing:0px;word-spacing:0px;fill:#ff0000;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="-82.11718"
       y="110.40997"
       id="text5291"><tspan
         sodipodi:role="line"
         id="tspan5289"
         x="-82.11718"
         y="121.96888"
         style="stroke-width:0.26458332" /></text>
    <rect
       style="fill:#ff0000;fill-opacity:0;stroke-width:0.26458332"
       id="rect6260"
       width="65.748306"
       height="16.036171"
       x="-87.524719"
       y="19.163378" />
    <rect
       style="fill:#009600;fill-opacity:0;stroke-width:0.26458332"
       id="rect6264"
       width="67.230255"
       height="20.068213"
       x="-101.42274"
       y="42.148552" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268"
       width="42.196095"
       height="11.721216"
       x="-93.939186"
       y="110.03502"
       ry="2.6243598" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-7"
       width="42.196095"
       height="11.721216"
       x="-23.41633"
       y="90.740166"
       ry="2.6243598" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-1"
       width="42.196095"
       height="11.721216"
       x="45.52512"
       y="77.171272"
       ry="2.6243598" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-79"
       width="42.196095"
       height="11.721216"
       x="116.60753"
       y="66.272888"
       ry="2.6243598" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-8"
       width="42.196095"
       height="11.721216"
       x="189.65002"
       y="48.047806"
       ry="2.6243598" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-15"
       width="42.196095"
       height="11.721216"
       x="323.81934"
       y="32.546173"
       ry="2.6243598" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-85"
       width="42.196095"
       height="11.721216"
       x="130.54933"
       y="43.461639"
       ry="2.6243598"
       transform="rotate(-9.9792814)" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-4"
       width="42.196095"
       height="11.721216"
       x="259.86493"
       y="36.189613"
       ry="2.6243598"
       inkscape:transform-center-x="6.9490077" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-6"
       width="42.196095"
       height="11.721216"
       x="390.77914"
       y="21.086245"
       ry="2.6243598" />
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-0"
       width="42.196095"
       height="11.721216"
       x="455.31595"
       y="22.389933"
       ry="2.6243598" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="-77.267319"
       y="119.6413"
       id="text6365"><tspan
         sodipodi:role="line"
         id="tspan6363"
         x="-77.267319"
         y="119.6413"
         style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke-width:0.26458332">A</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="-6.1503572"
       y="99.984306"
       id="text6365-9"><tspan
         sodipodi:role="line"
         id="tspan6459"
         x="-6.1503572"
         y="99.984306">B</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="62.270641"
       y="86.620834"
       id="text6365-2"><tspan
         sodipodi:role="line"
         id="tspan6461"
         x="62.270641"
         y="86.620834">C</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="133.36433"
       y="76.99913"
       id="text6365-1"><tspan
         sodipodi:role="line"
         id="tspan6463"
         x="133.36433"
         y="76.99913">D</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="205.5271"
       y="57.755726"
       id="text6365-95"><tspan
         sodipodi:role="line"
         id="tspan6465"
         x="205.5271"
         y="57.755726">E</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="277.68988"
       y="45.995865"
       id="text6365-6"><tspan
         sodipodi:role="line"
         id="tspan6467"
         x="277.68988"
         y="45.995865">F</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="342.36911"
       y="42.254093"
       id="text6365-4"><tspan
         sodipodi:role="line"
         id="tspan6469"
         x="342.36911"
         y="42.254093">G</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="408.1174"
       y="30.494234"
       id="text6365-65"><tspan
         sodipodi:role="line"
         id="tspan6471"
         x="408.1174"
         y="30.494234">H</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="474.40027"
       y="31.563313"
       id="text6365-7"><tspan
         sodipodi:role="line"
         id="tspan6473"
         x="474.40027"
         y="31.563313">I</tspan></text>
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.24832901"
       id="rect6268-0-3"
       width="18.141848"
       height="24.015612"
       x="523.5575"
       y="109.64037"
       ry="5.3770537" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:19.57897568px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.48946613"
       x="441.8096"
       y="152.77654"
       id="text6365-7-1"
       transform="scale(1.1950469,0.83678725)"><tspan
         sodipodi:role="line"
         id="tspan7414"
         x="441.8096"
         y="152.77654"
         style="stroke-width:0.48946613">J</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:14.65471268px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.3663691"
       x="120.99624"
       y="58.98341"
       id="text6365-7-6"
       transform="matrix(1.203318,-0.17364698,0.11747765,0.8140827,0,0)"><tspan
         sodipodi:role="line"
         id="tspan7442"
         x="120.99624"
         y="58.98341"
         style="stroke-width:0.3663691">L</tspan></text>
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.24832903"
       id="rect6268-0-3-0"
       width="18.141848"
       height="24.015612"
       x="-135.75336"
       y="126.38969"
       ry="5.3770537" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:16.38298225px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.40956649"
       x="-121.7352"
       y="157.94168"
       id="text6365-7-1-2"
       transform="scale(1.0918307,0.91589292)"><tspan
         sodipodi:role="line"
         id="tspan7480"
         x="-121.7352"
         y="157.94168"
         style="stroke-width:0.40956649">K</tspan></text>
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-85-8"
       width="42.196095"
       height="11.721216"
       x="194.54475"
       y="239.93903"
       ry="2.6243598"
       transform="rotate(1.0288803)" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:14.65474224px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.3663691"
       x="177.67812"
       y="295.25574"
       id="text6365-7-6-5"
       transform="matrix(1.2143346,0.05932029,-0.04013208,0.8215358,0,0)"><tspan
         sodipodi:role="line"
         id="tspan7503"
         x="177.67812"
         y="295.25574">M</tspan></text>
    <rect
       style="fill:#804323;fill-opacity:0.92016805;stroke-width:0.22645986"
       id="rect7505"
       width="18.690435"
       height="33.954224"
       x="-135.48096"
       y="92.059669"
       ry="1.7438084"
       transform="matrix(0.99999522,-0.00309243,0.00851389,0.99996376,0,0)" />
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sN3"
       width="10.583875"
       height="18.976137"
       x="562.59637"
       y="217.67523"
       ry="2.6243587"
       transform="rotate(0.06881528)"
       inkscape:transform-center-x="-4.7644031"
       inkscape:transform-center-y="-24.903042"
       inkscape:label="N3">
      <title
         id="title5021-4">Seccion N3</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sN5"
       width="10.583875"
       height="18.976137"
       x="583.76416"
       y="217.67523"
       ry="2.6243587"
       transform="rotate(0.06881528)"
       inkscape:transform-center-x="-25.932199"
       inkscape:transform-center-y="-24.877619"
       inkscape:label="N5">
      <title
         id="title5017-8">Seccion N5</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sN6"
       width="10.583875"
       height="18.976137"
       x="594.34802"
       y="217.67523"
       ry="2.6243587"
       transform="rotate(0.06881528)"
       inkscape:transform-center-x="-36.516055"
       inkscape:transform-center-y="-24.864905"
       inkscape:label="N6">
      <title
         id="title5015-4">Seccion N6</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sN4"
       width="10.583875"
       height="18.976137"
       x="573.18036"
       y="217.67523"
       ry="2.6243587"
       transform="rotate(0.06881528)"
       inkscape:transform-center-x="-15.348379"
       inkscape:transform-center-y="-24.890329"
       inkscape:label="N4">
      <title
         id="title5019-5">Seccion N4</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sN2"
       width="10.583875"
       height="18.976137"
       x="552.01245"
       y="217.67523"
       ry="2.6243587"
       transform="rotate(0.06881528)"
       inkscape:transform-center-x="5.8195051"
       inkscape:transform-center-y="-24.915752"
       inkscape:label="N2">
      <title
         id="title5025-3">Seccion N2</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sN1"
       width="10.583875"
       height="18.976137"
       x="541.42859"
       y="217.67523"
       ry="2.6243587"
       transform="rotate(0.06881528)"
       inkscape:transform-center-x="16.403357"
       inkscape:transform-center-y="-24.928464"
       inkscape:label="N1">
      <title
         id="title5023-3">Seccion N1</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sN7"
       width="10.583875"
       height="18.976137"
       x="604.93188"
       y="217.67523"
       ry="2.6243587"
       transform="rotate(0.06881528)"
       inkscape:transform-center-x="-25.932185"
       inkscape:transform-center-y="-24.877618"
       inkscape:label="N7">
      <title
         id="title5013-6">Seccion N7</title>
    </rect>
    <rect
       style="fill:#FFB300;stroke-width:0.19691484"
       id="sN8"
       width="10.583875"
       height="18.976137"
       x="615.51575"
       y="217.67523"
       ry="2.6243587"
       transform="rotate(0.06881528)"
       inkscape:transform-center-x="-36.516041"
       inkscape:transform-center-y="-24.864906"
       inkscape:label="N8">
      <title
         id="title5011-7">Seccion N8</title>
    </rect>
    <rect
       style="fill:#090607;fill-opacity:0.95798322;stroke-width:0.26458332"
       id="rect6268-0-6"
       width="42.196095"
       height="11.721216"
       x="562.47388"
       y="206.6804"
       ry="2.6243598" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f4f4f4;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="581.55823"
       y="215.85378"
       id="text6365-7-62"><tspan
         sodipodi:role="line"
         id="tspan7649"
         x="581.55823"
         y="215.85378">N</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#ff0000;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="-219.39699"
       y="-144.54283"
       id="text7653"
       transform="rotate(-89.31859)"><tspan
         sodipodi:role="line"
         id="tspan7651"
         x="-219.39699"
         y="-144.54283"
         style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;writing-mode:lr-tb;text-anchor:start;stroke-width:0.26458332">AV.ALFREDO BENAVIDES</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#ff0000;fill-opacity:1;stroke:none;stroke-width:0.26458332"
       x="238.06224"
       y="289.79807"
       id="text7653-3"
       transform="rotate(0.17866762)"><tspan
         sodipodi:role="line"
         id="tspan7651-4"
         x="238.06224"
         y="289.79807"
         style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;writing-mode:lr-tb;text-anchor:start;stroke-width:0.26458332">CALLE SACRAMENTO</tspan></text>
    <rect
       style="fill:#804323;fill-opacity:0.92016805;stroke-width:0.28817272"
       id="rect7505-2"
       width="19.409506"
       height="52.944649"
       x="255.15596"
       y="-370.21265"
       ry="2.7191122"
       transform="matrix(-0.00161712,0.99999869,-0.99999805,-0.00197465,0,0)" />
    <rect
       style="fill:#804323;fill-opacity:0.92016805;stroke-width:0.2406275"
       id="rect7505-2-1"
       width="19.409492"
       height="36.915363"
       x="254.05298"
       y="-512.83398"
       ry="1.8958859"
       transform="matrix(-0.00112753,0.99999936,-0.99999599,-0.00283208,0,0)" />
    <rect
       style="fill:#804323;fill-opacity:0.92016805;stroke-width:0.1809974"
       id="rect7505-2-4"
       width="19.409485"
       height="20.886301"
       x="255.64282"
       y="-41.854069"
       ry="1.0726712"
       transform="matrix(-6.3793675e-4,0.9999998,-0.99998747,-0.00500554,0,0)" />
  </g>
</svg>


                </div>

        </div>
    </section>
    <!-- /.content -->
  </div> 

<?php  
require_once 'footer.php';
?>

<script type="text/javascript">
	function init(){
    $("#salir").hide();
    console.log("se ejecuta al inicio");
 pintarocupados();
 ponerboton();
	}

function ponerboton(){
  var tv = $("#recogertipoVehiculo").val();
  console.log(tv);
  if (tv=="Auto") {
$("#entrarmoto").hide();
$("#entrarbicicleta").hide();

  }
  if (tv=="Moto") {
$("#entrarcarro").hide();
$("#entrarbicicleta").hide();
  }
  if (tv=="Bici") {
$("#entrarmoto").hide();
$("#entrarcarro").hide();
  }
 
}

function aleatorioentrar(){
    var junto;
    var primeraleatorio=Math.round(Math.random()*12);
     switch(""+primeraleatorio) {
      case "0":
      var letraconcatenada="A";
      var aleatorio = Math.round(Math.random()*16)+1;
      break;

      case "1":
      var letraconcatenada="A";
      var aleatorio = Math.round(Math.random()*16)+1;
      
        break;
     case "2":
       var letraconcatenada="B";
       var aleatorio = Math.round(Math.random()*18)+1;
       
        break;
     case "3":
        var letraconcatenada="C";
        var aleatorio = Math.round(Math.random()*21)+1;
        
        break;
      case "4":
        var letraconcatenada="D";
        var aleatorio = Math.round(Math.random()*25)+1;
        
        break;
       case "5":
        var letraconcatenada="E";
        var aleatorio = Math.round(Math.random()*26)+1;
       
        break;
       case "6":
        var letraconcatenada="F";
        var aleatorio = Math.round(Math.random()*28)+1;
        
        break;
       case "7":
        var letraconcatenada="G";
        var aleatorio = Math.round(Math.random()*31)+1;
        
        break;
       case "8":
        var letraconcatenada="H";
        var aleatorio = Math.round(Math.random()*33)+1;
         
        break;
         case "9":
       var letraconcatenada="I";
       var aleatorio = Math.round(Math.random()*33)+1;
       
        break;
        case "10":
       var letraconcatenada="K";
       var aleatorio = Math.round(Math.random()*9)+1;
        
        break;
        case "11":
       var letraconcatenada="L";
       var aleatorio = Math.round(Math.random()*58)+1;
        
        break;
        case "12":
       var letraconcatenada="M";
       var aleatorio = Math.round(Math.random()*48)+1;
       
        break; 
        default:
       
}
     junto="s"+letraconcatenada+aleatorio;
     return junto;
}
function vehiculoOcupado(elemento,numero2) {
  $.post("../ajax/C_Seccion.php?op=vehiculoOcupado", {junto:elemento}, function(data, status){
    
    data = JSON.parse(data);
    numero=data.count;
    console.log("el valor que llego en vehiculoOcupado es:"+numero);
switch(numero) {
  case "0":
  document.getElementById("lugarocupado").innerHTML=elemento;
    console.log("voy a pintar el"+elemento);
    document.getElementById(elemento).style.fill="#ff0000";
     ingresartodo(elemento);
        
     break;
  case "1":
  var junto2;
  if(numero2==1){
      junto2=aleatorioentrar();
      console.log("paso por carro");
      }
  if(numero2==2){
      junto2=aleatoriomotos(); 
      console.log("paso por moto");
     }
  if(numero2==3){
      junto2=aleatoriobicicletas(); 
      console.log("paso por moto");
  }
      vehiculoOcupado(junto2,numero2);
    
    break;
   }
}); 

 }


 function ingresar(){
 var alea=aleatorioentrar();
   vehiculoOcupado(alea,1);
    
}

function entramoto(){
 var motoaleatorio=aleatoriomotos();
      vehiculoOcupado(motoaleatorio,2);
    }


function entrabici(){
 var bicialeatorio=aleatoriobicicletas();
      vehiculoOcupado(bicialeatorio,3);
    }


function actualizarArea1(area){
var id_area=area.charAt(1);
var id_area_final;
switch(""+id_area) {
      case "A":
      id_area_final=1;
      break;
      case "B":
      id_area_final=2;
        break;
     case "C":
      id_area_final=3; 
        break;
     case "D":
      id_area_final=4;  
        break;
      case "E":
      id_area_final=5;  
        break;
       case "F":
      id_area_final=6; 
        break;
       case "G":
      id_area_final=7;  
        break;
       case "H":
      id_area_final=8;  
        break;
       case "I":
      id_area_final=9;   
        break;
         case "J":
       id_area_final=10;
        break;
        case "K":
        id_area_final=11;
        break;
        case "L":
       id_area_final=12;
        break;
        case "M":
       id_area_final=13;
        break;
        case "N":
       id_area_final=14;
        break;  
}
 restar(id_area_final);
}

function restar(id_area1){
 $.post("../ajax/C_Area.php?op=restar", {id_area:id_area1}, function(data, status){
    data = JSON.parse(data);
    actualizarEspacioArea(id_area1,data);
});   
}
 

function actualizarEspacioArea(id_area1,data){
var id_area2=id_area1;
var espacio=data;
   $.ajax({
    url: "../ajax/C_Area.php?op=actualizarEspacioArea",
    type: "POST",
    data: {"id_area":id_area2,"espacio":espacio},

    success: function(datos){
      $("#entrarcarro").hide();
      $("#entrarmoto").hide();
      $("#entrarbicicleta").hide();
      $("#salir").show();
    vehiculosOcupados();
  }
});
}

function ingresartodo(elemento){
   var msg=elemento;
    $.ajax({
    url: "../ajax/C_Seccion.php?op=actualizarEstadoEntrada",
    type: "POST",
    data: {"junto": msg},

    success: function(datos){
      bootbox.alert(datos);
    vehiculosOcupados();
    actualizarArea1(elemento); 
  }
});
}

function pintarocupados(){
$.post("../ajax/C_Seccion.php?op=pedirEstacionamientosLlenos", {}, function(data, status){
  try{

    data = JSON.parse(data);
  
  console.log("hola"+data.length);
 for (var i = 0; i < data.length; i++) {
   document.getElementById(data[i].nombre).style.fill="#ff0000";
   
   }vehiculosOcupados();
}
catch(err){
vehiculosOcupados();
}}
);
}
function salir2(sacar){
$.post("../ajax/C_Seccion.php?op=pedirEstacionamientosLlenos", {}, function(data, status){
  try{
    data = JSON.parse(data);
  var arraypintados=new Array();
  arraypintados=data;
  var tamañodelarraydefinitivo=arraypintados.length;
  console.log("el tamano del Array es:"+tamañodelarraydefinitivo);
  if(tamañodelarraydefinitivo==0){
    sacarvehiculo("0"); 
  }
  else{
  
  //var eliminar=arraypintados[aleatorio].nombre;
 // var indice=arraypintados.indexOf(eliminar);
 // arraypintados.splice(indice,1);
  console.log("Se elimina:"+sacar);
  document.getElementById(sacar).style.fill="#FFB300";
  document.getElementById("lugarocupado").innerHTML="--";
  sacarvehiculo(sacar);

  bootbox.alert("Salio el vehiculo.", function(){$(location).attr('href',"../vistas/controlarSalida.php");});

  }}
  catch(err){
//alert("el error es:"+err.message);
sacarvehiculo(0);
  }
  }
  );
}

function sacarvehiculo(salio){
var msg=salio;
   //alert(msg);
    $.ajax({
    url: "../ajax/C_Seccion.php?op=actualizarEstadoSalida",
    type: "POST",
    data: {"junto": msg},
    success: function(datos){
      bootbox.alert(datos);
    vehiculosOcupados();
    actualizarArea1(salio);
  }
  
  });
}

function salir(){
  //var a=document.getElementById(numerototaldecarros);
  var a=$("#lugarocupado").text();
  console.log(a);
   salir2(a);
}
init();
</script>

<script type="text/javascript" src="scripts/simular.js"></script>
