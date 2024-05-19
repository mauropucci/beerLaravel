@include('header')








		<div id="main_site" class="container">
			<div id="page-contents">
				<div class="row">
					<div name="MessageBoard" id="MessageBoard" class="errors"></div>
						
					<div class="col-md-3">
						<h1 class="grey"><em class="ion-search icon-in-title" style="margin-right: 15px; color: #2b2e76;"></em>
							Cerca Birre
						</h1>
						<div class="line"></div>
						
						<form id="serchBeers" method="post" action="{{ route('postBeer') }}">
							{{ csrf_field() }}
							<input type="hidden" name="CurrentPage" id="CurrentPage" value="1" />
							<input type="hidden" name="IdCitta" id="IdCitta" value="{{$province}}" />
							<input type="hidden" name="IdMarca" id="IdMarca" value="{{$model}}" />
							<input type="hidden" name="IdRecords" id="IdRecords" value="{{$recordsPerPage}}" />
							
							
							
							<!--NON HO AVUTO TEMPO DI CREARE IL FORM CARICANDO LE COMBOBOX DA OGGETTI PHP PASSATI ALLA VIEW-->
							<div class="row">
								<div id="frm_IdCitta" class="form-group col-xs-12">
									<label for="IdCittaForm" class="sr-only"></label>
									<div id="sel_IdCitta">
										<select name="IdCittaForm" id="IdCittaForm" class="form-control">
											<option value="">Citt&agrave;</option>
											<option @if($province=="Arizona") selected @endif value="Arizona">Arizona</option>
											<option @if($province=="California") selected @endif value="California">California</option>
											<option @if($province=="Colorado") selected @endif value="Colorado">Colorado</option>
											<option @if($province=="Delaware") selected @endif  value="Delaware">Delaware</option>
											<option @if($province=="Idaho") selected @endif value="Idaho">Idaho</option>
											<option @if($province=="Iowa") selected @endif value="Iowa">Iowa</option>
											<option @if($province=="Illinois") selected @endif value="Illinois">Illinois</option>
											<option @if($province=="Indiana") selected @endif value="Indiana">Indiana</option>
											<option @if($province=="Laois") selected @endif value="Laois">Laois</option>
											<option @if($province=="Maryland") selected @endif value="Maryland">Maryland</option>
											<option @if($province=="Massachusetts") selected @endif value="Massachusetts">Massachusetts</option>
											<option @if($province=="Michigan") selected @endif value="Michigan">Michigan</option>
											<option @if($province=="New York") selected @endif value="New York">New York</option>
											<option @if($province=="North Carolina") selected @endif value="North Carolina">North Carolina</option>
											<option @if($province=="Minnesota") selected @endif value="Minnesota">Minnesota</option>
											<option @if($province=="Mississippi") selected @endif value="Mississippi">Mississippi</option>
											<option @if($province=="Nevada") selected @endif value="Nevada">Nevada</option>
											<option @if($province=="Ohio") selected @endif value="Ohio">Ohio</option>
											<option @if($province=="Oklahoma") selected @endif value="Oklahoma">Oklahoma</option>
											<option @if($province=="Oregon") selected @endif value="Oregon">Oregon</option>
											<option @if($province=="Pennsylvania") selected @endif value="Pennsylvania">Pennsylvania</option>
											<option @if($province=="South Carolina") selected @endif value="South Carolina">South Carolina</option>
											<option @if($province=="Texas") selected @endif value="Texas">Texas</option>
											<option @if($province=="Vermont") selected @endif value="Vermont">Vermont</option>
											<option @if($province=="Virginia") selected @endif value="Virginia">Virginia</option>
											<option @if($province=="Washington") selected @endif value="Washington">Washington</option>
											<option @if($province=="Wisconsin") selected @endif value="Wisconsin">Wisconsin</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div id="frm_IdMarca" class="form-group col-xs-12">
									<label for="IdMarcaForm" class="sr-only"></label>
									<div id="sel_IdMarca">
										<select name="IdMarcaForm" id="IdMarcaForm" class="form-control">
											<option value="">Marca</option>
											<option @if($model=="Barrel") selected @endif value="Barrel">Barrel</option>
											<option @if($model=="Brewing") selected @endif value="Brewing">Brewing</option>
											<option @if($model=="Brewery") selected @endif value="Brewery">Brewery</option>
											<option @if($model=="Cannon") selected @endif  value="Cannon">Cannon</option>
											<option @if($model=="Torr") selected @endif  value="Torr">Torr</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div id="frm_IdRecords" class="form-group col-xs-12">
									<label for="IdRecordsForm" class="sr-only"></label>
									<div id="sel_IdRecords">
										<select name="IdRecordsForm" id="IdRecordsForm" class="form-control">
											<option value="9">Birre per pagina</option>
											<option @if($recordsPerPage=="9") selected @endif value="9">9</option>
											<option @if($recordsPerPage=="18") selected @endif value="18">18</option>
											<option @if($recordsPerPage=="45") selected @endif value="45">45</option>
											<option @if($recordsPerPage=="90") selected @endif value="90">90</option>
										</select>
									</div>
								</div>
							</div>
							<p align="right"><input type="button" class="btn btn-primary" value="Cerca" onclick="submitSearch();"/></p>
						</form>
					</div>
					
					
					<div class="col-md-7">
						<div class="edit-profile-container">
							<div class="edit-block">
								<div class="about-content-block">
									<div class="about-content-block">
										
										<div class="about-content-block" align="center">
											<h1 class="grey">Ultime news dal nostro sito</h1>
										</div>
							
										<div class="friend-list">
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<a href="#">
														<div class="timeline-cover3">
															<img src="images/Beers_Front_Page.png" alt="" class="img-responsive cover" />
														</div>
													</a>
													<div class="roundcard6 anncasting">
														<img src="images/logo.png" alt="Beers" class="roundcard6ImgW"/>
													</div>
													<div class="friend-info" style="margin-top:15px; margin-bottom:40px;">
														<span class="text-muted"><i class="icon ion-cash"></i> 
															Le nostre birre sempre fresche
														</span>
														<span style="float:right;"><span class="dataevento"><i class="icon ion-calendar"></i>16/05/2024 08:32</span></span>
														
												
														<div class="line-divider"></div>
													</div>
												</div>
					
											</div>
										</div>
				
				
										<h4 class="grey">
											Birre disponibili
										</h4>
										<div class="line"></div>
									
				
				
				
										<div class="row">
											<ul id="beer_list" class="album-photos">
												@foreach($beerData as $data)
													<li>
														<div>
															<div class="img-wrapper-model">
																<div class="img-wrapper-model-inner">
																	<a href="#"><img src="images/{{ $data['name'] }}.jpg" alt="photo" style="position:relative; max-width:250px" /></a>
																</div>
																<div class="wrapper-modelname">{{ $data['name'] }}</div>
																<div class="wrapper-modelinfo">
																	<strong>{{ $data['city'] }} - {{ $data['state_province'] }}</strong><br/>
																	<div style="height:4px;"></div>
																	Birra <strong>{{ $data['brewery_type'] }}</strong><br/>
																	Paese <strong>{{ $data['country'] }}</strong><br/>
																	Cap <strong>{{ $data['postal_code'] }}</strong><br/>
																	Telefono <strong>{{ $data['phone'] }}</strong><br/>
																	Latitudine <strong>{{ $data['latitude'] }}</strong><br/>
																	Longitudine <strong>{{ $data['longitude'] }}</strong><br/>
																	Sito web <span style="cursor:pointer; text-decoration:underline;" onclick="LinkEsterno('{{ $data['website_url'] }}')">Vai al sito</span>
																</div>
															</div>
														</div>
													</li>
												@endforeach
											</ul>
										</div>
				
										
										<div align="right">
											<ul id="beerListPagination" class="pagination pagination-sm">
												<li class="page-item disabled">
													<span class="page-linklabel">Pagina: {{ $currentPage }} di {{ $numPages }}</span>
												</li>
												@for ($i = 1; $i <= $numPages; $i++)
													@if($i==$currentPage)
														<li class="page-item active">
															<span class="page-linkactive">{{ $i }}<span class="sr-only">(current)</span></span>
													@else
														<li class="page-item" onclick="setPagination('CurrentPage', {{ $i }});">
															<span class="page-link">{{ $i }}</span>
													@endif
													</li>
												@endfor
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

						
					<div class="col-md-2">
						<div class="suggestions" id="sticky-sidebar">
							<h4 class="grey">Le pi&ugrave; bevute!</h4>
							<div class="row">
								<ul id="mostDrink" class="album-photos">
									@for ($i = 0; $i < count($beerData); $i++)
										@if($i < 3)
											<li>
												<div>
													<div class="img-wrapper-model" style="width:152px !important;">
														<div class="img-wrapper-model-inner">
															<a href="#"><img src="images/{{ $beerData[$i]['name'] }}.jpg" alt="photo" style="position:relative; min-width:100px !important;" /></a>
														</div>
														<div class="wrapper-modelname" style="background-color:#F1F2F2; color:#6d6e71;">{{ $beerData[$i]['name'] }}</div>
														<div class="wrapper-modelinfo" style="background-color:#F1F2F2; color:#6d6e71; padding-bottom:10px;">
															<strong>{{ $beerData[$i]['city'] }} - {{ $beerData[$i]['state_province'] }}</strong><br/>
															<div style="height:4px;"></div>
															Birra <strong>{{ $beerData[$i]['brewery_type'] }}</strong><br/>
															Paese <strong>{{ $beerData[$i]['country'] }}</strong><br/>
															Cap <strong>{{$beerData[$i]['postal_code'] }}</strong><br/>
															Telefono <strong>{{ $beerData[$i]['phone'] }}</strong><br/>
															Latitudine <strong>{{ $beerData[$i]['latitude'] }}</strong><br/>
															Longitudine <strong>{{ $beerData[$i]['longitude'] }}</strong><br/>
															Sito web <span style="cursor:pointer; text-decoration:underline;" onclick="LinkEsterno('{{ $beerData[$i]['website_url'] }}')">Vai al sito</span>
														</div>
													</div>
												</div>
											</li>
										@endif
									@endfor
								</ul>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>







@include('footer')