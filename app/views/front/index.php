<?php $this->load->view('inc/_head', array('TITLE' => SITE_NAME)); ?>

<body>
	<div id="wrapper">
		<?php $this->load->view('inc/header'); ?>

		<div class="bg-body">
			<div class="container">
				<p class="text-center">
					中学生用通年教材うち、この春、改訂となる主な教材を、動画にて解説しております。<br>
					教科書準拠版と標準版に分け、それぞれ教科別の全10本をご用意しています。<br>
					１つの動画のなかで、最大６種類の教材を紹介しています。<br>
					2021年度中学生用通年教材の選定に向けて、是非ご覧ください。
				</p>
				<p class="text-center">
					下の「中学生　準拠版」「中学生　標準版」のタブをクリックすると、<br>
					準拠版と標準版の切り替えができます。
				</p>

				<div class="tab-wrap">
					<input id="TAB-01" type="radio" name="TAB" class="tab-switch" checked="checked">
					<label class="tab-label" for="TAB-01">中学生　準拠版</label>
					<div class="tab-content">
						<?php $this->load->view('front/content1'); ?>
					</div>

					<input id="TAB-02" type="radio" name="TAB" class="tab-switch">
					<label class="tab-label" for="TAB-02">中学生　標準版</label>
					<div class="tab-content">
						<?php $this->load->view('front/content2'); ?>
					</div>
				</div> <!-- end of .tab-wrap -->
			</div> <!-- end of container -->
		</div> <!-- end of .bg-body -->

		<?php $this->load->view('inc/footer'); ?>
	</div> <!-- end of #wrapper -->

	<?php $this->load->view('inc/_foot'); ?>
</body>
</html>
