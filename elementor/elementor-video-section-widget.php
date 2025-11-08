<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Kidsa
 * @since 1.0.0
 */ 
 
class Video_Section extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'kidsa-video-section-widget';
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
		return esc_html__( 'Video Section', 'kidsa-core' );
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
			'video_section',
			[
				'label' => esc_html__( 'Video Section', 'kidsa-core' ),
			]
		);		
		
		$this->add_control(
			'bg_image',
			[
				'label' => esc_html__('Background image', 'kidsa-core'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);

		$this->add_control(
			'bg_image2',
			[
				'label' => esc_html__('Background image', 'kidsa-core'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);

		$this->add_control(
			'video_link',
			[
			  'label' => __( 'Video Url', 'kidsa-core' ),
			  'type' => Controls_Manager::URL,
			  'placeholder' => __( 'https://your-link.com', 'kidsa-core' ),
			  'show_external' => true,
			  'default' => [
				'url' => '',
				'is_external' => true,
				'nofollow' => true,
			  ],
			
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




// js code end 

  });
</script>';


?>

	<section class="cta-video-section bg-cover" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image2']['id']);?>');">
		<div class="video-shape">
		<div class="wave" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image']['id']);?>');"></div>
		<div class="wave" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image']['id']);?>');"></div>
		</div>
		<div class="container">
			<div class="cta-video-items">
				<div class="video-box">
					<a href="<?php echo esc_url($settings['video_link']['url']);?>" class="video-btn ripple video-popup">
						<i class="fa-solid fa-play"></i>
					</a>
				</div>
			</div>
		</div>
	</section>

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Video_Section());