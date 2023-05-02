<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Painel de senhas - CRFMG" name="description">
		<meta content="Lucas Alcantara - TI CRFMG" name="author">

		<!-- Title -->
		<title>Painel de Senhas - CRFMG</title>

		<!--Favicon -->
		<link rel="icon" href="<?=base_url()?>assets/template/images/brand/favicon.ico" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link href="<?=base_url()?>assets/template/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Style css -->
		<link href="<?=base_url()?>assets/template/css/style.css" rel="stylesheet" />
		<link href="<?=base_url()?>assets/template/css/dark.css" rel="stylesheet" />
		<link href="<?=base_url()?>assets/template/css/skin-modes.css" rel="stylesheet" />

		<!-- Animate css -->
		<link href="<?=base_url()?>assets/template/css/animated.css" rel="stylesheet" />

		<!-- P-scroll bar css-->
		<link href="<?=base_url()?>assets/template/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!---Icons css-->
		<link href="<?=base_url()?>assets/template/css/icons.css" rel="stylesheet" />

	    <!-- Color Skin css -->
		<link id="theme" href="<?=base_url()?>assets/template/colors/color1.css" rel="stylesheet" type="text/css"/>

	</head>

	<body class="app">
        <?php
        $exibir_menu =false;
        $exibir_cabecalho = false;
        ?>
		<!-- Page -->
		<div class="page">
			<div class="page-main">
                <?php
                if ( $exibir_cabecalho ):
                ?>
				<!--app header-->
				<div class="hor-header header top-header">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="index.html">
								<img src="<?=base_url()?>assets/template/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Azea logo">
								<img src="<?=base_url()?>assets/template/images/brand/logo1.png" class="header-brand-img dark-logo" alt="Azea logo">
								<img src="<?=base_url()?>assets/template/images/brand/favicon.png" class="header-brand-img mobile-logo" alt="Azea logo">
								<img src="<?=base_url()?>assets/template/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Azea logo">
							</a>
							
                            <?php
                            if ( $exibir_menu ):
                            ?>
							<div class="d-flex order-lg-2 ms-auto main-header-end">
								<button  class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="true" aria-label="Toggle navigation">
									<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
								</button>
								<div class="navbar navbar-expand-lg navbar-collapse responsive-navbar p-0">
									<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
										<div class="d-flex order-lg-2">

                                            <div class="dropdown profile-dropdown d-flex">
												<a href="javascript:void(0);" class="nav-link pe-0 leading-none" data-bs-toggle="dropdown">
													<span class="header-avatar1">
														<img src="<?=base_url()?>assets/template/images/users/2.jpg" alt="img" class="avatar avatar-md brround">
													</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
													<div class="text-center">
														<div class="text-center user pb-0 font-weight-bold">Patrenna</div>
														<span class="text-center user-semi-title">Web Designer</span>
														<div class="dropdown-divider"></div>
													</div>
													<a class="dropdown-item d-flex" href="login-1.html">
														<svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
														<div class="fs-13">Sair</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <?php
                            endif;
                            ?>
						</div>
					</div>
				</div>
				<!--/app header-->
                <?php
                endif;
                ?>

                <?php
                if ( $exibir_menu ):
                ?>
				<!--/Horizontal-main -->
				<div class="sticky">
					<div class="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper container clearfix">
							<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true">
										<a href="index.html" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
											Dashboard
										</a>
									</li>
                                    <li aria-haspopup="true">
										<a href="index.html" class="sub-icon">
											<svg class="hor-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
											Vídeo TV
										</a>
									</li>
								</ul>
							</nav>
							<!--Nav-->
						</div>
					</div>
				</div>
				<!--/Horizontal-main -->
                <?php
                endif;
                ?>

		

			