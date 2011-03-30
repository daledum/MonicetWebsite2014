<?php use_helper('I18N', 'Date') ?>

<?php slot('gmap') ?>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<script type="text/javascript">
  
  
  /*
   * inicializa o javascript com a abertura da página
   */
  $(function(){
    initialize('default');
  });
  
  
</script>

<style type="text/css">

  html { height: 100%; }
  body { height: 100%; margin: 0px; padding: 0px; }
  #pg { height: 90%; }
  #bd { height: 600px; }
  .ct { height: 563px; }
  
  .map-container{
    text-align: center;
  }
  
  #map-container-div{
    height: 518px;
  }
  
  .right-side-bar{
    border-top: 1px solid #729158;
    border-bottom: 1px solid #729158;
    background-image: none;
    background-color: #ecffe7;
    height: 502px;
  }
  
  .filters-left{
    border-left: 1px solid #729158;
    border-top: 1px solid #729158;
    border-bottom: 1px solid #729158;
    background-image: none;
    background-color: #ecffe7;
  }
  
  .filters-right{
    border-right: 1px solid #729158;
    border-top: 1px solid #729158;
    border-bottom: 1px solid #729158;
    background-image: none;
    background-color: #ecffe7;
  }
  
  .right-container{
    width: 322px;
  }
  
  #loading{
    background-image: url("/images/backend/icons_gmaps/loading_backend.gif");
  }
  
  .right-side-bar{
    height: 500px;
  }
  
  .filters-sides{
    height: 530px;
  }

</style>


<?php end_slot() ?>


<div id="sf_admin_container" class="map-container">
  <h1 style="text-align: left;">Mapa de Avistamentos</h1>
  <div class="left-container">
    <div class="map-sides map-left"></div>
    <div id="map-container-div">
      <div id="map_canvas"></div>
    </div>
    <div class="map-sides map-right"></div>
  </div>
  <div class="right-container">
    <div class="filters-sides filters-left"></div>
    <div class="right-side-bar">
      <div class="top-container" style="position: relative;">
        <select id="pesquisa-select">
          <option></option>
          <?php foreach($speciesList as $specie): ?>
            <option value="<?php echo $specie->getId() ?>"><?php echo $specie->getCode() ?> - <?php echo $specie->getName() ?></option>
          <?php endforeach; ?>
        </select>
        <div id="item-list"></div>
        <div class="filter-item" id="layers-toggle-div" style="position: absolute; bottom: 5px; left: 5px;">
          <label>Layers:</label>
          <input id="layers-toggle" type="checkbox" value="layer" name="layer" />
        </div>
      </div>
      <div class="bottom-container">
        <h2>Filtros:</h2>
        <div class="filter-item">
          <?php if($sf_user->isSuperAdmin()): ?>
          <label>Empresa:</label>
          <select id="company" class="filter-select">
            <option></option>
              <?php foreach($companies as $company): ?>
                <option value="<?php echo $company->getId(); ?>"><?php echo $company->getName(); ?></option>
              <?php endforeach; ?>
          </select>
          <?php endif; ?>
        </div>
        <div class="filter-item">
          <label>Associação:</label>
            <select id="association" class="filter-select">
              <option></option>
              <?php foreach($associations as $association): ?>
                <option value="<?php echo $association->getId(); ?>"><?php echo $association->getDescription(); ?></option>
              <?php endforeach; ?>
          </select>
        </div>
        <div class="filter-item">
          <label>Comportamento:</label>
            <select id="behaviour" class="filter-select">
              <option></option>
              <?php foreach($behaviours as $behaviour): ?>
                <option value="<?php echo $behaviour->getId(); ?>"><?php echo $behaviour->getDescription(); ?></option>
              <?php endforeach; ?>
          </select>
        </div>
        <div class="filter-item">
          <label>Estado do Mar:</label>
            <select id="sea-state" class="filter-select">
              <option></option>
              <?php foreach($sea_states as $sea_state): ?>
                <option value="<?php echo $sea_state->getId(); ?>"><?php echo $sea_state->getDescription(); ?></option>
              <?php endforeach; ?>
          </select>
        </div>
        <div class="filter-item">
          <label>Visibilidade:</label>
            <select id="visibility" class="filter-select">
              <option></option>
              <?php foreach($visibilities as $visibility): ?>
                <option value="<?php echo $visibility->getId(); ?>"><?php echo $visibility->getDescription(); ?></option>
              <?php endforeach; ?>
          </select>
        </div>
      </div>
    </div>
    <div class="filters-sides filters-right"></div>
  </div>
</div>
