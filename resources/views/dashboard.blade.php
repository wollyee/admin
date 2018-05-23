@include('includes.header')       

<style>
	.navtop{color:#038672;}
	.navtop:hover{color:#055044;}
</style>

<div class="columns" style="font-weight:100;">
  
    @include('includes.sidebar')

    <div class="column" style="text-align:center; padding-left:0px;">

    	@include('includes.navtop')

		<div class="tile is-ancestor" style="text-align:center; height:200px;">
			<div class="tile is-vertical is-12">
			    <div class="tile">
			      	<div class="tile is-parent is-vertical">
			        	<article class="tile is-child notification" style="background:#d2e6e3; border-radius:0px;">
			          		<p class="title is-2">Dashboard</p>
			          		<p class="subtitle">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.</p>
			        	</article>
			      	</div>
			    </div>
			</div>
		</div>

		<div class="column is-11" style="width:98%; height:auto; background:#FFF; margin:0 auto; margin-top:-80px; z-index:99999; position:relative;">

			<div class="columns">
				<div class="column" style="text-align:left;">
				    <div class="notification is-link" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-street-view" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">1033</span><br />
				    		<span style="font-weight:100!important;">Pedidos realizados</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
				    <div class="notification is-link" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-gear" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">320</span><br />
				    		<span style="font-weight:100!important;">Impressas</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
				    <div class="notification is-primary" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-users" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">159</span><br />
				    		<span style="font-weight:100!important;">Recebidas</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
				    <div class="notification is-danger" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-list-alt" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">26</span><br />
				    		<span style="font-weight:100!important;">Não impressa</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
			</div>

			<hr />

			<div class="columns" style="text-align:left;">
				
				<div class="column">
		          	<p class="subtitle" style="font-weight:100;">Últimos pedidos</p>
		          	<table class="table" style="width:100%;">
					  <thead>
					    <tr>
					      <th>Data</th>
					      <th>Tipo</th>
					      <th>UF</th>
					      <th>Cidade</th>
					      <th style="text-align:center;">Ações</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th>23/05/2018</th>
					      <td>Nascimento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>22/05/2018</th>
					      <td>Casamento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>21/05/2018</th>
					      <td>Óbito</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>20/05/2018</th>
					      <td>Casamento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>19/05/2018</th>
					      <td>Nascimento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>18/05/2018</th>
					      <td>Óbito</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>17/05/2018</th>
					      <td>Óbito</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>					    
					  </tbody>
					</table>
				</div>

				<div class="column">
					<div class="chart-container">
						<canvas id="canvas"></canvas>
					</div>
				</div>
				
			</div>

			<hr />

		</div>


    </div>


</div>

<!-- FIM SIDEBAR -->

@include('includes.footer')  
