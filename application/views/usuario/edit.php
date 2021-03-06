<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->

<html class="no-js">

    <body>
        <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- .page-navbar -->
        <?php $this->load->view("layout/_navbar"); ?>
        <!-- / page-navbar -->
        <!-- #wrapper -->




        <div id="wrapper">
            <!-- .page-sidebar -->
            <aside id="sidebar" class="page-sidebar hidden-md hidden-sm hidden-xs">
                <!-- Start .sidebar-inner -->
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
                        <!--  .sidebar-panel -->
                        <?php $this->load->view("layout/_profile_left_sidebar"); ?>
                      
                        <!-- .side-nav -->
                        <div class="side-nav">
                            <ul class="nav">
                                <?php $this->load->view("layout/_lis_do_menu_left"); ?>
                            </ul>
                        </div>
                        <!-- / side-nav -->
                        <!--  .sidebar-panel -->
                        <?php $this->load->view("layout/_menu_inferior_left"); ?>
                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
            </aside>
            <!-- / page-sidebar -->
            <!-- Start #right-sidebar -->

            <!-- End #right-sidebar -->
            <!-- .page-content -->
            <?php $this->load->view("layout/topoTitulo"); ?>

            <?php // $this->load->view("layout/quadrados"); ?>
            <!-- / .row -->
            <!-- Minha pagina -->
            <?php if ($this->session->set_flashdata('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Aten????o!</strong> <?php echo $message ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>


            <form class="form-horizontal" method="post" name="form_edit">
                <fieldset>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Editar Usu??rio</div>
                        <input name="usuario_id" value = "<?php echo $usuario->id; ?>" type="hidden">

                        <div class="panel-body">
                             <div class="form-group">
                                <label class="col-md-2 control-label" for="Nome">Login:</label>  
                                <div class="col-md-8">
                                    <input name="username" disabled value = "<?php echo $usuario->first_name; ?>"  class="form-control input-md" type="text">
                                    <?php echo form_error('username', '<span asp-validation-for="username" class="text-danger">', '</span>') ?>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Nome">Nome:</label>  
                                <div class="col-md-8">
                                    <input name="username" value = "<?php echo $usuario->username; ?>"  class="form-control input-md" type="text">
                                    <?php echo form_error('username', '<span asp-validation-for="username" class="text-danger">', '</span>') ?>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="cpf">CPF:</label>  
                                <div class="col-md-3">
                                    <input id="cpf" name="cpf" value="<?php echo $usuario->cpf ?>" placeholder="Apenas n??meros" class="form-control input-md cpf" type="text" maxlength="15"">
                                    <?php echo form_error('cpf', '<span asp-validation-for="cpf" class="text-danger">', '</span>') ?>
                                </div>
                                <label class="col-md-2 control-label" for="Matricula">Matricula:</label>  
                                <div class="col-md-3">
                                    <input id="cpf" name="matricula" value="<?php echo $usuario->matricula ?>" placeholder="Apenas n??meros" class="form-control input-md" type="text" maxlength="11" pattern="[0-9]+$">
                                    <?php echo form_error('matricula', '<span asp-validation-for="matricula" class="text-danger">', '</span>') ?>
                                </div>
                                <!-- Multiple Radios (inline) -->                                          
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Matricula">Matricula Tim:</label>  
                                <div class="col-md-3">
                                    <input id="matriculatim" name="matriculatim" value="<?php echo $usuario->matriculatim; ?>" class="form-control input-md" type="text">
                                    <?php echo form_error('matriculatim', '<span asp-validation-for="matriculatim" class="text-danger">', '</span>') ?>
                                </div>
                                <label class="col-md-2 control-label" for="cm_cmId">Cm:</label>
                                <div class="col-md-4">
                                    <select required name="cm_cmId" class="form-control">  
                                        <option value="<?php echo $cmselect->idcm ?>" ><?php echo $cmselect->nomecm ?></option>
                                        <?php foreach ($cms as $cm) : ?>
                                            <option value="<?php echo $cm->idcm ?>" ><?php echo $cm->nomecm ?></option>                                  
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('cm', '<span asp-validation-for="cm" class="text-danger">', '</span>') ?>
                                </div>
                            </div>

                            <!-- Prepended text-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Telefone">Telefone</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input id="prependedtext" value="<?php echo $usuario->phone ?>" name="phone" class="form-control phone_with_ddd" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                               OnKeyPress="formatar('## #####-####', this)">                                                          
                                    </div>
                                    <?php echo form_error('phone', '<span asp-validation-for="phone" class="text-danger">', '</span>') ?>
                                </div>                        
                            </div> 

                            <!-- Prepended text-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Email">Email</label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="prependedtext" name="email" value="<?php echo $usuario->email; ?>" class="form-control" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >                                                    
                                    </div>
                                    <?php echo form_error('email', '<span asp-validation-for="email" class="text-danger">', '</span>') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Usuario ativo">Usu??rio ativo?</label>
                                <div class="col-md-2">
                                    <select required name="active" class="form-control">          
                                        <option value="1" <?php echo $usuario->active == 1 ? 'selected' : ''; ?> >N??O</option>
                                        <option value="2" <?php echo $usuario->active == 2 ? 'selected' : ''; ?> >SIM</option>
                                        <option value="0" <?php echo $usuario->active == 0 ? 'selected' : ''; ?> >Desligado</option>
                                    </select>
                                    <?php echo form_error('active', '<span asp-validation-for="active" class="text-danger">', '</span>') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Perfil do usuario">Perfil do usu??rio </label>
                                <div class="col-md-2">
                                    <select name="perfil_usuario" class="form-control">  
                                        <option value="<?php echo $perfil_usuario->id; ?>"><?php echo $perfil_usuario->description ?></option>
                                        <?php if ($perfil_usuario_logado->id == 1) : ?>
                                            <option value="1" <?php echo $perfil_usuario->id == 1 ? 'selected' : ''; ?> >Administrador</option>
                                        <?php endif; ?>
                                        <?php if ($perfil_usuario_logado->id == 4 || $perfil_usuario_logado->id == 1) : ?>
                                            <option value="4" <?php echo $perfil_usuario->id == 4 ? 'selected' : ''; ?> >Lider de Equipe</option>                                     
                                            <option value="2" <?php echo $perfil_usuario->id == 2 ? 'selected' : ''; ?> >Coordenador</option>
                                            <option value="3" <?php echo $perfil_usuario->id == 3 ? 'selected' : ''; ?> >BackOffice</option>
                                            <option value="5" <?php echo $perfil_usuario->id == 5 ? 'selected' : ''; ?> >T??cnico</option>
                                        <?php endif; ?>

                                    </select>
                                    <?php echo form_error('perfil_usuario', '<span asp-validation-for="perfil_usuario" class="text-danger">', '</span>') ?>
                                </div>
                            </div>
                            <div class="panel-body">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="Senha">Senha <h11>*</h11></label>  
                                    <div class="col-md-3">
                                        <input name="password" value = ""   class="form-control input-md" type="password">
                                        <?php echo form_error('password', '<span asp-validation-for="password" class="text-danger">', '</span>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="Confirmar Senha">Confirmar senha <h11>*</h11></label>  
                                    <div class="col-md-3">
                                        <input name="confirm_password" value = ""  class="form-control input-md" type="password">
                                        <?php echo form_error('confirm_password', '<span asp-validation-for="confirm_password" class="text-danger">', '</span>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Atualizar"></label>
                                <div class="col-md-8">
                                    <button class="btn btn-success" type="Submit">Atualizar</button>
                                    <a href="<?php echo base_url('listarUsuarios') ?>" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </fieldset>
            </form>

            <br></br>



            <!-- FIM Minha pagina -->


            <!-- End .row -->
        </div>
        <!-- / .page-content-inner -->
    </div>
    <!-- / page-content-wrapper -->
</div>
<!-- / page-content -->
</div>
</div>
</div>
<!-- / #wrapper -->
<?php $this->load->view("layout/_footer"); ?>
<!-- End #footer  -->
<!-- Back to top -->
<div id="back-to-top"><a href="#">Back to Top</a>
</div>
<!-- Javascripts -->
<!-- Load pace first -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="form-horizontal" method="POST" name="form_edit">
                <fieldset>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Cadastro de Cliente</div>

                        <div class="panel-body">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
                                <div class="col-md-8">
                                    <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
                                <div class="col-md-3">
                                    <input id="cpf" name="cpf" placeholder="Apenas n??meros" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                                </div>

                                <!--                                <label class="col-md-2 control-label" for="Nome">Nascimento<h11>*</h11></label> 
                                                                <div class="col-md-4">
                                                                    <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                                                </div>-->
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                               OnKeyPress="formatar('## #####-####', this)">
                                    </div>
                                </div>

                                <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                               OnKeyPress="formatar('## #####-####', this)">
                                    </div>
                                </div>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>