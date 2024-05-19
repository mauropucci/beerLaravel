<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>








		<div id="main_site" class="container">
			<div id="page-contents">
				<div class="row">
					<div name="MessageBoard" id="MessageBoard" class="errors"></div>
						
					<div class="col-md-3">
						<h1 class="grey"><em class="ion-search icon-in-title" style="margin-right: 15px; color: #2b2e76;"></em>
							Cerca Birre
						</h1>
						<div class="line"></div>
						
						<form id="serchBeers" method="post" action="<?php echo e(route('postBeer')); ?>">
							<?php echo e(csrf_field()); ?>

							<input type="hidden" name="CurrentPage" id="CurrentPage" value="1" />
							<input type="hidden" name="IdCitta" id="IdCitta" value="<?php echo e($province); ?>" />
							<input type="hidden" name="IdMarca" id="IdMarca" value="<?php echo e($model); ?>" />
							<input type="hidden" name="IdRecords" id="IdRecords" value="<?php echo e($recordsPerPage); ?>" />
							
							
							
							<!--NON HO AVUTO TEMPO DI CREARE IL FORM CARICANDO LE COMBOBOX DA OGGETTI PHP PASSATI ALLA VIEW-->
							<div class="row">
								<div id="frm_IdCitta" class="form-group col-xs-12">
									<label for="IdCittaForm" class="sr-only"></label>
									<div id="sel_IdCitta">
										<select name="IdCittaForm" id="IdCittaForm" class="form-control">
											<option value="">Citt&agrave;</option>
											<option <?php if($province=="Arizona"): ?> selected <?php endif; ?> value="Arizona">Arizona</option>
											<option <?php if($province=="California"): ?> selected <?php endif; ?> value="California">California</option>
											<option <?php if($province=="Colorado"): ?> selected <?php endif; ?> value="Colorado">Colorado</option>
											<option <?php if($province=="Delaware"): ?> selected <?php endif; ?>  value="Delaware">Delaware</option>
											<option <?php if($province=="Idaho"): ?> selected <?php endif; ?> value="Idaho">Idaho</option>
											<option <?php if($province=="Iowa"): ?> selected <?php endif; ?> value="Iowa">Iowa</option>
											<option <?php if($province=="Illinois"): ?> selected <?php endif; ?> value="Illinois">Illinois</option>
											<option <?php if($province=="Indiana"): ?> selected <?php endif; ?> value="Indiana">Indiana</option>
											<option <?php if($province=="Laois"): ?> selected <?php endif; ?> value="Laois">Laois</option>
											<option <?php if($province=="Maryland"): ?> selected <?php endif; ?> value="Maryland">Maryland</option>
											<option <?php if($province=="Massachusetts"): ?> selected <?php endif; ?> value="Massachusetts">Massachusetts</option>
											<option <?php if($province=="Michigan"): ?> selected <?php endif; ?> value="Michigan">Michigan</option>
											<option <?php if($province=="New York"): ?> selected <?php endif; ?> value="New York">New York</option>
											<option <?php if($province=="North Carolina"): ?> selected <?php endif; ?> value="North Carolina">North Carolina</option>
											<option <?php if($province=="Minnesota"): ?> selected <?php endif; ?> value="Minnesota">Minnesota</option>
											<option <?php if($province=="Mississippi"): ?> selected <?php endif; ?> value="Mississippi">Mississippi</option>
											<option <?php if($province=="Nevada"): ?> selected <?php endif; ?> value="Nevada">Nevada</option>
											<option <?php if($province=="Ohio"): ?> selected <?php endif; ?> value="Ohio">Ohio</option>
											<option <?php if($province=="Oklahoma"): ?> selected <?php endif; ?> value="Oklahoma">Oklahoma</option>
											<option <?php if($province=="Oregon"): ?> selected <?php endif; ?> value="Oregon">Oregon</option>
											<option <?php if($province=="Pennsylvania"): ?> selected <?php endif; ?> value="Pennsylvania">Pennsylvania</option>
											<option <?php if($province=="South Carolina"): ?> selected <?php endif; ?> value="South Carolina">South Carolina</option>
											<option <?php if($province=="Texas"): ?> selected <?php endif; ?> value="Texas">Texas</option>
											<option <?php if($province=="Vermont"): ?> selected <?php endif; ?> value="Vermont">Vermont</option>
											<option <?php if($province=="Virginia"): ?> selected <?php endif; ?> value="Virginia">Virginia</option>
											<option <?php if($province=="Washington"): ?> selected <?php endif; ?> value="Washington">Washington</option>
											<option <?php if($province=="Wisconsin"): ?> selected <?php endif; ?> value="Wisconsin">Wisconsin</option>
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
											<option <?php if($model=="Barrel"): ?> selected <?php endif; ?> value="Barrel">Barrel</option>
											<option <?php if($model=="Brewing"): ?> selected <?php endif; ?> value="Brewing">Brewing</option>
											<option <?php if($model=="Brewery"): ?> selected <?php endif; ?> value="Brewery">Brewery</option>
											<option <?php if($model=="Cannon"): ?> selected <?php endif; ?>  value="Cannon">Cannon</option>
											<option <?php if($model=="Torr"): ?> selected <?php endif; ?>  value="Torr">Torr</option>
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
											<option <?php if($recordsPerPage=="9"): ?> selected <?php endif; ?> value="9">9</option>
											<option <?php if($recordsPerPage=="18"): ?> selected <?php endif; ?> value="18">18</option>
											<option <?php if($recordsPerPage=="45"): ?> selected <?php endif; ?> value="45">45</option>
											<option <?php if($recordsPerPage=="90"): ?> selected <?php endif; ?> value="90">90</option>
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
												<?php $__currentLoopData = $beerData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<li>
														<div>
															<div class="img-wrapper-model">
																<div class="img-wrapper-model-inner">
																	<a href="#"><img src="images/<?php echo e($data['name']); ?>.jpg" alt="photo" style="position:relative; max-width:250px" /></a>
																</div>
																<div class="wrapper-modelname"><?php echo e($data['name']); ?></div>
																<div class="wrapper-modelinfo">
																	<strong><?php echo e($data['city']); ?> - <?php echo e($data['state_province']); ?></strong><br/>
																	<div style="height:4px;"></div>
																	Birra <strong><?php echo e($data['brewery_type']); ?></strong><br/>
																	Paese <strong><?php echo e($data['country']); ?></strong><br/>
																	Cap <strong><?php echo e($data['postal_code']); ?></strong><br/>
																	Telefono <strong><?php echo e($data['phone']); ?></strong><br/>
																	Latitudine <strong><?php echo e($data['latitude']); ?></strong><br/>
																	Longitudine <strong><?php echo e($data['longitude']); ?></strong><br/>
																	Sito web <span style="cursor:pointer; text-decoration:underline;" onclick="LinkEsterno('<?php echo e($data['website_url']); ?>')">Vai al sito</span>
																</div>
															</div>
														</div>
													</li>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</ul>
										</div>
				
										
										<div align="right">
											<ul id="beerListPagination" class="pagination pagination-sm">
												<li class="page-item disabled">
													<span class="page-linklabel">Pagina: <?php echo e($currentPage); ?> di <?php echo e($numPages); ?></span>
												</li>
												<?php for($i = 1; $i <= $numPages; $i++): ?>
													<?php if($i==$currentPage): ?>
														<li class="page-item active">
															<span class="page-linkactive"><?php echo e($i); ?><span class="sr-only">(current)</span></span>
													<?php else: ?>
														<li class="page-item" onclick="setPagination('CurrentPage', <?php echo e($i); ?>);">
															<span class="page-link"><?php echo e($i); ?></span>
													<?php endif; ?>
													</li>
												<?php endfor; ?>
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
									<?php for($i = 0; $i < count($beerData); $i++): ?>
										<?php if($i < 3): ?>
											<li>
												<div>
													<div class="img-wrapper-model" style="width:152px !important;">
														<div class="img-wrapper-model-inner">
															<a href="#"><img src="images/<?php echo e($beerData[$i]['name']); ?>.jpg" alt="photo" style="position:relative; min-width:100px !important;" /></a>
														</div>
														<div class="wrapper-modelname" style="background-color:#F1F2F2; color:#6d6e71;"><?php echo e($beerData[$i]['name']); ?></div>
														<div class="wrapper-modelinfo" style="background-color:#F1F2F2; color:#6d6e71; padding-bottom:10px;">
															<strong><?php echo e($beerData[$i]['city']); ?> - <?php echo e($beerData[$i]['state_province']); ?></strong><br/>
															<div style="height:4px;"></div>
															Birra <strong><?php echo e($beerData[$i]['brewery_type']); ?></strong><br/>
															Paese <strong><?php echo e($beerData[$i]['country']); ?></strong><br/>
															Cap <strong><?php echo e($beerData[$i]['postal_code']); ?></strong><br/>
															Telefono <strong><?php echo e($beerData[$i]['phone']); ?></strong><br/>
															Latitudine <strong><?php echo e($beerData[$i]['latitude']); ?></strong><br/>
															Longitudine <strong><?php echo e($beerData[$i]['longitude']); ?></strong><br/>
															Sito web <span style="cursor:pointer; text-decoration:underline;" onclick="LinkEsterno('<?php echo e($beerData[$i]['website_url']); ?>')">Vai al sito</span>
														</div>
													</div>
												</div>
											</li>
										<?php endif; ?>
									<?php endfor; ?>
								</ul>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>







<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\Laravel\rest-api-crud\resources\views/home.blade.php ENDPATH**/ ?>