<?=heading($title, 2);?>
<?php // Change the css classes to suit your needs   

$attributes = array('class' => '', 'id' => '');
echo form_open('clientes/ingresar', $attributes); ?>

      
        <fieldset><legend><b>Ingreso de Datos</b></legend>
            <p>
            <label for="nombres">Nombre:<span class="required">*</span></label>
            </br><?php echo form_error('nombres'); ?>
            <input type="text" size="30" name="nombres" id="nombres" value="<?php echo set_value('nombres') ?>" placeholder="Nombre"/>
            </p>
            <p>
            <label for="apellidos">Nombre:<span class="required">*</span></label>
            </br><?php echo form_error('apellidos'); ?>
            <input type="text" size="30" name="apellidos" id="apellidos" value="<?php echo set_value('apellidos') ?>" placeholder="Apellidos"/>
            </p>
            <p>
            <label for="email">E_mail:<span class="required">*</span></label>
            </br><?php echo form_error('email'); ?>
            <input type="text" size="30" name="email" id="apellidos" value="<?php echo set_value('email') ?>" placeholder="E_mail"/>
            </p>
            <label for="direccion">Dirección: <span class="required">*</span></label>
            <?php echo form_error('direccion'); ?>
            <br />
            <?php echo form_textarea( array( 'name' => 'direccion', 'rows' => '5', 'cols' => '40', 'value' => set_value('direccion') ) )?>
            </p>
            <p>
            <label for="grado">Grado Académico:<span class="required">*</span></label>
            <?php echo form_error('grado'); ?>

            <?php // Change the values in this array to populate your dropdown as required ?>

            </br>
            <?php $options = array(
                                                      ''                  => '- Seleccione una opcion -',
                                                      'Estudiante'         => 'Estudiantea',
                                                      'Bachiller'           => 'Bachiller',
                                                      'Ingeniero'             => 'Ingeniero'
                                                    ); ?>

            <?php echo form_dropdown('grado', $options, set_value('grado'))?>
            </p>
            <p>
            <label for="telefono">Telefono:<span class="required">*</span></label>
            </br><?php echo form_error('telefono'); ?>
            <input type="text" size="30" name="telefono" id="telefono" value="<?php echo set_value('telefono') ?>" placeholder="Teléfono"/>
            </p>
            <p>
            <label for="tipocliente">Tipo de Cliente:<span class="required">*</span></label>
            <?php echo form_error('tipocliente'); ?>

            <?php // Change the values in this array to populate your dropdown as required ?>

            </br>
            <?php $options = array(
                                                      ''                  => '- Seleccione una opcion -',
                                                      'Cajamarca'         => 'Cajamarca',
                                                      'Huanuco'           => 'Huanuco',
                                                      'Piura'             => 'Piura'
                                                    ); ?>

            <?php echo form_dropdown('tipocliente', $options, set_value('tipocliente'))?>
            </p>
            
            
	</fieldset>

<p>
        <?php echo form_submit( 'submit', 'Guardar'); ?>
</p>

<?php echo form_close(); ?>

