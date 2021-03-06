<?php
	global $doyle_options;
	$fullwidth = isset($doyle_options['titlebar_fullwidth'])&&$doyle_options['titlebar_fullwidth'] ? 'fullwidth': 'container';
?>
<div class="bt-titlebar bt-titlebar-v2">
	<div class="bt-titlebar-inner">
		<div class="bt-overlay"></div>
		<div class="bt-subheader">
			<div class="bt-subheader-inner <?php echo esc_attr($fullwidth); ?>">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<div class="bt-page-title">
							<?php
								if(isset($doyle_options['titlebar_page_title_before'])&&$doyle_options['titlebar_page_title_before']&&isset($doyle_options['titlebar_page_title_before_content'])&&$doyle_options['titlebar_page_title_before_content']){
									echo '<div class="bt-before">'.$doyle_options['titlebar_page_title_before_content'].'</div>';
								}
							?>
							<h2><?php echo doyle_page_title(); ?></h2>
							<?php
								if(isset($doyle_options['titlebar_page_title_after'])&&$doyle_options['titlebar_page_title_after']&&isset($doyle_options['titlebar_page_title_after_content'])&&$doyle_options['titlebar_page_title_after_content']){
									echo '<div class="bt-after">'.$doyle_options['titlebar_page_title_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<div class="bt-breadcrumb">
							<?php
								if(isset($doyle_options['titlebar_breadcrumb_before'])&&$doyle_options['titlebar_breadcrumb_before']&&isset($doyle_options['titlebar_breadcrumb_before_content'])&&$doyle_options['titlebar_breadcrumb_before_content']){
									echo '<div class="bt-before">'.$doyle_options['titlebar_breadcrumb_before_content'].'</div>';
								}
							?>
							<div class="bt-path">
								<?php
									$home_text = (isset($doyle_options['titlebar_breadcrumb_home_text'])&&$doyle_options['titlebar_breadcrumb_home_text'])?$doyle_options['titlebar_breadcrumb_home_text']: 'Home';
									$delimiter = (isset($doyle_options['titlebar_breadcrumb_delimiter'])&&$doyle_options['titlebar_breadcrumb_delimiter'])?$doyle_options['titlebar_breadcrumb_delimiter']: '-';
									
									echo doyle_page_breadcrumb($home_text, $delimiter);
								?>
							</div>
							<?php
								if(isset($doyle_options['titlebar_breadcrumb_after'])&&$doyle_options['titlebar_breadcrumb_after']&&isset($doyle_options['titlebar_breadcrumb_after_content'])&&$doyle_options['titlebar_breadcrumb_after_content']){
									echo '<div class="bt-after">'.$doyle_options['titlebar_breadcrumb_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>