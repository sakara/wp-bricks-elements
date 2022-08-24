<?php
// pazlab-slider.php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Pazlab_Slider extends \Bricks\Element {

	public $category     = 'PAZLAB'; 
	public $name         = 'pazlab-slider'; 
	public $icon         = 'far fa-images';
	public $css_selector = '.pazlab-slider-wrapper';
	public $scripts = array('pazlab_slider_script'); 

	public function get_label() {
		return esc_html__( 'Posts Slider', 'bricks' );
	}

	public function set_control_groups() {

		$this->control_groups['initialGroup'] = [
			'title' => esc_html__( 'Settings', 'bricks' ),
			'tab' => 'content',
		];

		$this->control_groups['posts'] = [
			'title' => esc_html__( 'Posts', 'bricks' ),
			'tab' => 'content',
		];

		$this->control_groups['arrows'] = [
			'title' => esc_html__( 'Arrows', 'bricks' ),
			'tab' => 'content',
		];

		$this->control_groups['pagination'] = [
			'title' => esc_html__( 'Pagination', 'bricks' ),
			'tab' => 'content',
		];

	}

	public function set_controls() {

		$this->controls['slideBackground'] = 
			[
				'group' => 'initialGroup',
				'label' => __( 'Slide Background', 'bricks' ),
				'type' => 'color',
				'default' => [
					'rgb' => '#000000',
				],
				'css'   => [
					[
						'property' => 'background-color',
						'selector' => '.slideBackground',
					],
				],
			];     

		$this->controls['titleTag'] = [
			'group' => 'initialGroup',
			'label' => esc_html__( 'Title Tag', 'bricks' ),
			'type' => 'select',
			'options' => [
					'h1'  => 'h1',
					'h2'  => 'h2',
					'h3'  => 'h3',
					'h4'  => 'h4',
					'h5'  => 'h5',
					'h6'  => 'h6',
					'p'  => 'p',
					'span'  => 'span',
					'div'  => 'div',
          ],
			'inline' => true,
			'default' => 'h2',
			];    

		$this->controls['titleColor'] = 
			[
				'group' => 'initialGroup',
				'label' => __( 'Title Color', 'bricks' ),
				'type' => 'color',
				'default' => [
					'rgb' => '#ffffff',
				],
				'css'   => [
					[
						'property' => 'color',
						'selector' => '.titleColor',
					],
				],
			];     

		$this->controls['textColor'] = 
			[
				'group' => 'initialGroup',
				'label' => __( 'Text Color', 'bricks' ),
				'type' => 'color',
				'default' => [
					'rgb' => '#ffffff',
				],
				'css'   => [
					[
						'property' => 'color',
						'selector' => '.textColor',
					],
				],
			];     

		$this->controls['enableButton'] =
			[
				'group' => 'initialGroup',
				'label' => __( 'Enable Button', 'bricks' ),
				'type' => 'checkbox',
				'inline' => true,
				'default' => true
			];     

		$this->controls['buttonText'] = 
			[
				'group' => 'initialGroup',
				'label' => __( 'Button Text', 'bricks' ),
				'type' => 'text',
				'default' => 'Click Me',
				'inlineEditing' => true,
			];     

		$this->controls['buttonSize'] = 
			[
				'group' => 'initialGroup',
				'label' => esc_html__( 'Button Size', 'bricks' ),
				'type' => 'select',
				'options' => [
						'sm'  => 'Small',
						'md'  => 'Medium',
						'lg'  => 'Large',
						'xl'  => 'Extra Large',
				],
				'inline' => true,
				'default' => 'md',
			];    

		$this->controls['buttonBackground'] = 
			[
				'group' => 'initialGroup',
				'label' => __( 'Button Background', 'bricks' ),
				'type' => 'color',
				'default' => [
					'rgb' => '#ffffff',
				],
				'css'   => [
					[
						'property' => 'background-color',
						'selector' => '.buttonBackground',
					],
				],
			];     

		$this->controls['buttonTextColor'] = 
			[
				'group' => 'initialGroup',
				'label' => __( 'Button Text Color', 'bricks' ),
				'type' => 'color',
				'default' => [
					'rgb' => '#000000',
				],
				'css'   => [
					[
						'property' => 'color',
						'selector' => '.buttonTextColor',
					],
				],
			];
		
			$this->controls['buttonPadding'] = [
				'group' => 'initialGroup',
				'label' => esc_html__( 'Button Padding', 'bricks' ),
				'type' => 'dimensions',
				'css' => [
				  [
					'property' => 'padding',
					'selector' => '.pazlab-slider-padding-button',
				  ]
				],
				'default' => [
				  'top' => '30px',
				  'right' => 0,
				  'bottom' => '10em',
				  'left' => 0,
				],
				// 'unitless' => false, // false by default
				// Custom directions
				// 'directions' => [
				  // 'offsetX' => esc_html__( 'Offset X', 'bricks' ),
				  // 'offsetY' => esc_html__( 'Offset Y', 'bricks' ),
				  // 'spread'  => esc_html__( 'Spread', 'bricks' ),
				  // 'blur'    => esc_html__( 'Offset Y', 'bricks' ),
				// ],
			  ];
		
			  $this->controls['buttonMargin'] = [
				'group' => 'initialGroup',
				'label' => esc_html__( 'Button Margin', 'bricks' ),
				'type' => 'dimensions',
				'css' => [
				  [
					'property' => 'margin',
					'selector' => '.pazlab-slider-margin-button',
				  ]
				],
				'default' => [
				  'top' => '30px',
				  'right' => 0,
				  'bottom' => '10em',
				  'left' => 0,
				],
				// 'unitless' => false, // false by default
				// Custom directions
				// 'directions' => [
				  // 'offsetX' => esc_html__( 'Offset X', 'bricks' ),
				  // 'offsetY' => esc_html__( 'Offset Y', 'bricks' ),
				  // 'spread'  => esc_html__( 'Spread', 'bricks' ),
				  // 'blur'    => esc_html__( 'Offset Y', 'bricks' ),
				// ],
			  ];

		$this->controls['enableArrow'] =
			[
				'group' => 'initialGroup',
				'label' => __( 'Enable Arrow', 'bricks' ),
				'type' => 'checkbox',
				'inline' => true,
				'default' => true
			];     

		/*$this->controls['enablePagination'] =
			[
				'group' => 'initialGroup',
				'label' => __( 'Enable Pagination', 'bricks' ),
				'type' => 'checkbox',
				'inline' => true,
				'default' => true
			];*/
		
			$this->controls['enablePagination'] = 
			[
				'group' => 'initialGroup',
				'label' => esc_html__( 'Pagination', 'bricks' ),
				'type' => 'select',
				'options' => [
						'fraction'  => 'fraction',
						'dots'  => 'dots',
						'none'  => 'none',
				],
				'inline' => true,
				'default' => 'none',
			];
		
			$this->controls['sliderQueryArgs'] = [
				'tab'      => 'content',
				'group' => 'posts',
				'label' => esc_html__( 'Posts Query', 'bricks' ),
				'type' => 'query',
				// Default required for query to populate
				'default' => [
				  'post_type' => 'post',
				],
			  ];

		/*
			$this->controls['exampleRepeater'] = [
				'tab' => 'content',
				'label' => esc_html__( 'Repeater', 'bricks' ),
				'type' => 'repeater',
				'checkLoop'   => true,
				'titleProperty' => 'title', // Default 'title'
				'default' => [
				  [
					'title' => 'Design',
					'description' => 'Here goes the description for repeater item.',
				  ],
				  [
					'title' => 'Code',
					'description' => 'Here goes the description for repeater item.',
				  ],
				  [
					'title' => 'Launch',
					'description' => 'Here goes the description for repeater item.',
				  ],
				],
				'placeholder' => esc_html__( 'Title placeholder', 'bricks' ),
				'fields' => [
				  'title' => [
					'label' => esc_html__( 'Title', 'bricks' ),
					'type' => 'text',
				  ],
				  'description' => [
					'label' => esc_html__( 'Description', 'bricks' ),
					'type' => 'textarea',
				  ],
				],
			  ];
			  $this->controls = array_replace_recursive( $this->controls, $this->get_loop_builder_controls() );*/

		$this->controls['arrowColor'] = 
			[
				'group' => 'arrows',
				'label' => __( 'Arrow Color', 'bricks' ),
				'type' => 'color',
				'default' => [
					'rgb' => '#ffffff',
				],
			];     

		$this->controls['prevArrowTop'] = 
			[
				'group' => 'arrows',
				'label' => __( 'Prev Arrow Top', 'bricks' ),
				'type' => 'number',
      			'inline' => true,
				'default' => '50%',
				'units' => true,
			];     

		$this->controls['prevArrowLeft'] = 
			[
				'group' => 'arrows',
				'label' => __( 'Prev Arrow Left', 'bricks' ),
				'type' => 'number',
      			'inline' => true,
				'default' => '0',
				'units' => true,
			];     

		$this->controls['nextArrowTop'] = 
			[
				'group' => 'arrows',
				'label' => __( 'Next Arrow Top', 'bricks' ),
				'type' => 'number',
      			'inline' => true,
				'default' => '50%',
				'units' => true,
			];     

		$this->controls['nextArrowRight'] = 
			[
				'group' => 'arrows',
				'label' => __( 'Next Arrow Right', 'bricks' ),
				'type' => 'number',
      			'inline' => true,
				'default' => '0',
				'units' => true,
			];     

		$this->controls['leftArrowBGColor'] = 
			[
				'group' => 'arrows',
				'label' => __( 'Left Arrow BG Color', 'bricks' ),
				'type' => 'color',
				'default' => [
					'rgb' => '#000000',
				],
			];     

		$this->controls['rightArrowBGColor'] = 
			[
				'group' => 'arrows',
				'label' => __( 'Right Arrow BG Color', 'bricks' ),
				'type' => 'color',
				'default' => [
					'rgb' => '#000000',
				],
			];     

		$this->controls['paginationColor'] = 
			[
				'group' => 'pagination',
				'label' => __( 'Pagination Color', 'bricks' ),
				'type' => 'color',
				'default' => [
					'rgb' => '#ffffff',
				],
			];     
		



	}

	public function enqueue_scripts() {
		$settings = $this->settings;
		
		wp_enqueue_style( 'swiperjs-pazlab_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
		wp_enqueue_script( 'swiperjs-pazlab_js', 'https://unpkg.com/swiper/swiper-bundle.min.js', '', '1.0', true);

		wp_enqueue_style( 'pazlab-slider_css', '/wp-content/themes/bricks-child/pazlab-slider/css/pazlab-slider.css');
		if ( $settings['enablePagination'] == 'fraction' ):
			wp_enqueue_script( 'pazlab-slider_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider-fraction.js', array( 'jquery' ), '1.0', true);
		elseif ( $settings['enablePagination'] == 'dots' ):
			wp_enqueue_script( 'pazlab-slider_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider-dots.js', array( 'jquery' ), '1.0', true);
		else:
			wp_enqueue_script( 'pazlab-slider_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider.js', array( 'jquery' ), '1.0', true);
		endif;
	}

	public function render() {

		$settings = $this->settings;

		// Set element attributes
		$root_classes[] = 'pazlab-slider-wrapper';

		// Add 'class' attribute to element root tag
		$this->set_attribute( '_root', 'class', $root_classes );
	
		// Render element HTML
		// '_root' attribute is required since Bricks 1.4 (contains element ID, class, etc.)
		echo "<div {$this->render_attributes( '_root' )}>";


 
    ?>
    
<?php
// The Query
//$query = new WP_Query($q_query_args);

$query_args = $this->settings['sliderQueryArgs'];
$posts_query = new WP_Query( $query_args );

?>
<!-- Swiper -->
    <div class="bricks-swiper-container <?php echo 'pazlab-slider-wrapper' ?>">
        <div class="swiper-wrapper">
<?php
// The Loop
if ( $posts_query->have_posts() ) :
	while ( $posts_query->have_posts() ) : $posts_query->the_post();
?>
            <div class="repeater-item swiper-slide slideBackground">
                <div class="slider-content">
                    <<?php echo isset($settings['titleTag']) ? wp_kses_post($settings['titleTag']) : '' ?> class="title titleColor"><?php echo the_title(); ?></<?php echo isset($settings['titleTag']) ? wp_kses_post($settings['titleTag']) : '' ?>>
                    <div class="content textColor">
                        <p class=""><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>
                    </div>
                    <?php if ( $settings['enableButton'] == true ): ?>
                    <a class="brxe-button bricks-button <?php echo isset($settings['buttonSize']) ? wp_kses_post($settings['buttonSize']) : '' ?> buttonBackground buttonTextColor pazlab-slider-padding-button pazlab-slider-margin-button" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo isset($settings['buttonText']) ? wp_kses_post($settings['buttonText']) : '' ?></a>
                    <?php else: ?>
                    	<!-- Fires if not -->
                    <?php endif; ?>    
                </div>
                <div class="image css-filter slideBackground"></div>
            </div>
<?php
   endwhile;
?>
</div>
    </div>

    
    <?php if ( $settings['enableArrow'] == true ): ?>
    <style>
        .swiper-button-next:after, .swiper-button-prev:after {
            color: <?php echo isset($settings['arrowColor']['rgb']) ? $settings['arrowColor']['rgb'] : $settings['arrowColor']['hex'] ?>;
        }
        .swiper-button-prev {
            left: <?php echo isset($settings['prevArrowLeft']) ? wp_kses_post($settings['prevArrowLeft']) : '' ?>;
            top: <?php echo isset($settings['prevArrowTop']) ? wp_kses_post($settings['prevArrowTop']) : '' ?> !important;
        }
        .swiper-button-next {
            right: <?php echo isset($settings['nextArrowRight']) ? wp_kses_post($settings['nextArrowRight']) : '' ?>;
            top: <?php echo isset($settings['nextArrowTop']) ? wp_kses_post($settings['nextArrowTop']) : '' ?> !important;
        }
    </style>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
    <?php else: ?>
	<!-- Fires if not -->
    <?php endif; ?>

	<?php
		if ( $settings['enablePagination'] == 'fraction' ):
			wp_enqueue_script( 'pazlab-slider_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider-fraction.js', array( 'jquery' ), '1.0', true);
		elseif ( $settings['enablePagination'] == 'dots' ):
			wp_enqueue_script( 'pazlab-slider_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider-dots.js', array( 'jquery' ), '1.0', true);
		else:
			wp_enqueue_script( 'pazlab-slider_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider.js', array( 'jquery' ), '1.0', true);
		endif;
	?>
    
    <style>
        .swiper-pagination {
            color: <?php echo isset($settings['paginationColor']['rgb']) ? $settings['paginationColor']['rgb'] : $settings['paginationColor']['hex'] ?>;
        }
		.swiper-pagination-bullet {
			background-color: <?php echo isset($settings['paginationColor']['rgb']) ? $settings['paginationColor']['rgb'] : $settings['paginationColor']['hex'] ?> !important;
		}
    </style>
        <div class="swiper-pagination"></div>
	
</div>
<?php
// Reset Original Post Data
wp_reset_postdata();
else :
// There are no posts
esc_html_e( 'No posts matched your criteria.', 'bricks' );

endif;
?>
 
 <?php 
 
    
    
		echo "</div>";
	}

}
add_action( 'wp_enqueue_scripts', 'bwc_temporary_fix_pazlab_slider', 11);
function bwc_temporary_fix_pazlab_slider() {
	if ( bricks_is_builder_iframe() ) {

		wp_enqueue_style( 'swiperjs-pazlab_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
		wp_enqueue_script( 'swiperjs-pazlab_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider-fraction.js', '', '1.0', true);

		wp_enqueue_style( 'pazlab-slider_css', '/wp-content/themes/bricks-child/pazlab-slider/css/pazlab-slider.css');
		if ( $settings['enablePagination'] == 'fraction' ):
		wp_enqueue_script( 'pazlab-slider_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider-fraction.js', array( 'jquery' ), '1.0', true);
		elseif ( $settings['enablePagination'] == 'dots' ):
		wp_enqueue_script( 'pazlab-slider_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider-dots.js', array( 'jquery' ), '1.0', true);
		else:
		wp_enqueue_script( 'pazlab-slider_js', '/wp-content/themes/bricks-child/pazlab-slider/js/pazlab-slider.js', array( 'jquery' ), '1.0', true);
		endif;
	}
}
