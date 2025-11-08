<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Kidsa
 * @since 1.0.0
 */ 
 
class Banner_Slider extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'kidsa-banner-slider-widget';
	}

	/**
	 * Get widget title.
	 * Retrieve button widget title.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Banner Slider', 'kidsa-core' );
	}

	/**
	 * Get widget icon.
	 * Retrieve button widget icon.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-flash';
	}

	/**
	 * Get widget categories.
	 * Retrieve the list of categories the button widget belongs to.
	 * Used to determine where to display the widget in the editor.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories()
    {
        return ['kidsa_widgets'];
    }
	
	/**
	 * Register button widget controls.
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		// Tab Start - 1

		$this->start_controls_section(
			'banner_slider',
			[
				'label' => esc_html__( 'Banner Slider', 'kidsa-core' ),
			]
		);			


		$this->end_controls_section();

		// Tab Start - 2

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Block', 'kidsa-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
		  'repeat', 
			[
				'type' => Controls_Manager::REPEATER,
				'separator' => 'before',
				'default' => 
					[
						['block_title' => esc_html__('Projects Completed', 'kidsa-core')],
					],
				'fields' => 
					[						

						'block_bg_image' =>
						[
							'name' => 'block_bg_image',
							'label' => esc_html__('Background image', 'kidsa-core'),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],

						'block_image' =>
						[
							'name' => 'block_image',
							'label' => __( 'Image', 'kidsa-core' ),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],	

						'block_alt_text' =>
						
						[
						'name' => 'block_alt_text',
						'label' => esc_html__('Image Text', 'kidsa-core'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'kidsa-core')
						],	

						'block_image2' =>
						[
							'name' => 'block_image2',
							'label' => __( 'Image', 'kidsa-core' ),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],	

						'block_alt_text2' =>
						
						[
						'name' => 'block_alt_text2',
						'label' => esc_html__('Image Text', 'kidsa-core'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'kidsa-core')
						],	

						'block_image3' =>
						[
							'name' => 'block_image3',
							'label' => __( 'Image', 'kidsa-core' ),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],	

						'block_alt_text3' =>
						
						[
						'name' => 'block_alt_text3',
						'label' => esc_html__('Image Text', 'kidsa-core'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'kidsa-core')
						],	

						'block_image4' =>
						[
							'name' => 'block_image4',
							'label' => __( 'Image', 'kidsa-core' ),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],	

						'block_alt_text4' =>
						
						[
						'name' => 'block_alt_text4',
						'label' => esc_html__('Image Text', 'kidsa-core'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'kidsa-core')
						],	

						'block_image5' =>
						[
							'name' => 'block_image5',
							'label' => __( 'Image', 'kidsa-core' ),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],	

						'block_alt_text5' =>
						
						[
						'name' => 'block_alt_text5',
						'label' => esc_html__('Image Text', 'kidsa-core'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'kidsa-core')
						],	

						'block_subtitle' =>
						[
							'name' => 'block_subtitle',
							'label' => esc_html__('Subtitle', 'kidsa-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'kidsa-core')
						],

						'block_title' =>
						[
							'name' => 'block_title',
							'label' => esc_html__('Title', 'kidsa-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'kidsa-core')
						],

						'block_text' =>
						[
							'name' => 'block_text',
							'label' => esc_html__('Text', 'kidsa-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'kidsa-core')
						],

						'block_button' =>
						[
							'name' => 'block_button',
							'label'       => __( 'Button', 'kidsa-core' ),
							'type'        => Controls_Manager::TEXT,
							'dynamic'     => [
								'active' => true,
							],
							'placeholder' => __( 'Enter your Button Title', 'kidsa-core' ),
							'default' => esc_html__('Read More', 'kidsa-core'),
						],
				
						'block_button_link' =>
						
						[
						  'name' => 'block_button_link',
						  'label' => __( 'Button Url', 'kidsa-core' ),
						  'type' => Controls_Manager::URL,
						  'placeholder' => __( 'https://your-link.com', 'kidsa-core' ),
						  'show_external' => true,
						  'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
						  ],
					   ],

					   'block_button2' =>
					   [
						   'name' => 'block_button2',
						   'label'       => __( 'Button', 'kidsa-core' ),
						   'type'        => Controls_Manager::TEXT,
						   'dynamic'     => [
							   'active' => true,
						   ],
						   'placeholder' => __( 'Enter your Button Title', 'kidsa-core' ),
						   'default' => esc_html__('Read More', 'kidsa-core'),
					   ],
			   
					   'block_button_link2' =>
					   
					   [
						 'name' => 'block_button_link2',
						 'label' => __( 'Button Url', 'kidsa-core' ),
						 'type' => Controls_Manager::URL,
						 'placeholder' => __( 'https://your-link.com', 'kidsa-core' ),
						 'show_external' => true,
						 'default' => [
						   'url' => '',
						   'is_external' => true,
						   'nofollow' => true,
						 ],
					  ],
						
					],
				'title_field' => '{{block_title}}',
			 ]
	);
		
		
	$this->end_controls_section();	

	
		}

	/**
	 * Render button widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$allowed_tags = wp_kses_allowed_html('post');
		?>

<?php
	  echo '
	 <script>
 jQuery(document).ready(function($) {

// js code start

const sliderActive1 = ".hero-slider";
const sliderInit1 = new Swiper(sliderActive1, {
	loop: true,
	slidesPerView: 1,
	effect: "fade",
	speed: 2000,
	autoplay: {
	delay: 4000,
	disableOnInteraction: false,
	},
	pagination: {
		el: ".dot",
		clickable: true,
	},
	
});
// content animation when active start here
function animated_swiper(selector, init) {
	 let animated = function animated() {
		 $(selector + " [data-animation]").each(function () {
			 let anim = $(this).data("animation");
			 let delay = $(this).data("delay");
			 let duration = $(this).data("duration");
			 $(this)
				 .removeClass("anim" + anim)
				 .addClass(anim + " animated")
				 .css({
					 webkitAnimationDelay: delay,
					 animationDelay: delay,
					 webkitAnimationDuration: duration,
					 animationDuration: duration,
				 })
				 .one("animationend", function () {
					 $(this).removeClass(anim + " animated");
				 });
		 });
	 };
	 animated();
	 init.on("slideChange", function () {
		 $(sliderActive1 + " [data-animation]").removeClass("animated");
	 });
	 init.on("slideChange", animated);
}
animated_swiper(sliderActive1, sliderInit1);

// js code end 

  });
</script>';


?>

	<section class="hero-section hero-3">
		<div class="swiper hero-slider">
			<div class="swiper-wrapper">
			<?php foreach($settings['repeat'] as $item):?>	
				<div class="swiper-slide">
					<div class="slider-image bg-cover" style="background-image: url('<?php echo wp_get_attachment_url($item['block_bg_image']['id']);?>');">
						<div class="parasuit-shape" data-animation="fadeInLeft" data-delay="2.1s">
						<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
						<?php endif;?>
						</div>
						<div class="doll-shape" data-animation="fadeInLeft" data-delay="2.3s">
						<?php if(!empty(wp_get_attachment_url($item['block_image2']['id']))): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image2']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text2'], $allowed_tags);?>">
						<?php endif;?>
						</div>
						<div class="bus-shape" data-animation="fadeInLeft" data-delay="2.4s">
						<?php if(!empty(wp_get_attachment_url($item['block_image3']['id']))): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image3']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text3'], $allowed_tags);?>">
						<?php endif;?>
						</div>
						<div class="bee-shape" data-animation="fadeInUp" data-delay="2.5s">
						<?php if(!empty(wp_get_attachment_url($item['block_image4']['id']))): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image4']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text4'], $allowed_tags);?>">
						<?php endif;?>
						</div>
						<div class="star-shape" data-animation="fadeInUp" data-delay="2.4s">
						<?php if(!empty(wp_get_attachment_url($item['block_image5']['id']))): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image5']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text5'], $allowed_tags);?>">
						<?php endif;?>
						</div>
						<div class="container">
							<div class="row g-4 align-items-center">
								<div class="col-lg-8">
									<div class="hero-content">
										<h5  data-animation="fadeInUp" data-delay="1.3s"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h5>
										<h1 data-animation="fadeInUp" data-delay="1.5s">
											<?php echo wp_kses($item['block_title'], $allowed_tags);?>
										</h1>
										<p data-animation="fadeInUp" data-delay="1.7s">
											<?php echo wp_kses($item['block_text'], $allowed_tags);?>
										</p>
										<div class="hero-button">
											<a href="<?php echo esc_url($item['block_button_link']['url']);?>" data-animation="fadeInUp" data-delay="1.7s" class="theme-btn hover-white">
												<?php echo wp_kses($item['block_button'], $allowed_tags);?>
												<i class="fa-solid fa-arrow-right-long"></i>
											</a>
											<a href="<?php echo esc_url($item['block_button_link2']['url']);?>" data-animation="fadeInUp" data-delay="1.7s" class="theme-btn transparent-2">
												<?php echo wp_kses($item['block_button2'], $allowed_tags);?>
												<i class="fa-solid fa-arrow-right-long"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="swiper-dot text-center pt-5">
				<div class="dot"></div>
			</div>
		</div>
	</section>


             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Banner_Slider());