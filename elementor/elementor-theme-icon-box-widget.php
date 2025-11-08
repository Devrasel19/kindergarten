<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Kidsa
 * @since 1.0.0
 */ 
 
class Theme_Icon_Box extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'kidsa-theme-icon-box-widget';
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
		return esc_html__( 'Theme Icon Box', 'kidsa-core' );
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
			'theme_icon_box',
			[
				'label' => esc_html__( 'Theme Icon Box', 'kidsa-core' ),
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
			'subtitle',
			[
				'label'       => __( 'Sub Title', 'kidsa-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your sub title', 'kidsa-core' ),
			]
		);

		$this->add_control(
			'icons',
				[
					'label' => esc_html__('Enter The icons', 'kidsa-core'),
					'type' => Controls_Manager::ICONS,
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
	


<div class="about-activities-wrapper style-2">
	<div class="activities-content">
		<div class="icon-items">
			<div class="icon">
				<i class="<?php echo str_replace("icon ", "", esc_attr( $settings['icons']['value']));?>"></i>
			</div>
			<div class="content">
				<h5><?php echo $settings['title'];?></h5>
				<p><?php echo $settings['subtitle'];?></p>
			</div>
		</div>
	</div>
</div>





             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Theme_Icon_Box());