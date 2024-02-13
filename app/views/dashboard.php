<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>WorkEase - Sistema de gestão</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="public/assets/vendors/images/favicon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="public/assets/vendors/images/favicon.png">
	<link rel="icon" type="image/png" sizes="16x16" href="public/assets/vendors/images/favicon.png">

	<link rel="stylesheet" type="text/css" href="public/assets/assets/css/styles.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">


  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="public/assets/css/adminlte.css">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="public/assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="public/assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="public/assets/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="public/assets/vendors/images/favicon.png" alt="">
				<h1>WorkEase</h1></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>
		<div class="header-right">
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>Nunhuma notificação encontrada!</li>
								<!--<li>
									<a href="#">
										<img src="public/assets/vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="public/assets/img/avatars/myphoto.png" alt="">
						</span>
						<span class="user-name"><?= isset($userName) ? htmlspecialchars($userName) : 'Usuário'; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Perfil</a>
						<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i> Configurações</a>
						<a class="dropdown-item" href="#"><i class="dw dw-help"></i> Ajuda</a>
						<a class="dropdown-item" href="/logout"><i class="dw dw-logout"></i> Sair</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="/">
					<h3>WorkEase</h3>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="/dashboard" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">

			<div class="title pb-20">
				<h2 class="h3 mb-0">Olá <?= isset($userName) ? htmlspecialchars($userName) : 'Usuário'; ?>, Bem-vindo(a)!</h2>
			</div>

			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Tabela de Registro de chaves</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<a class="btn btn-app bg-success" id="openModalBtn" data-toggle="modal" data-target="#myModal">
            <i class="fas fa-plus"></i> Novo registro
          </a>
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nº Sala(S)</th>
								<th>Status</th>
								<th>Nome</th>
								<th>Cargo</th>
								<th>Data de abertura</th>
								<th>Observação</th>
								<th>Data de fechamento</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
                  <?php foreach ($registros as $registro): ?>
                        <tr>
                            <td><?php echo $registro['numero_sala']; ?></td>
														<?php if ($registro['status'] == "Aberto"): ?>
                            	<td class="btn-outline-success"><?php echo $registro['status']; ?></td>
														<?php endif; ?>
														<?php if ($registro['status'] == "Finalizado"): ?>
                            	<td class="btn-outline-danger"><?php echo $registro['status']; ?></td>
														<?php endif; ?>
                            <td><?php echo $registro['nome_pessoa']; ?></td>
                            <td><?php echo $registro['cargo']; ?></td>
                            <td class="btn-outline-success"><?php echo $registro['data_abertura']; ?></td>
                            <td><?php echo $registro['observacoes']; ?></td>
                            <td class="btn-outline-danger"><?php echo $registro['data_fechamento']; ?></td>
                            <td> <!-- Adiciona os botões de ação aqui -->
                              <div style="display:inline-flex" class="widget-content-right">
                                  <?php if ($registro['status'] == "Aberto"): ?>
                                    <a data-toggle="modal" data-target="#atualizaModal">
                                          <button style="margin-right:10px" class="border-0 btn-transition btn btn-outline-success">
                                              <i class="fa fa-check"></i> Finalizar
                                          </button>
                                      </a>
																			<!-- Modal de Confirmação -->
																			<div class="modal fade" id="atualizaModal">
																					<div class="modal-dialog">
																							<div class="modal-content">
																									<div class="modal-header">
																											<h2>Confirmação</h2>
																											<button type="button" class="close" data-dismiss="modal">&times;</button>
																									</div>
																									<div class="modal-body">
																										<p>Tem certeza de que deseja Atualizar o status deste registro?</p>
																										<div class="modal-buttons">
																										<form style="background-color: transparent;padding: 0px;border: 0px;border-radius: 0px;margin-bottom: 10px;" action="/dashboard/finalizar-registro" method="post" id="delete-form">
																												<input type="hidden" name="id_registro" value="<?php echo $registro['id_registro']; ?>">
																												<button type="submit" id="confirmUpdate" class="btn btn-danger">Confirmar</button>
																										</form>
																											<button id="cancelDelete" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
																										</div>
																									</div>
																							</div>
																					</div>
																			</div>
                                  <?php endif; ?>
																	<form style="background-color: transparent;padding: 0px;border: 0px;border-radius: 0px;" action="/dashboard/delete" method="post" id="delete-form">
																			<input type="hidden" name="id_registro" value="<?php echo $registro['id_registro']; ?>">
																			<button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza de que deseja excluir este registro?');">
																				<i class="fa fa-trash-alt"></i> Deletar
																			</button>
																	</form>
                              </div>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->

		</div>
	</div>

	<script src="https://kit.fontawesome.com/923efe6933.js" crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script src="public/assets/plugins/jquery/jquery.min.js"></script>
	<!-- DataTables  & Plugins -->
	<script src="public/assets/plugins/datatables/jquery.dataTables.js"></script>
	<script src="public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="public/assets/plugins/jszip/jszip.min.js"></script>
	<script src="public/assets/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="public/assets/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="public/assets/plugins/datatables-buttons/js/buttons.html5.js"></script>
	<script src="public/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="public/assets/plugins/datatables-buttons/js/buttons.colVis.js"></script>

	<script>
		// Destruir DataTable existente, se houver
if ($.fn.DataTable.isDataTable('#example1')) {
    $('#example1').DataTable().destroy();
}

// Inicializar DataTable novamente
$('#example1').DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

	</script>


	<!-- js -->
	<script src="public/assets/vendors/scripts/core.js"></script>
	<script src="public/assets/vendors/scripts/script.min.js"></script>
	<script src="public/assets/vendors/scripts/process.js"></script>
	<script src="public/assets/vendors/scripts/layout-settings.js"></script>
</body>
</html>


<!-- Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar de chave(s)</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="salaForm" action="/dashboard" method="post">
                    <div class="form-group">
                        <label for="nome">Nome da Pessoa:</label>
                        <input type="text" class="form-control" autocomplete="off" name="nome_pessoa" id="autocompleteNome" required>
                        <div id="autocompleteList"></div>
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo:</label>
                        <select class="form-control" name="cargo" required>
                            <option value="" disabled selected>Selecione o cargo</option>
                            <option value="Professor">Professor</option>
                            <option value="Estagiário">Estagiário</option>
                            <option value="Funcionário">Funcionário</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numeros">Número da Sala:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="numero_sala" id="numeroSala" required>
                            <div class="input-group-append">
                                <span class="input-group-text bg-light" id="clearNumeroSala" style="display: none;">
                                    <i class="fas fa-times"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observacoes">Observações:</label>
                        <textarea class="form-control" name="observacoes"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>