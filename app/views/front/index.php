<?php $this->load->view('inc/_head', array('TITLE' => SITE_NAME)); ?>

<body>
	<div id="wrapper">
		<?php $this->load->view('inc/header'); ?>

		<div class="bg-body">
			<div class="container">
				<p class="text-center">
					この春、改訂となる中学生用通年教材の主なテキストを、動画にて解説しております。<br>
					教科別に準拠版・教科別に分けて全10本をご用意しております。<br>
					１つの動画の中で３から５種類の教材を解説していますので是非ご覧下さい。
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

		<?php $this->load->view('inc/_foot'); ?>
		<?php $this->load->view('inc/footer'); ?>
	</div> <!-- end of #wrapper -->
</body>
</html>
