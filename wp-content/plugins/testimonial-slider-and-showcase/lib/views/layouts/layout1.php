<?php
$level = array();
if(in_array( 'designation', $items ) && $designation) {
	$level[] = "<span class='author-designation'>".esc_html($designation)."</span>";
}
if(in_array( 'company', $items ) && $company) {
	$level[] = "<span class='item-company'>".esc_html($company)."</span>";
}
if(in_array( 'location', $items ) && $location) {
	$level[] = "<span class='author-location'>".esc_html($location)."</span>";
}
$html = null;
$html .= "<div class='{$grid} {$class}'>";
    $html .= '<div class="single-item-wrapper">';
		$html .= '<div class="tss-meta-info tss-left">';
			if(in_array( 'author_img', $items )) {
				$html .= "<div class='profile-img-wrapper'>{$img}</div>";
			}
		if(in_array( 'author', $items ) && $author) {
			$html .= "<h3 class='author-name'>".esc_html($author)."</h3>";
		}
		if(!empty($level)){
			$level = array_filter($level);
			$levelList = implode(', ', $level);
			$html .= '<h4 class="author-bio">'.$levelList.'</span></h4>';
		}
		$html .= '</div>';
        $html .= '<div class="item-content-wrapper tss-right">';
				if(in_array( 'testimonial', $items ) && $testimonial) {
					$html .= "<div class='item-content'>".esc_html($testimonial)."</div>";
				}
        $html .= '</div>';
		
		
    $html .= '</div>';
$html .= '</div>';
return $html;