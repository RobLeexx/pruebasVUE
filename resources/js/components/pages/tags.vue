<template>
	<div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_one">
							<div class="_1adminOverveiw_card_left">
								<p class="_1adminOverveiw_card_left_num">Art No.12 DOCUMENTOS A PRESENTAR POR EL PROPIETARIO DEL PERRO PELIGROSO</p>

								<p class="_1adminOverveiw_card_left_title">Listado de Requisitos</p>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper" />
							</div>
						</div>
					</div>
				</div>

				<div class="col-12">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<ul class="checkboxRequisitos">
									<input class="checkboxMargin" type="checkbox" value="java" id="memorial"> 
									<p class="_1adminOverveiw_card_left_num">1. Memorial</p>
								</ul>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper-outline" />
							</div>
						</div>
				</div>
				<div class="col-12">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<ul class="checkboxRequisitos">
									<input class="checkboxMargin" type="checkbox" value="java" id="memorial"> 
									<p class="_1adminOverveiw_card_left_num">2. Documento de identidad</p>
								</ul>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper-outline" />
							</div>
						</div>
				</div>
				<div class="col-12">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<ul class="checkboxRequisitos">
									<input class="checkboxMargin" type="checkbox" value="java" id="memorial"> 
									<p class="_1adminOverveiw_card_left_num">3. Antecedentes</p>
								</ul>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper-outline" />
							</div>
						</div>
				</div>
				<div class="col-12">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<ul class="checkboxRequisitos">
									<input class="checkboxMargin" type="checkbox" value="java" id="memorial"> 
									<p class="_1adminOverveiw_card_left_num">4. Seguro Oblitario de Responsabilidad Civil</p>
								</ul>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper-outline" />
							</div>
						</div>
				</div>
				<div class="col-12">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<ul class="checkboxRequisitos">
									<input class="checkboxMargin" type="checkbox" value="java" id="memorial">
									<p class="_1adminOverveiw_card_left_num">5. Estado de salud del can</p>
								</ul>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper-outline" />
							</div>
						</div>
				</div>
				<div class="col-12">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<ul class="checkboxRequisitos">
									<input class="checkboxMargin" type="checkbox" value="java" id="memorial">
									<p class="_1adminOverveiw_card_left_num">6. Domicilio</p>
								</ul>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper-outline" />
							</div>
						</div>
				</div>

			</div>
		</div>
	</div>
</template>

<template>
  <v-container fluid>
    <v-expansion-panels>
      <v-expansion-panel
        v-for="(item,i) in 5"
        :key="i"
      >
        <v-expansion-panel-header>Item</v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>

    <v-expansion-panels accordion>
      <v-expansion-panel
        v-for="(item,i) in 5"
        :key="i"
      >
        <v-expansion-panel-header>Item</v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
  </v-container>
</template>