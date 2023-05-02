</div>

        <?php
        $exibir_rodape = false;
        ?>
        <?php
        if ( $exibir_rodape ):
        ?>
        <!--Footer-->
        <footer style="padding:2% 0; width: 100%; background:#FFF; text-align:center; border-top: 1px solid #e6ebf1; box-shadow: 16px 0px 16px rgba(24, 23, 38, 0.06)">
            CRF/MG 
            <br>
            <small>
            Gerencia de Tecnologia da Informação - <?=date('Y')?>
            </small>
        </footer>
        <!-- End Footer-->
        <?php
        endif;
        ?>

    </div>
    <!-- End Page -->

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

    <!-- Jquery js-->
    <script src="<?=base_url()?>assets/template/js/jquery.min.js"></script>

    <!-- Bootstrap5 js-->
    <script src="<?=base_url()?>assets/template/plugins/bootstrap/popper.min.js"></script>
    <script src="<?=base_url()?>assets/template/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--Horizontal-menu js-->
    <script src="<?=base_url()?>assets/template/plugins/horizontal-menu/horizontal-menu.js"></script>

    <!-- P-scroll js-->
    <script src="<?=base_url()?>assets/template/plugins/p-scrollbar/p-scrollbar.js"></script>
    <script src="<?=base_url()?>assets/template/plugins/p-scrollbar/p-scroll.js"></script>

    <!-- Custom js-->
    <script src="<?=base_url()?>assets/template/js/custom.js"></script>

	</body>
</html>