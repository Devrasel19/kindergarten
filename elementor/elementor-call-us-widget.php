<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Kidsa
 * @since 1.0.0
 */ 
 
class Call_Us extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'kidsa-call-us-widget';
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
		return esc_html__( 'Call Us', 'kidsa-core' );
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
			'call_us',
			[
				'label' => esc_html__( 'Call Us', 'kidsa-core' ),
			]
		);		
		
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'kidsa-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your title', 'kidsa-core' ),
			]
		);

		$this->add_control(
			'button',
			[
				'label'       => __( 'Button', 'kidsa-core' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your button text', 'kidsa-core' ),
				'default' => esc_html__('Read More', 'kidsa-core'),
			]
		);	
	

		$this->add_control(
			'button_link',
			[
			  'label' => __( 'Button Url', 'kidsa-core' ),
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
	
	<div class="about-wrapper">
		<div class="about-content">
			<div class="about-author mt-0">
				<div class="author-icon wow fadeInUp" data-wow-delay=".5s">
					<div class="icon">
						<i class="fa-solid fa-phone"></i>
					</div>
					<div class="content">
						<span><?php echo $settings['title'];?></span>
						<h5>
							<a href="<?php echo esc_url($settings['button_link']['url']);?>"><?php echo $settings['button'];?></a>
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Call_Us());