<nav>
    <div class="ng-cloak nav-wrapper"  ng-cloak ng-hide="loadingPrev">
        <div class="input-field">
          <input type="search" ng-model="searchText" placeholder="[['panel_detail_evaluation_filterserviceplaceholder' | translate]]">
          <label for="searchText"><i class="mdi-action-search"></i></label>
        </div>
    </div>
  </nav>

  <div class="card-panel">
    <div class="card-panel">
       <span class="card-title" translate="panel_detail_evaluation_filterservicelabel"></span>
       <br>
       <div class="row">
         <div class="col s12 right-align">
           <b translate="panel_evaluations_exportbutton"></b>
           <span target="_self" ng-click="exportEvaluationsFilterByService([[id]])" class="waves-effect waves-light btn-floating red">
             <i class="mdi-file-file-download left"></i>
           </span>
           <!--
           <a target="_self" href="../../panel/importer/eval-export/[[id]]" ng-click="" class="waves-effect waves-light btn-floating red">
             <i class="mdi-file-file-download left"></i>
           </a>
         -->
         </div>
       </div>
       <div class="row">
      <div ng-repeat="service in services">
          <div class="col s2">
              <input type="checkbox" id="[[service.code]]" ng-checked="exists(service.code, selected)" ng-click="toggle(service.code, selected)"/>
                <label for="[[service.code]]">[[service.label]]</label>
        </div>
    </div>
    </div>
  </div>
      <table class="bordered striped responsive-table" style="word-wrap:break-word;">
        <thead ng-cloak ng-hide="loadingPost">
          <tr>
            <th class="evaluation-panel-searched-header" translate="panel_detail_evaluation_th_1"></th>
           <th class="evaluation-panel-searched-header" translate="panel_detail_evaluation_th_2"></th>
           <th class="evaluation-panel-received-header" translate="panel_detail_evaluation_th_3"></th>
           <th class="evaluation-panel-info-header" translate="panel_detail_evaluation_th_4"></th>
           <th class="evaluation-panel-privacy-header" translate="privacy"></th>
           <th class="evaluation-panel-privacy-header" translate="form_service_type_option_gratuito"></th>
           <th class="evaluation-panel-privacy-header" translate="comfortable"></th>
           <th class="evaluation-panel-privacy-header" translate="panel_detail_evaluation_th_5"></th>
           <th class="evaluation-panel-age-header" translate="age"></th>
           <th class="evaluation-panel-genre-header" translate="genre"></th>
           <th class="evaluation-panel-vote-header" translate="puntuation"></th>
           <th class="evaluation-panel-comment-header" translate="commentary"></th>
           <th style="width:60px;"></th>
         </tr>
       </thead>
       <tbody>
        <tr ng-cloak ng-hide="loadingPost">
        <tr ng-cloak ng-hide="loadingPost" ng-repeat="evaluation in evaluationList | filter:searchText | filter:serviceFilter">
          <!--<img ng-show="place.condones" alt="Este lugar distribuye condones" src="images/iconos-new_preservativos-3.png">-->
          <td class="services2">
            <img ng-show="showCondonIcon('[[evaluation.service]]','condones')" alt="Este lugar distribuye condones" src="../../images/iconos-new_preservativos-3.png">
            <img ng-show="showCondonIcon('[[evaluation.service]]','prueba')" alt="Este lugar distribuye condones" src="../../images/iconos-new_analisis-3.png">
            <img ng-show="showCondonIcon('[[evaluation.service]]','mac')" alt="Servicios de Salud Sexual y Repoductiva" src="../../images/iconos-new_sssr-3.png">
            <img ng-show="showCondonIcon('[[evaluation.service]]','ile')" alt="Interrupción Legal del Embarazo" src="../../images/iconos-new_ile-3.png">
            <img ng-show="showCondonIcon('[[evaluation.service]]','cdi')" alt="" src="../../images/iconos-new_atencion-3.png">
            <img ng-show="showCondonIcon('[[evaluation.service]]','vacunatorios')" alt="" src="../../images/iconos-new_vacunacion-3.png">
            <img ng-show="showCondonIcon('[[evaluation.service]]','dc')" alt="" src="../../images/iconos-new_atencion-3.png">
            <img ng-show="showCondonIcon('[[evaluation.service]]','ssr')" alt="" src="../../images/iconos-new_vacunacion-3.png">
          </td>
          <td class="evaluation-panel-searched-body"><span ng-cloak ng-repeat="que_busca in evaluation.que_busca"><span translate="[[que_busca]]"></span>,</td>
          <td class="evaluation-panel-received-body"><span translate="[[evaluation.le_dieron]]"></span></td>
          <td class="evaluation-panel-info-body">[[evaluation.info_ok]]</td>
          <td class="evaluation-panel-privacy-body">[[evaluation.privacidad_ok]]</td>
          <td class="evaluation-panel-privacy-body">[[evaluation.es_gratuito]]</td>
          <td class="evaluation-panel-privacy-body">[[evaluation.comodo]]</td>
          <td class="evaluation-panel-privacy-body">[[evaluation.informacion_vacunas]]</td>
          <td class="evaluation-panel-age-body"><span translate="[[evaluation.edad]]"></span></td>
          <td class="evaluation-panel-genre-body"><span translate="[[evaluation.genero]]"></span></td>
          <td class="evaluation-panel-vote-body">
            <img ng-show="[[evaluation.voto]]" class="panel-evaluation-activos" alt="" src="../../images/emojis/[[evaluation.voto]]active.png">
          </td>
          <td class="evaluation-panel-comment-body">[[evaluation.comentario]]</td>


          <td class="actions">
            <a target="_self" ng-hide="evaluation.aprobado === 1" ng-click="voteYes(evaluation)" class="waves-effect waves-light btn-floating">
              <i class="mdi-action-done left"></i>
            </a>
            <a target="_self" ng-hide="evaluation.aprobado === 0" ng-click="voteNo(evaluation)" class="waves-effect waves-light btn-floating">
              <i class="mdi-av-not-interested left"></i>
            </a>
          </td>

        </tr>

      </tbody>
    </table>
  </div>
