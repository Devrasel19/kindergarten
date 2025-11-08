<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Kidsa
 * @since 1.0.0
 */ 
 
class Heading_With_Button extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'kidsa-heading-with-button-widget';
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
		return esc_html__( 'Heading With Button', 'kidsa-core' );
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
		return 'eicon-welcome';
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
			'heading_with_button',
			[
				'label' => esc_html__( 'Title', 'kidsa-core' ),
			]
		);		
		
		$this->add_control(
			'style',
			[
				'label'   => esc_html__( 'Select Style', 'kidsa-core' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => array(
					'style1'   => esc_html__( 'Style One', 'kidsa-core' ),
					'style2'   => esc_html__( 'Style Two', 'kidsa-core' ),
					'style3'   => esc_html__( 'Style Three', 'kidsa-core' ),
					'style4'   => esc_html__( 'Style Four', 'kidsa-core' ),
				),
			]
		);

		$this->add_control(
			'text_align',
			[
				'label'   => esc_html__( 'Text Align', 'kidsa-core' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'center',
				'options' => array(
					'center'   => esc_html__( 'Center', 'kidsa-core' ),
					'left'   => esc_html__( 'Left', 'kidsa-core' ),
					'right'   => esc_html__( 'Right', 'kidsa-core' ),
					'condition'	=> ['style' => ['style2']],
				),
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
					'condition'	=> ['style' => ['style1']],
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
				  'condition'	=> ['style' => ['style1']],
				
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

<?php  if ( 'style1' === $settings['style'] ) : ?>	

	<div class="section-title-area">
		<div class="section-title">
			<span class="wow fadeInUp"><?php echo $settings['subtitle'];?></span>
			<h2 class="wow fadeInUp" data-wow-delay=".3s">
				<?php echo $settings['title'];?>
			</h2>
		</div>
		<a href="<?php echo esc_url($settings['button_link']['url']);?>" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
			<?php echo $settings['button'];?>
			<i class="fa-solid fa-arrow-right-long"></i>
		</a>
	</div>

<?php  elseif ( 'style2' === $settings['style'] ) : ?>

	<div class="section-title text-<?php echo $settings['text_align']; ?>">
		<span class="wow fadeInUp"><?php echo $settings['subtitle'];?></span>  
		<h2 class="wow fadeInUp" data-wow-delay=".3s">
			<?php echo $settings['title'];?>
		</h2>  
	</div>

<?php  elseif ( 'style3' === $settings['style'] ) : ?>

	<div class="section-title-area">
		<div class="section-title">
			<span class="wow fadeInUp"><?php echo $settings['subtitle'];?></span>  
			<h2 class="wow fadeInUp" data-wow-delay=".3s">
				<?php echo $settings['title'];?>
			</h2>  
		</div>
		<div class="array-button wow fadeInUp" data-wow-delay=".5s">
			<button class="array-prev"><i class="fal fa-arrow-left"></i></button>
			<button class="array-next"><i class="fal fa-arrow-right"></i></button>
		</div>
	</div>

<?php  elseif ( 'style4' === $settings['style'] ) : ?>

	<div class="section-title-area">
		<div class="section-title">
			<span class="text-white wow fadeInUp"><?php echo $settings['subtitle'];?></span>  
			<h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
				<?php echo $settings['title'];?>
			</h2>  
		</div>
		<div class="array-button wow fadeInUp" data-wow-delay=".5s">
			<button class="array-prev border-white"><i class="fal fa-arrow-right"></i></button>
			<button class="array-next"><i class="fal fa-arrow-left"></i></button>
		</div>
	</div>

<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Heading_With_Button());