<?php
if(!class_exists('bt_contentblocks_builder')) {
	class bt_contentblocks_builder{		
		/*start bt_ultimateLayouts_vc*/
		public function bt_ultimateLayouts_vc(){
			if(function_exists('vc_map')){
				$group_category				=	__('BeeTeam368', 'cb_blocks_layouts');
				$group_layout_settings		=	__('Layout', 'cb_blocks_layouts');
				$group_query_settings		=   __('Query Builder', 'cb_blocks_layouts');
				$group_color_settings		= 	__('Color', 'cb_blocks_layouts');
				$group_typo_settings		= 	__('Typography', 'cb_blocks_layouts');
				$group_small_settings		= 	__('Small Item Settings', 'cb_blocks_layouts');
				$group_quickview_settings	= 	__('Quick View Settings', 'cb_blocks_layouts');
				
				$array_font_weight			= 	array(	
													__('Default', 'cb_blocks_layouts') 	=> '',
													__('Normal', 'cb_blocks_layouts')	=> 'normal',																		
													__('Bold', 'cb_blocks_layouts') 	=> 'bold',																			
													__('300', 'cb_blocks_layouts') 		=> '300',
													__('400', 'cb_blocks_layouts') 		=> '400',	
													__('500', 'cb_blocks_layouts') 		=> '500',	
													__('600', 'cb_blocks_layouts') 		=> '600',																		
													__('700', 'cb_blocks_layouts') 		=> '700',
													__('800', 'cb_blocks_layouts') 		=> '800',
													__('900', 'cb_blocks_layouts') 		=> '900',																																				
												);
				$array_font_style			=	array(	
													__('Default', 'cb_blocks_layouts') 	=> '',
													__('Normal', 'cb_blocks_layouts') 	=> 'normal',																		
													__('Italic', 'cb_blocks_layouts') 	=> 'italic',																			
													__('Oblique', 'cb_blocks_layouts') 	=> 'oblique',																																																								
												);
				
				$array_text_transform		=	array(	
													__('Default', 'cb_blocks_layouts') 		=> '',
													__('Uppercase', 'cb_blocks_layouts') 	=> 'uppercase',																		
													__('Lowercase', 'cb_blocks_layouts') 	=> 'lowercase',																			
													__('Capitalize', 'cb_blocks_layouts') 	=> 'capitalize',
													__('None', 'cb_blocks_layouts') 			=> 'none',																																																								
												);	
												
				$array_grid_styles			=	array(
													__('AFRICAN LILY', 'cb_blocks_layouts') 		=> '0',																		
													__('ALPINE THISTLE', 'cb_blocks_layouts') 		=> '1',
													__('AMARYLLIS', 'cb_blocks_layouts') 			=> '2',
													__('AMAZON LILY', 'cb_blocks_layouts') 			=> '3',
													__('ARUM LILY', 'cb_blocks_layouts') 			=> '4',
													__('BABY’S BREATH', 'cb_blocks_layouts') 		=> '5',
													__('BARBERTON', 'cb_blocks_layouts') 			=> '6',																																
												);				
				
				$array_block_content_styles	=	array(
													__('CONEFLOWER', 'cb_blocks_layouts') 			=> '0',																		
													__('DAFFODIL', 'cb_blocks_layouts') 			=> '1',
													__('EVENING PRIMROSE', 'cb_blocks_layouts') 	=> '2',
													__('FEVERFEW', 'cb_blocks_layouts') 			=> '3',
													__('FLAME TIP', 'cb_blocks_layouts') 			=> '4',
													__('FLAMINGO FLOWER', 'cb_blocks_layouts') 		=> '5',
													__('FORGET ME NOT', 'cb_blocks_layouts') 		=> '6',
													__('FOXGLOVE', 'cb_blocks_layouts') 			=> '7',
													__('GAY FEATHER', 'cb_blocks_layouts') 			=> '8',
													__('GLOBE THISTLE', 'cb_blocks_layouts') 		=> '9',
													__('GOLDEN ROD', 'cb_blocks_layouts') 			=> '10',
													__('GRAPE HYACINTH', 'cb_blocks_layouts') 		=> '11',
													__('GUERNSEY LILY', 'cb_blocks_layouts') 		=> '12',
													__('HYACINTH', 'cb_blocks_layouts') 			=> '13',
													__('IRIS', 'cb_blocks_layouts') 				=> '14',
													__('JERSEY LILY', 'cb_blocks_layouts') 			=> '15',
													__('LADY’S MANTLE', 'cb_blocks_layouts') 		=> '16',
													__('LARKSPUR', 'cb_blocks_layouts') 			=> '17',
													__('LAVENDER', 'cb_blocks_layouts') 			=> '18',
													__('LILAC', 'cb_blocks_layouts') 				=> '19',
													__('LILY', 'cb_blocks_layouts') 				=> '20',
													__('LISIANTHUS', 'cb_blocks_layouts') 			=> '21',
													__('LOBSTER CLAW', 'cb_blocks_layouts') 		=> '22',
													__('LOVE IN A MIST', 'cb_blocks_layouts') 		=> '23',
													__('SEA LAVENDER', 'cb_blocks_layouts')			=> '24',
													__('SEPTEMBER FLOWER', 'cb_blocks_layouts')		=> '25',
													__('SNAPDRAGON', 'cb_blocks_layouts')			=> '26',													
													__('TRANSVAAL DAISY', 'cb_blocks_layouts') 		=> '27',																																																				
												);
				
				$image_sizes 				= 	get_intermediate_image_sizes();									
					
				$array_image_size[__('thumbnail', 'cb_blocks_layouts')] = 'thumbnail'; 
				$array_image_size[__('full', 'cb_blocks_layouts')] = 'full'; 
				foreach ($image_sizes as $size_name):
					if($size_name!='thumbnail'){
						$array_image_size[__($size_name, 'cb_blocks_layouts')] = $size_name;
					}
				endforeach;	
				
				/*Post types*/				
				$bt_post_types_list = array();	
				$bt_post_types = get_post_types(array());
				$bt_post_types_string = '';
				if (is_array($bt_post_types) && !empty($bt_post_types)){
					foreach($bt_post_types as $bt_post_type){				
						if($bt_post_type !== 'revision' && $bt_post_type !== 'nav_menu_item' /*&& $bt_post_type !== 'attachment'*/) {
							$bt_label = ucfirst($bt_post_type);
							$bt_post_types_list['['.$bt_post_type.'] - '.($bt_label)] = $bt_post_type;
							$bt_post_types_string.='<code>'.$bt_post_type.'</code>, ';
						}
					}				
				}	
				$bt_post_types_list[__('Multiple Post Types', 'cb_blocks_layouts')] = 'multi_post_types';
				/*Post types*/	
				
				/*taxonomies*/
				$taxonomies_list = array(); 	
				$taxonomies_types = get_taxonomies(array('public' => true), 'objects');
				$taxonomies_string = '';
				if(is_array($taxonomies_types) && ! empty($taxonomies_types)) {
					foreach($taxonomies_types as $t => $data){
						if ($t!=='post_format' && is_object($data)) {
							$taxonomies_list['['.$t.'] - '.($data->labels->name)] = $t;
							$taxonomies_string.='<code>'.$t.'</code>, ';
						}
					}
				};				
				$taxonomies_list[__('Multiple Taxonomies', 'cb_blocks_layouts')] = 'multi_taxonomies'; 	
				/*taxonomies*/																																
				
				/*start VC Map*/
				vc_map(
					array(
						'name' 				=> 	__('High Perfomance Content Blocks', 'cb_blocks_layouts'),
						'base' 				=> 	'cbb_layout',
						'category' 			=> 	$group_category,
						'icon'				=> 	CBB_BETE_PLUGIN_URL.'assets/back-end/images/ul-layout-shortcode.png',
						'is_container' 		=> 	false,					
						'js_view' 			=> 	'VcColumnView',
						'as_parent' 		=> 	array('only' => 'cbb_layout_filter'),
						'params'			=> 	array(
													//Layout Settings
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('Layout Style', 'cb_blocks_layouts'),
															'param_name' 	=> 'layout_style', //Done
															'value' 		=> array(																				
																				__('CONTENT BLOCKS', 'cb_blocks_layouts') 			=> '3',																			
																			   ),
															'group'			=> $group_layout_settings,																		
														),														
																												
														//Options For CONTENT BLOCKS
															array( // work with CONTENT BLOCKS
																'type' 			=> 'dropdown',
																'heading' 		=> __('CONTENT BLOCKS', 'cb_blocks_layouts'),
																'param_name' 	=> 'block_content_style',
																'value' 		=> $array_block_content_styles,
																'dependency' 	=> array(
																					'element'			 			=> 'layout_style',
																					'value' 						=> array('3'),
																				   ),				   
																'group'			=> $group_layout_settings,																		
															),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Title', 'cb_blocks_layouts'),
																'param_name' 	=> 's_title_small', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),
																'dependency' 	=> array(
																						'element'			 			=> 'layout_style',
																						'value' 						=> array('3'),
																					   ),																									   
																'group'			=> $group_small_settings,																	
															),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Title] Limit Element To 01 Line', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_title_limit_small', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_title_small',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_small_settings,																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Title] Link', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_title_link_small', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_title_small',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_small_settings,																	
																),
																	array(
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Title] Open Link In New Tab', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_title_link_target_small', //Done
																		'value' 		=> array(	
																								__('No', 'cb_blocks_layouts') 	=> '0',																		
																								__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_title_link_small',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_small_settings,																	
																	),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Categories, Taxonomies, Tags ...', 'cb_blocks_layouts'),
																'param_name' 	=> 's_categories_small', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),
																'dependency' 	=> array(
																						'element'			 			=> 'layout_style',
																						'value' 						=> array('3'),
																					   ),																									   
																'group'			=> $group_small_settings,																	
															),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Style', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_s_categories_small', //Done
																	'value' 		=> array(	
																							__('Inline Block', 'cb_blocks_layouts') 		=> '0',																		
																							__('Inline Text', 'cb_blocks_layouts') 		=> '1',																																																							
																						),		
																	'dependency' 	=> array(
																						'element'			 			=> 's_categories_small',
																						'value' 						=> array('1'),
																					   ),																							   
																	'group'			=> $group_small_settings,																	
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Get Only Parent', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_s_categories_parent_small', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 		=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 		=> '1',																																																							
																						),		
																	'dependency' 	=> array(
																						'element'			 			=> 's_categories_small',
																						'value' 						=> array('1'),
																					   ),																							   
																	'group'			=> $group_small_settings,																	
																),
																array(
																	'type' 				=> 'textfield', //Done
																	'heading' 			=> __('[Categories, Taxonomies, Tags ...] HIDE taxonomies...', 'cb_blocks_layouts'),			
																	'param_name' 		=> 'ex_items_taxonomies_small',
																	'dependency' 		=> array(
																								'element' 	=> 	's_categories_small',
																								'value' 	=> 	array('1'),
																							),		
																	'description' 		=> __('List of "Taxonomies" do not want to display on layout, separated by a comma. 
																							  Example: <code>category</code>, <code>post_tag</code>, <code>product_cat</code>... 
																							  <br><br> Full List: '.$taxonomies_string, 'cb_blocks_layouts'),	
																	'group'				=> $group_small_settings,								
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Color Settings', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_c_categories_small', //Done
																	'value' 		=> array(	
																							__('TERM/CATEGORY BACKGROUND & COLOR', 'cb_blocks_layouts') 		=> '0',																		
																							__('Static Color', 'cb_blocks_layouts') 							=> '1',																																																							
																						),		
																	'dependency' 	=> array(
																						'element'			 			=> 's_categories_small',
																						'value' 						=> array('1'),
																					   ),																							   
																	'group'			=> $group_small_settings,																	
																),
																array(
																	'type'			=> 'colorpicker',
																	'heading' 		=> __('[Categories, Taxonomies, Tags] Text Color', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_ct_categories_small', //Done
																	'dependency' 	=> array(
																						'element'			 			=> 's_c_categories_small',
																						'value' 						=> array('1'),
																					   ),	
																	'group'			=> $group_small_settings,
																	
																),
																array(
																	'type'			=> 'colorpicker',
																	'heading' 		=> __('[Categories, Taxonomies, Tags] Background Color', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_cb_categories_small', //Done
																	'description' 	=> __('Work with [Categories, Taxonomies, Tags ...] Style: Inline Block', 'cb_blocks_layouts'),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_c_categories_small',
																						'value' 						=> array('1'),
																					   ),	
																	'group'			=> $group_small_settings,
																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Open Link In New Tab', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_categories_target_small', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_categories_small',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_small_settings,																	
																),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Post Meta 1', 'cb_blocks_layouts'),
																'param_name' 	=> 's_metas_o_small', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),		
																'dependency' 	=> array(
																						'element'			 			=> 'layout_style',
																						'value' 						=> array('3'),
																					   ),																							   
																'group'			=> $group_small_settings,																	
															),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Author', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_author_small', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o_small',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_small_settings,																	
																),
																	array( 
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Post Meta 1] Show Author Avatar', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_metas_o_author_avatar_small', //Done
																		'value' 		=> array(	
																								__('No', 'cb_blocks_layouts') 	=> '0',																		
																								__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_metas_o_author_small',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_small_settings,																	
																	),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Date/Time', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_time_small', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o_small',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_small_settings,																	
																),
																	array(
																		'type' 			=> 'textfield',
																		'heading' 		=> __('[Post Meta 1] - [Date/Time] Format', 'cb_blocks_layouts'), 
																		'param_name' 	=> 'time_format_small', //Done
																		'description' 	=> __('Enter date/time format - <a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank">Tutorial</a>. 
																						   If blank, defaults to: <code>F j, Y</code>', 'cb_blocks_layouts'), 
																		'value'			=> '',	
																		'dependency' 	=> array(
																								'element' 					=> 's_metas_o_time_small',
																								'value' 					=> array('1'),
																							),	
																		'group'			=> $group_small_settings,																		 
																	),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Comment Count', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_comment_small', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o_small',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_small_settings,																	
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Like', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_like_small', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o_small',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_small_settings,																	
																),																
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Share', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_share_small', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o_small',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_small_settings,																	
																),
																array(
																	'type' 			=> 'textarea',
																	'heading' 		=> __('[Post Meta 1] - Custom Post Meta', 'cb_blocks_layouts'), 
																	'param_name' 	=> 'custom_meta_o_small', //Done
																	'description' 	=> __('Enter custom post meta - Example: <br><code>[fontAwesome Icon]|[Your Post Meta Key]</code> 
																					   <br><code>fa fa-eye|beteplug_post_views_count,fa fa-calendar-check-o|MipTheme_Post_Views</code>', 'cb_blocks_layouts'), 
																	'value'			=> '',	
																	'dependency' 	=> array(
																							'element' 					=> 's_metas_o_small',
																							'value' 					=> array('1'),
																						),	
																	'group'			=> $group_small_settings,																		 
																),
															array( // Title color
																'type'			=> 'colorpicker',
																'heading' 		=> __('Title Color', 'cb_blocks_layouts'),
																'param_name' 	=> 'title_color_small',
																'dependency' 	=> array(
																					'element'			 			=> 'layout_style',
																					'value' 						=> array('3'),
																				   ),
																'group'			=> $group_small_settings,
																'description' 	=> __('If blank, defaults to <code>#222222</code>', 'cb_blocks_layouts'),	
															),
															array(
																'type'			=> 'colorpicker',
																'heading' 		=> __('Title [Hover] Color', 'cb_blocks_layouts'),
																'param_name' 	=> 'title_hover_color_small',
																'dependency' 	=> array(
																					'element'			 			=> 'layout_style',
																					'value' 						=> array('3'),
																				   ),
																'group'			=> $group_small_settings,
																'description' 	=> __('If blank, defaults to <code>#666666</code>', 'cb_blocks_layouts'),	
															),
															
															array( // Metas Color
																'type'			=> 'colorpicker',
																'heading' 		=> __('Metas 1 Color', 'cb_blocks_layouts'),
																'param_name' 	=> 'metas_o_color_small',
																'dependency' 	=> array(
																					'element'			 			=> 'layout_style',
																					'value' 						=> array('3'),
																				   ),
																'group'			=> $group_small_settings,
																'description' 	=> __('If blank, defaults to <code>#999999</code>', 'cb_blocks_layouts'),	
															),
															array(
																'type'			=> 'colorpicker',
																'heading' 		=> __('Metas 1 [Hover] Color', 'cb_blocks_layouts'),
																'param_name' 	=> 'metas_o_hover_color_small',
																'dependency' 	=> array(
																					'element'			 			=> 'layout_style',
																					'value' 						=> array('3'),
																				   ),
																'group'			=> $group_small_settings,
																'description' 	=> __('If blank, defaults to <code>#3c3c3c</code>', 'cb_blocks_layouts'),	
															),	
														//Options For CONTENT BLOCKS
														
																												
														//Image Size
															array( // work with GRID, SLIDER, CAROUSEL, CONTENT BLOCKS, LIST, GALLERY, TIMELINE
																'type' 			=> 'dropdown',
																'heading' 		=> __('Image Size', 'cb_blocks_layouts'),
																'param_name' 	=> 'image_size', //Done
																'description' 	=> __('Work with Layout Styles: GRID, SLIDER, CAROUSEL, CONTENT BLOCKS, LIST, GALLERY, TIMELINE.', 'cb_blocks_layouts'),
																'value' 		=> $array_image_size,
																'dependency' 	=> array(
																					'element'			 			=> 'layout_style',
																					'value' 						=> array('0', '1', '2', '3', '4', '8', '9'),
																				   ),				   
																'group'			=> $group_layout_settings,																	
															),
															array( // work with GRID, SLIDER, CAROUSEL, CONTENT BLOCKS, LIST, GALLERY, TIMELINE
																'type' 			=> 'dropdown',
																'heading' 		=> __('Image Size (small item)', 'cb_blocks_layouts'),
																'param_name' 	=> 'image_size_s', //Done
																'description' 	=> __('Work with Layout Styles: CONTENT BLOCKS (small item).', 'cb_blocks_layouts'),
																'value' 		=> $array_image_size,
																'dependency' 	=> array(
																					'element'			 			=> 'layout_style',
																					'value' 						=> array('3'),
																				   ),				   
																'group'			=> $group_layout_settings,																	
															),
														//Image Size
														
														//options for show elements
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show [Image]', 'cb_blocks_layouts'),
																'param_name' 	=> 's_image', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),																				   
																'group'			=> $group_layout_settings,																	
															),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Image] Link', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_image_link', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_image',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Image] Open Link In New Tab', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_image_link_target', //Done
																		'value' 		=> array(	
																								__('No', 'cb_blocks_layouts') 	=> '0',																		
																								__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_image_link',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_layout_settings,																	
																	),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Image] Show Icon Video Lightbox', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_icon_lightbox_video', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_image',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Video] URL - Post Meta', 'cb_blocks_layouts'),
																		'param_name' 	=> 'video_url_meta', //Done
																		'value' 		=> array(	
																								__('Using Post Meta (create by: Beeteam368)', 'cb_blocks_layouts') 	=> '0',																		
																								__('Enter Your Post Meta (Key)', 'cb_blocks_layouts') 				=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_icon_lightbox_video',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_layout_settings,																	
																	),
																	array(
																		'type' 			=> 'textarea',
																		'heading' 		=> __('[Video] URL - Your Post Meta (Key)', 'cb_blocks_layouts'), 
																		'param_name' 	=> 'video_url_meta_key', //Done
																		'description' 	=> __('Information which contains a link to the video will be opened on lightbox. Example: 
																							  <code>_ultimate_layouts_video_link</code>', 'cb_blocks_layouts'), 
																		'value'			=> '',	
																		'dependency' 	=> array(
																								'element' 					=> 'video_url_meta',
																								'value' 					=> array('1'),
																							),	
																		'group'			=> $group_layout_settings,																		 
																	),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Image] Show Icon Image Lightbox', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_icon_lightbox_image', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_image',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Image] Show Icon Link', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_icon_link', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),
																	'dependency' 	=> array(
																						'element'			 			=> 's_image',
																						'value' 						=> array('1'),
																					   ),																									   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Icon Link] Open Link In New Tab', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_icon_link_target', //Done
																		'value' 		=> array(	
																								__('No', 'cb_blocks_layouts') 	=> '0',																		
																								__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_icon_link',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_layout_settings,																	
																	),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Image] Hover Effect', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_image_hover_effect', //Done
																	'value' 		=> array(	
																							__('Disabled', 'cb_blocks_layouts') 		=> '0',																		
																							__('Zoom Out', 'cb_blocks_layouts') 		=> '1',
																							__('Zoom Out Slow', 'cb_blocks_layouts') 	=> '2',
																							__('Zoom In', 'cb_blocks_layouts') 		=> '3',
																							__('Zoom In Slow', 'cb_blocks_layouts') 	=> '4',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_image',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Image] Overlay Hover Effect', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_overlay_hover_effect', //Done
																	'value' 		=> array(	
																							__('Disabled', 'cb_blocks_layouts') 					=> '',																		
																							__('Fade', 'cb_blocks_layouts') 						=> 'ultimate-layouts-hover-css-fade',
																							__('Sweep To Right', 'cb_blocks_layouts') 			=> 'ultimate-layouts-hover-css-sweep-to-right',
																							__('Sweep To Left', 'cb_blocks_layouts') 				=> 'ultimate-layouts-hover-css-sweep-to-left',
																							__('Sweep To Bottom', 'cb_blocks_layouts') 			=> 'ultimate-layouts-hover-css-sweep-to-bottom',
																							__('Sweep To Top', 'cb_blocks_layouts') 				=> 'ultimate-layouts-hover-css-sweep-to-top',
																							__('Bounce To Right', 'cb_blocks_layouts') 			=> 'ultimate-layouts-hover-css-bounce-to-right',
																							__('Bounce To Left', 'cb_blocks_layouts') 			=> 'ultimate-layouts-hover-css-bounce-to-left',
																							__('Bounce To Bottom', 'cb_blocks_layouts') 			=> 'ultimate-layouts-hover-css-bounce-to-bottom',
																							__('Bounce To Top', 'cb_blocks_layouts') 				=> 'ultimate-layouts-hover-css-bounce-to-top',
																							__('Radial Out', 'cb_blocks_layouts') 				=> 'ultimate-layouts-hover-css-radial-out',
																							__('Radial In', 'cb_blocks_layouts') 					=> 'ultimate-layouts-hover-css-radial-in',
																							__('Rectangle In', 'cb_blocks_layouts') 				=> 'ultimate-layouts-hover-css-rectangle-in',
																							__('Rectangle Out', 'cb_blocks_layouts') 				=> 'ultimate-layouts-hover-css-rectangle-out',
																							__('Shutter In Horizontal', 'cb_blocks_layouts') 		=> 'ultimate-layouts-hover-css-shutter-in-horizontal',
																							__('Shutter Out Horizontal', 'cb_blocks_layouts') 	=> 'ultimate-layouts-hover-css-shutter-out-horizontal',
																							__('Shutter In Vertical', 'cb_blocks_layouts') 		=> 'ultimate-layouts-hover-css-shutter-in-vertical',
																							__('Shutter Out Vertical', 'cb_blocks_layouts') 		=> 'ultimate-layouts-hover-css-shutter-out-vertical',																																																							
																						),
																	'dependency' 	=> array(
																						'element'			 			=> 's_image',
																						'value' 						=> array('1'),
																					   ),																									   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Overlay] Settings', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_overlay_settings', //Done
																		'value' 		=> array(	
																								__('Background - Static Color', 'cb_blocks_layouts') 						=> '0',																		
																								__('Background - TERM/CATEGORY BACKGROUND COLOR', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_overlay_hover_effect',
																							'value_not_equal_to' 			=> array(''),
																						   ),																								   
																		'group'			=> $group_layout_settings,																	
																	),
																array(
																	'type'			=> 'colorpicker',
																	'heading' 		=> __('[Image] Overlay Color', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_overlay_color', //Done
																	'description' 	=> __('If blank, defaults to <code>rgba(255,255,255,0.38)</code>', 'cb_blocks_layouts'),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_overlay_settings',
																						'value' 						=> array('0'),
																					   ),	
																	'group'			=> $group_layout_settings,
																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('Post Format Icon', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_image_post_format', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_image',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('Format Icon Position', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_image_post_format_pos', //Done
																		'value' 		=> array(	
																								__('Bottom - Right', 'cb_blocks_layouts') 	=> 'ul-bottom-right',																		
																								__('Bottom - Left', 'cb_blocks_layouts') 	=> 'ul-bottom-left',
																								__('Top - Right', 'cb_blocks_layouts') 		=> 'ul-top-right',
																								__('Top - Left', 'cb_blocks_layouts') 		=> 'ul-top-left',
																								__('Center - Center', 'cb_blocks_layouts') 	=> 'ul-center-center',																																																						
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_image_post_format',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_layout_settings,																	
																	),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Title', 'cb_blocks_layouts'),
																'param_name' 	=> 's_title', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),																				   
																'group'			=> $group_layout_settings,																	
															),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Title] Limit Element To 01 Line', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_title_limit', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_title',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Title] Link', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_title_link', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_title',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Title] Open Link In New Tab', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_title_link_target', //Done
																		'value' 		=> array(	
																								__('No', 'cb_blocks_layouts') 	=> '0',																		
																								__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_title_link',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_layout_settings,																	
																	),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Excerpt', 'cb_blocks_layouts'),
																'param_name' 	=> 's_excerpt', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),	
																'dependency' 	=> 	array(
																					'element'			 	=> 'layout_style',
																					'value_not_equal_to' 	=> array('2', '5'),
																				),																								   
																'group'			=> $group_layout_settings,																	
															),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Excerpt] Readmore Button', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_excerpt_rbtn', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																															
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_excerpt',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Excerpt] Wordpress Function', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_excerpt_f', //Done
																	'value' 		=> array(	
																							__('get_the_excerpt()', 'cb_blocks_layouts') 	=> 'get_the_excerpt',																		
																							__('the_excerpt()', 'cb_blocks_layouts') 		=> 'the_excerpt',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_excerpt',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Excerpt] Strip Shortcodes', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_excerpt_sc', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_excerpt',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Excerpt] Strip HTML Tags', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_excerpt_sh', //Done
																	'description' 	=> __('If you disable this option, you\'ll probably have to custom CSS to match your theme.', 'cb_blocks_layouts'),
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_excerpt',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'textfield',
																		'heading' 		=> __('[Excerpt] Length', 'cb_blocks_layouts'), 
																		'param_name' 	=> 's_excerpt_length', //Done
																		'description' 	=> __('Enter excerpt length. Example: <code>100</code>, <code>150</code>, <code>55</code>... - Default = blank', 'cb_blocks_layouts'), 
																		'value'			=> '',	
																		'dependency' 	=> array(
																								'element' 					=> 's_excerpt_sh',
																								'value' 					=> array('1'),
																							),	
																		'group'			=> $group_layout_settings,																		 
																	),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Categories, Taxonomies, Tags ...', 'cb_blocks_layouts'),
																'param_name' 	=> 's_categories', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),																				   
																'group'			=> $group_layout_settings,																	
															),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Style', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_s_categories', //Done
																	'value' 		=> array(	
																							__('Inline Block', 'cb_blocks_layouts') 		=> '0',																		
																							__('Inline Text', 'cb_blocks_layouts') 		=> '1',																																																							
																						),		
																	'dependency' 	=> array(
																						'element'			 			=> 's_categories',
																						'value' 						=> array('1'),
																					   ),																							   
																	'group'			=> $group_layout_settings,																	
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Get Only Parent', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_s_categories_parent', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 		=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 		=> '1',																																																							
																						),		
																	'dependency' 	=> array(
																						'element'			 			=> 's_categories',
																						'value' 						=> array('1'),
																					   ),																							   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type' 				=> 'textfield', //Done
																	'heading' 			=> __('[Categories, Taxonomies, Tags ...] HIDE taxonomies...', 'cb_blocks_layouts'),			
																	'param_name' 		=> 'ex_items_taxonomies',
																	'dependency' 		=> array(
																								'element' 	=> 	's_categories',
																								'value' 	=> 	array('1'),
																							),		
																	'description' 		=> __('List of "Taxonomies" do not want to display on layout, separated by a comma. 
																							  Example: <code>category</code>, <code>post_tag</code>, <code>product_cat</code>... 
																							  <br><br> Full List: '.$taxonomies_string, 'cb_blocks_layouts'),	
																	'group'				=> $group_layout_settings,								
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Color Settings', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_c_categories', //Done
																	'value' 		=> array(	
																							__('TERM/CATEGORY BACKGROUND & COLOR', 'cb_blocks_layouts') 		=> '0',																		
																							__('Static Color', 'cb_blocks_layouts') 							=> '1',																																																							
																						),		
																	'dependency' 	=> array(
																						'element'			 			=> 's_categories',
																						'value' 						=> array('1'),
																					   ),																							   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type'			=> 'colorpicker',
																	'heading' 		=> __('[Categories, Taxonomies, Tags] Text Color', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_ct_categories', //Done
																	'dependency' 	=> array(
																						'element'			 			=> 's_c_categories',
																						'value' 						=> array('1'),
																					   ),	
																	'group'			=> $group_layout_settings,
																	
																),
																array(
																	'type'			=> 'colorpicker',
																	'heading' 		=> __('[Categories, Taxonomies, Tags] Background Color', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_cb_categories', //Done
																	'description' 	=> __('Work with [Categories, Taxonomies, Tags ...] Style: Inline Block', 'cb_blocks_layouts'),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_c_categories',
																						'value' 						=> array('1'),
																					   ),	
																	'group'			=> $group_layout_settings,
																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Open Link In New Tab', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_categories_target', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_categories',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Post Meta 1', 'cb_blocks_layouts'),
																'param_name' 	=> 's_metas_o', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),																				   
																'group'			=> $group_layout_settings,																	
															),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Author', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_author', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array( 
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Post Meta 1] Show Author Avatar', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_metas_o_author_avatar', //Done
																		'value' 		=> array(	
																								__('No', 'cb_blocks_layouts') 	=> '0',																		
																								__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_metas_o_author',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_layout_settings,																	
																	),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Date/Time', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_time', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'textfield',
																		'heading' 		=> __('[Post Meta 1] - [Date/Time] Format', 'cb_blocks_layouts'), 
																		'param_name' 	=> 'time_format', //Done
																		'description' 	=> __('Enter date/time format - <a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank">Tutorial</a>. 
																						   If blank, defaults to: <code>F j, Y</code>', 'cb_blocks_layouts'), 
																		'value'			=> '',	
																		'dependency' 	=> array(
																								'element' 					=> 's_metas_o_time',
																								'value' 					=> array('1'),
																							),	
																		'group'			=> $group_layout_settings,																		 
																	),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Comment Count', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_comment', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Like', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_like', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),																
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 1] Show Share', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_o_share', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_o',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type' 			=> 'textarea',
																	'heading' 		=> __('[Post Meta 1] - Custom Post Meta', 'cb_blocks_layouts'), 
																	'param_name' 	=> 'custom_meta_o', //Done
																	'description' 	=> __('Enter custom post meta - Example: <br><code>[fontAwesome Icon]|[Your Post Meta Key]</code> 
																					   <br><code>fa fa-eye|beteplug_post_views_count,fa fa-calendar-check-o|MipTheme_Post_Views</code>', 'cb_blocks_layouts'), 
																	'value'			=> '',	
																	'dependency' 	=> array(
																							'element' 					=> 's_metas_o',
																							'value' 					=> array('1'),
																						),	
																	'group'			=> $group_layout_settings,																		 
																),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Post Meta 2', 'cb_blocks_layouts'),
																'param_name' 	=> 's_metas_t', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),	
																'dependency' 	=> 	array(
																					'element'			 	=> 'layout_style',
																					'value_not_equal_to' 	=> array('1', '2', '5'),
																				),																								   
																'group'			=> $group_layout_settings,																	
															),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 2] Show Author', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_t_author', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_t',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array( 
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Post Meta 2] Show Author Avatar', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_metas_t_author_avatar', //Done
																		'value' 		=> array(	
																								__('No', 'cb_blocks_layouts') 	=> '0',																		
																								__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_metas_t_author',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_layout_settings,																	
																	),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 2] Show Date/Time', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_t_time', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_t',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'textfield',
																		'heading' 		=> __('[Post Meta 2] - [Date/Time] Format', 'cb_blocks_layouts'), 
																		'param_name' 	=> 'time_format_t', //Done
																		'description' 	=> __('Enter date/time format - <a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank">Tutorial</a>. 
																						   If blank, defaults to: <code>F j, Y</code>', 'cb_blocks_layouts'), 
																		'value'			=> '',	
																		'dependency' 	=> array(
																								'element' 					=> 's_metas_t_time',
																								'value' 					=> array('1'),
																							),	
																		'group'			=> $group_layout_settings,																		 
																	),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 2] Show Comment Count', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_t_comment', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_t',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 2] Show Like', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_t_like', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																						
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_t',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),																
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 2] Show Share', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_t_share', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_t',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																array(
																	'type' 			=> 'textarea',
																	'heading' 		=> __('[Post Meta 2] - Custom Post Meta', 'cb_blocks_layouts'), 
																	'param_name' 	=> 'custom_meta_t', //Done
																	'description' 	=> __('Enter custom post meta - Example: <br><code>[fontAwesome Icon]|[Your Post Meta Key]</code> 
																					   <br><code>fa fa-eye|beteplug_post_views_count,fa fa-calendar-check-o|MipTheme_Post_Views</code>', 'cb_blocks_layouts'), 
																	'value'			=> '',	
																	'dependency' 	=> array(
																							'element' 					=> 's_metas_t',
																							'value' 					=> array('1'),
																						),	
																	'group'			=> $group_layout_settings,																		 
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta 2] Read More Button', 'cb_blocks_layouts'),
																	'param_name' 	=> 's_metas_t_readmore', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 's_metas_t',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_layout_settings,																	
																),
																	array(
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Post Meta 2] [Read More Button] Open Link In New Tab', 'cb_blocks_layouts'),
																		'param_name' 	=> 's_metas_t_readmore_link_target', //Done
																		'value' 		=> array(	
																								__('No', 'cb_blocks_layouts') 	=> '0',																		
																								__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 's_metas_t_readmore',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_layout_settings,																	
																	),
																	
															array(
																'type' 				=> 'textfield',
																'heading' 			=> __('Share Text', 'cb_blocks_layouts'), 
																'param_name' 		=> 'share_text', //Done														
																'value'				=> '',	
																'group'				=> $group_layout_settings,
															),
															array(
																'type' 				=> 'textfield',
																'heading' 			=> __('Read More Text', 'cb_blocks_layouts'), 
																'param_name' 		=> 'read_more_text', //Done														
																'value'				=> '',	
																'group'				=> $group_layout_settings,
															),	
															array(
																'type' 				=> 'textfield',
																'heading' 			=> __('The Text Before The author\'s name', 'cb_blocks_layouts'), 
																'param_name' 		=> 'before_author_text', //Done														
																'value'				=> '',	
																'group'				=> $group_layout_settings,
															),	
														//options for show elements
														
														//LazyLoad
														array( 
															'type' 			=> 'dropdown',
															'heading' 		=> __('Lazyload Images', 'cb_blocks_layouts'),
															'param_name' 	=> 'lazyload', //Done
															'description' 	=> __('Lazyload does not support "Carousel Styles"', 'cb_blocks_layouts'),
															'value' 		=> array(	
																					__('No', 'cb_blocks_layouts') 				=> '0',																		
																					__('Yes', 'cb_blocks_layouts') 				=> '1',																																																						
																				),
															'dependency' 	=> 	array(
																					'element'			 	=> 'layout_style',
																					'value_not_equal_to' 	=> array('1', '2'),
																				),					
															'group'			=> $group_layout_settings,																	
														),														
															array(
																'type'			=> 'colorpicker',
																'heading' 		=> __('[Lazyload] - Placeholder Background', 'cb_blocks_layouts'),
																'param_name' 	=> 'lazyload_p', //Done
																'dependency' 	=> array(
																					'element'			 			=> 'lazyload',
																					'value' 						=> array('1'),
																				   ),	
																'group'			=> $group_layout_settings,
																
															),
														//LazyLoad
														
														//GeoDirectory
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('GeoDirectory Rating', 'cb_blocks_layouts'),
															'param_name' 	=> 'geodirectory_rating',
															'value' 		=> array(			
																				__('Disabled', 'ultimate_layouts') 	=> '0',		
																				__('Enabled', 'ultimate_layouts') 	=> '1',																																												
																			),
															'description' 	=> __('Work with plugin GeoDirectory: https://wordpress.org/plugins/geodirectory/', 'cb_blocks_layouts'),	
															'dependency' 	=> array(
																				'element'			 			=> 'layout_style',
																				'value' 						=> array('0', '1', '2', '3', '4'),
																			   ),			
															'group'			=> $group_layout_settings,					
														),
														//GeoDirectory
														
														//quick view
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('Quick View', 'cb_blocks_layouts'),
															'param_name' 	=> 'quick_view',
															'value' 		=> array(			
																				__('Enabled', 'cb_blocks_layouts') 	=> '1',													
																				__('Disabled', 'cb_blocks_layouts') 	=> '0',																																												
																			),
															'group'			=> $group_layout_settings,					
														),
															array(
																'type' 			=> 'dropdown',
																'heading' 		=> __('[Quick View] Open Post By', 'cb_blocks_layouts'),
																'param_name' 	=> 'quick_view_mode',
																'description' 	=> __('Open by basic button (or) All links on layout.', 'cb_blocks_layouts'),
																'value' 		=> array(															
																					__('Basic Button', 'cb_blocks_layouts') 			=> '0',	
																					__('All Links on Layout', 'cb_blocks_layouts') 	=> '1',																																																							
																				),
																'dependency' 	=> array(
																					'element'			 			=> 'quick_view',
																					'value' 						=> array('1'),
																				   ),				
																'group'			=> $group_layout_settings,					
															),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Title', 'cb_blocks_layouts'),
																'param_name' 	=> 'qv_s_title', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),
																'dependency' 	=> array(
																						'element'			 			=> 'quick_view',
																						'value' 						=> array('1'),
																					   ),																									   
																'group'			=> $group_quickview_settings,																	
															),
																array(
																	'type' 			=> 'textfield',
																	'heading' 		=> __('[Title] Font Size', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_title_font_size',
																	'description' 	=> __('<strong>Example:</strong> <code>14px</code>, <code>16px</code> ...', 'cb_blocks_layouts'),		
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_title',
																						'value' 						=> array('1'),
																					   ),														
																	'group'			=> $group_quickview_settings,					
																),
																array(
																	'type' 			=> 'textfield',
																	'heading' 		=> __('[Title] Font Letter Spacing', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_title_letter_spacing',
																	'description' 	=> __('<strong>Example:</strong> <code>1px</code>, <code>0.1em</code> ... If blank, defaults to <code>0.075em</code>', 'cb_blocks_layouts'),
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_title',
																						'value' 						=> array('1'),
																					   ),															
																	'group'			=> $group_quickview_settings,					
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Title] Font Weight', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_title_font_weight',
																	'value' 		=> $array_font_weight,
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_title',
																						'value' 						=> array('1'),
																					   ),
																	'group'			=> $group_quickview_settings,					
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Title] Font Style', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_title_font_style',
																	'value' 		=> $array_font_style,
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_title',
																						'value' 						=> array('1'),
																					   ),
																	'group'			=> $group_quickview_settings,					
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Title] Text Transform', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_title_text_transform',
																	'value' 		=> $array_text_transform,
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_title',
																						'value' 						=> array('1'),
																					   ),
																	'group'			=> $group_quickview_settings,					
																),
																array(
																	'type' 			=> 'textfield',
																	'heading' 		=> __('[Title] Line Height', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_title_line_height',
																	'description' 	=> __('<strong>Example:</strong> <code>15px</code>, <code>1.55em</code> ...', 'cb_blocks_layouts'),		
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_title',
																						'value' 						=> array('1'),
																					   ),													
																	'group'			=> $group_quickview_settings,					
																),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Categories, Taxonomies, Tags ...', 'cb_blocks_layouts'),
																'param_name' 	=> 'qv_s_categories', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),		
																'dependency' 	=> array(
																						'element'			 			=> 'quick_view',
																						'value' 						=> array('1'),
																					   ),																							   
																'group'			=> $group_quickview_settings,																	
															),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Style', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_s_categories', //Done
																	'value' 		=> array(	
																							__('Inline Block', 'cb_blocks_layouts') 		=> '0',																		
																							__('Inline Text', 'cb_blocks_layouts') 		=> '1',																																																							
																						),		
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_categories',
																						'value' 						=> array('1'),
																					   ),																							   
																	'group'			=> $group_quickview_settings,																	
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Get Only Parent', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_s_categories_parent', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 		=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 		=> '1',																																																							
																						),		
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_categories',
																						'value' 						=> array('1'),
																					   ),																							   
																	'group'			=> $group_quickview_settings,																	
																),
																array(
																	'type' 				=> 'textfield', //Done
																	'heading' 			=> __('[Categories, Taxonomies, Tags ...] HIDE taxonomies...', 'cb_blocks_layouts'),			
																	'param_name' 		=> 'qv_ex_items_taxonomies',
																	'dependency' 		=> array(
																								'element' 	=> 	'qv_s_categories',
																								'value' 	=> 	array('1'),
																							),		
																	'description' 		=> __('List of "Taxonomies" do not want to display on layout, separated by a comma. 
																							  Example: <code>category</code>, <code>post_tag</code>, <code>product_cat</code>... 
																							  <br><br> Full List: '.$taxonomies_string, 'cb_blocks_layouts'),	
																	'group'				=> $group_quickview_settings,								
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Color Settings', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_c_categories', //Done
																	'value' 		=> array(	
																							__('TERM/CATEGORY BACKGROUND & COLOR', 'cb_blocks_layouts') 		=> '0',																		
																							__('Static Color', 'cb_blocks_layouts') 							=> '1',																																																							
																						),		
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_categories',
																						'value' 						=> array('1'),
																					   ),																							   
																	'group'			=> $group_quickview_settings,																	
																),
																array(
																	'type'			=> 'colorpicker',
																	'heading' 		=> __('[Categories, Taxonomies, Tags] Text Color', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_ct_categories', //Done
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_c_categories',
																						'value' 						=> array('1'),
																					   ),	
																	'group'			=> $group_quickview_settings,
																	
																),
																array(
																	'type'			=> 'colorpicker',
																	'heading' 		=> __('[Categories, Taxonomies, Tags] Background Color', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_cb_categories', //Done
																	'description' 	=> __('Work with [Categories, Taxonomies, Tags ...] Style: Inline Block', 'cb_blocks_layouts'),	
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_c_categories',
																						'value' 						=> array('1'),
																					   ),	
																	'group'			=> $group_quickview_settings,
																	
																),
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Categories, Taxonomies, Tags ...] Open Link In New Tab', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_categories_target', //Done
																	'value' 		=> array(	
																							__('No', 'cb_blocks_layouts') 	=> '0',																		
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_categories',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_quickview_settings,																	
																),
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Post Meta\'s', 'cb_blocks_layouts'),
																'param_name' 	=> 'qv_s_metas_o', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),	
																'dependency' 	=> array(
																						'element'			 			=> 'quick_view',
																						'value' 						=> array('1'),
																					   ),																								   
																'group'			=> $group_quickview_settings,																	
															),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta\'s] Show Author', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_metas_o_author', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_metas_o',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_quickview_settings,																	
																),
																	array( 
																		'type' 			=> 'dropdown',
																		'heading' 		=> __('[Post Meta\'s] Show Author Avatar', 'cb_blocks_layouts'),
																		'param_name' 	=> 'qv_s_metas_o_author_avatar', //Done
																		'value' 		=> array(	
																								__('No', 'cb_blocks_layouts') 	=> '0',																		
																								__('Yes', 'cb_blocks_layouts') 	=> '1',																																																							
																							),	
																		'dependency' 	=> array(
																							'element'			 			=> 'qv_s_metas_o_author',
																							'value' 						=> array('1'),
																						   ),																								   
																		'group'			=> $group_quickview_settings,																	
																	),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta\'s] Show Date/Time', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_metas_o_time', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_metas_o',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_quickview_settings,																	
																),
																	array(
																		'type' 			=> 'textfield',
																		'heading' 		=> __('[Post Meta\'s] - [Date/Time] Format', 'cb_blocks_layouts'), 
																		'param_name' 	=> 'qv_time_format', //Done
																		'description' 	=> __('Enter date/time format - <a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank">Tutorial</a>. 
																						   If blank, defaults to: <code>F j, Y</code>', 'cb_blocks_layouts'), 
																		'value'			=> '',	
																		'dependency' 	=> array(
																								'element' 					=> 'qv_s_metas_o_time',
																								'value' 					=> array('1'),
																							),	
																		'group'			=> $group_quickview_settings,																		 
																	),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta\'s] Show Comment Count', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_metas_o_comment', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																							__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_metas_o',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_quickview_settings,																	
																),
																array( 
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Post Meta\'s] Show Like', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_s_metas_o_like', //Done
																	'value' 		=> array(	
																							__('Yes', 'cb_blocks_layouts') 	=> '1',	
																							__('No', 'cb_blocks_layouts') 	=> '0',																																														
																						),	
																	'dependency' 	=> array(
																						'element'			 			=> 'qv_s_metas_o',
																						'value' 						=> array('1'),
																					   ),																								   
																	'group'			=> $group_quickview_settings,																	
																),
																array(
																	'type' 			=> 'textarea',
																	'heading' 		=> __('[Post Meta 1] - Custom Post Meta', 'cb_blocks_layouts'), 
																	'param_name' 	=> 'qv_custom_meta_o', //Done
																	'description' 	=> __('Enter custom post meta - Example: <br><code>[fontAwesome Icon]|[Your Post Meta Key]</code> 
																					   <br><code>fa fa-eye|beteplug_post_views_count,fa fa-calendar-check-o|MipTheme_Post_Views</code>', 'cb_blocks_layouts'), 
																	'value'			=> '',	
																	'dependency' 	=> array(
																							'element' 					=> 'qv_s_metas_o',
																							'value' 					=> array('1'),
																						),	
																	'group'			=> $group_quickview_settings,																		 
																),
															array(
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Content', 'cb_blocks_layouts'),
																'param_name' 	=> 'qv_show_content',
																'value' 		=> array(	
																					__('Yes', 'cb_blocks_layouts') 	=> '1',															
																					__('No', 'cb_blocks_layouts') 	=> '0',	
																																																																											
																				),
																'dependency' 	=> array(
																						'element'			 			=> 'quick_view',
																						'value' 						=> array('1'),
																					   ),				
																'group'			=> $group_quickview_settings,					
															),	
																array(
																	'type' 			=> 'dropdown',
																	'heading' 		=> __('[Content] Strip Shortcodes', 'cb_blocks_layouts'),
																	'param_name' 	=> 'qv_content_stripsc',
																	'value' 		=> array(	
																						__('No', 'cb_blocks_layouts') 	=> '0',
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																																																																												
																					),
																	'dependency' 	=> array(
																							'element'			 			=> 'qv_show_content',
																							'value' 						=> array('1'),
																						   ),				
																	'group'			=> $group_quickview_settings,					
																),		
															array(
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Social Share', 'cb_blocks_layouts'),
																'param_name' 	=> 'qv_show_share',
																'value' 		=> array(	
																					__('Yes', 'cb_blocks_layouts') 	=> '1',															
																					__('No', 'cb_blocks_layouts') 	=> '0',	
																																																																											
																				),
																'dependency' 	=> array(
																						'element'			 			=> 'quick_view',
																						'value' 						=> array('1'),
																					   ),				
																'group'			=> $group_quickview_settings,					
															),				
															array(
																'type' 			=> 'dropdown',
																'heading' 		=> __('[wooCommerce] Show Rating', 'cb_blocks_layouts'),
																'param_name' 	=> 'qv_woo_show_rating',
																'value' 		=> array(	
																					__('Yes', 'cb_blocks_layouts') 	=> '1',																
																					__('No', 'cb_blocks_layouts') 	=> '0',																																												
																				),
																'dependency' 	=> array(
																						'element'			 			=> 'quick_view',
																						'value' 						=> array('1'),
																					   ),				
																'group'			=> $group_quickview_settings,					
															),
															
															array( 
																'type' 			=> 'dropdown',
																'heading' 		=> __('Show Featured Image', 'cb_blocks_layouts'),
																'param_name' 	=> 'qv_s_featured_image', //Done
																'value' 		=> array(	
																						__('Yes', 'cb_blocks_layouts') 	=> '1',																		
																						__('No', 'cb_blocks_layouts') 	=> '0',																																																							
																					),
																'dependency' 	=> array(
																						'element'			 			=> 'quick_view',
																						'value' 						=> array('1'),
																					   ),																									   
																'group'			=> $group_quickview_settings,																	
															),
														//quick view
														
														array(
															'type' 				=> 'textfield',
															'heading' 			=> __('Extra Class Name', 'cb_blocks_layouts'), 
															'param_name' 		=> 'extra_class', //Done														
															'value'				=> '',	
															'group'				=> $group_layout_settings,												 
														),
													//Layout Settings
													
													//Custom Query														
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('Post types', 'cb_blocks_layouts'),			
															'param_name' 		=> 'post_types',
															'value' 			=> $bt_post_types_list,
															'description' 		=> __('Select content type for your layout. If you select the "attachment", you will not be able to use the filter. It\'s just a slideshow function available images in your media library.', 'cb_blocks_layouts'),	
															'group'				=> $group_query_settings,
														),	
														array(
															'type' 				=> 'attach_images', //Done
															'heading' 			=> __('INCLUDE Attachment', 'ultimate_layouts'),			
															'param_name' 		=> 'i_attachment',
															'group'				=> $group_query_settings,
															'dependency' 		=> array(
																						'element' 	=> 	'post_types',
																						'value' 	=> 	array('attachment'),
																					),
														),														
														array(
															'type' 				=> 'textfield', //Done
															'heading' 			=> __('Use Multiple "Post Types"', 'cb_blocks_layouts'),			
															'param_name' 		=> 'multi_post_types',
															'dependency' 		=> array(
																						'element' 	=> 	'post_types',
																						'value' 	=> 	array('multi_post_types'),
																					),		
															'description' 		=> __('List of "Post Types" to query items from, separated by a comma. 
																					  Example: <code>post</code>, <code>page</code>, <code>product</code>... 
																					  <br><br> Full List: '.$bt_post_types_string, 'cb_blocks_layouts'),	
															'group'				=> $group_query_settings,								
														),
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('Taxonomies', 'cb_blocks_layouts'),			
															'param_name' 		=> 'taxonomies',
															'value' 			=> $taxonomies_list,
															'description' 		=> __('Works in conjunction with selected "Post types"', 'cb_blocks_layouts'),	
															'group'				=> $group_query_settings,
														),	
														array(
															'type' 				=> 'textfield', //Done
															'heading' 			=> __('Use Multiple "Taxonomies"', 'cb_blocks_layouts'),			
															'param_name' 		=> 'multi_taxonomies',
															'dependency' 		=> array(
																						'element' 	=> 	'taxonomies',
																						'value' 	=> 	array('multi_taxonomies'),
																					),		
															'description' 		=> __('List of "Taxonomies" to query items from, separated by a comma. 
																					  Example: <code>category</code>, <code>post_tag</code>, <code>product_cat</code>... 
																					  <br><br> Full List: '.$taxonomies_string, 'cb_blocks_layouts'),	
															'group'				=> $group_query_settings,								
														),	
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('Query Types', 'cb_blocks_layouts'),			
															'param_name' 		=> 'query_types',
															'value' 			=> array(	
																					__('Query Type 1: INCLUDE categories, tags, taxonomies...', 'cb_blocks_layouts') 			=> '0',																		
																					__('Query Type 2: EXCLUDE categories, tags, taxonomies...', 'cb_blocks_layouts') 			=> '1',	
																					__('Query Type 3: INCLUDE Posts/Pages/Custom Post Types...', 'cb_blocks_layouts') 		=> '2',																																																																										
																				),
															'description' 		=> __('Select the type of query.', 'cb_blocks_layouts'),	
															'group'				=> $group_query_settings,
														),													
														array(
															'type' 				=> 'autocomplete', //Done
															'heading' 			=> __('INCLUDE categories, tags, taxonomies...', 'cb_blocks_layouts'),		
															'param_name' 		=> 'i_taxonomies',
															'description' 		=> __('Enter categories, tags, taxonomies... be shown posts in the layout.', 'cb_blocks_layouts'), 
															'settings' 			=> array(
																						'multiple' 					=> true,																					
																						'min_length' 				=> 1,
																						'groups' 					=> true,
																						'unique_values' 			=> true,
																						'display_inline' 			=> true,
																						'delay' 					=> 500,
																						'auto_focus' 				=> true,
																				   ),
															'group'				=> $group_query_settings,	
															'dependency' 		=> array(
																						'element' 	=> 	'query_types',
																						'value' 	=> 	array('0'),
																					),													
														),
														array(
															'type' 				=> 'autocomplete', //Done
															'heading' 			=> __('EXCLUDE categories, tags, taxonomies...', 'cb_blocks_layouts'),		
															'param_name' 		=> 'e_taxonomies',
															'description' 		=> __('Enter categories, tags, taxonomies... won\'t be shown posts in the layout. 
																					  These taxonomies are removed will not be added to the list of filters.', 'cb_blocks_layouts'), 
															'settings' 			=> array(
																						'multiple' 					=> true,																					
																						'min_length' 				=> 1,
																						'groups' 					=> true,
																						'unique_values' 			=> true,
																						'display_inline' 			=> true,
																						'delay' 					=> 500,
																						'auto_focus' 				=> true,
																				   ),
															'group'				=> $group_query_settings,	
															'dependency' 		=> array(
																						'element' 	=> 	'query_types',
																						'value' 	=> 	array('1'),
																					),													
														),
														array(
															'type' 				=> 'autocomplete', //Done
															'heading' 			=> __('EXCLUDE Posts/Pages/Custom Post Types', 'cb_blocks_layouts'), 
															'param_name' 		=> 'e_ids',
															'description' 		=> __('Only entered posts/pages will be "EXCLUDED" in the output. Note: Works in conjunction with selected "Post types".', 'cb_blocks_layouts'),   
															'settings' 			=> array(
																						'multiple' 					=> true,																					
																						'min_length' 				=> 2,
																						'groups' 					=> true,
																						'unique_values' 			=> true,
																						'display_inline' 			=> true,
																						'delay' 					=> 500,
																						'auto_focus' 				=> true,
																				   ),
															'group'				=> $group_query_settings,
															'dependency' 		=> array(
																						'element' 	=> 	'query_types',
																						'value' 	=> 	array('0', '1'),
																					),						   
														),	
														array(
															'type' 				=> 'autocomplete', //Done
															'heading' 			=> __('INCLUDE Posts/Pages/Custom Post Types', 'cb_blocks_layouts'), 
															'param_name' 		=> 'i_ids',
															'description' 		=> __('Only entered posts/pages will be "INCLUDED" in the output. Note: Works in conjunction with selected "Post types".', 'cb_blocks_layouts'),   
															'settings' 			=> array(
																						'multiple' 					=> true,																					
																						'min_length' 				=> 2,
																						'groups' 					=> true,
																						'unique_values' 			=> true,
																						'display_inline' 			=> true,
																						'delay' 					=> 500,
																						'auto_focus' 				=> true,
																				   ),
															'group'				=> $group_query_settings,	
															'dependency' 		=> array(
																						'element' 	=> 	'query_types',
																						'value' 	=> 	array('2'),
																					),					   
														),
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('Order By', 'cb_blocks_layouts'),			
															'param_name' 		=> 'order_by',
															'value' 			=> array(	
																					__('Date', 'cb_blocks_layouts') 					=> 'date',																		
																					__('Order by post ID', 'cb_blocks_layouts') 		=> 'ID',
																					__('Author', 'cb_blocks_layouts') 				=> 'author',
																					__('Title', 'cb_blocks_layouts') 					=> 'title',
																					__('Last modified date', 'cb_blocks_layouts') 	=> 'modified',
																					__('Post/page parent ID', 'cb_blocks_layouts') 	=> 'parent',
																					__('Number of comments', 'cb_blocks_layouts') 	=> 'comment_count',
																					__('Menu order/Page Order', 'cb_blocks_layouts') 	=> 'menu_order',
																					__('Random order', 'cb_blocks_layouts') 			=> 'rand',
																					__('Meta Value', 'cb_blocks_layouts') 			=> 'meta_value',
																					__('Meta Value Number', 'cb_blocks_layouts') 		=> 'meta_value_num',
																					__('Preserve post ID order', 'cb_blocks_layouts') => 'post__in',																																																							
																				),
															'description' 		=> __('Select order type. If "Meta value" or "Meta value Number" is chosen then meta key is required.', 'cb_blocks_layouts'),	
															'group'				=> $group_query_settings,
														),	
														array(															
															'type' 				=> 'textfield', //Done
															'heading' 			=> __('Meta Key', 'cb_blocks_layouts'),
															'param_name' 		=> 'meta_key_query',
															'description' 		=> __('Input meta key for grid ordering.', 'cb_blocks_layouts'),															
															'group'				=> $group_query_settings,	
															'dependency' 		=> array(
																						'element' 	=> 	'order_by',
																						'value' 	=> 	array('meta_value', 'meta_value_num'),
																					),					
														),
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('Sort Order', 'cb_blocks_layouts'),			
															'param_name' 		=> 'order',
															'value' 			=> array(	
																					__('Descending', 'cb_blocks_layouts') 			=> 'DESC',																		
																					__('Ascending', 'cb_blocks_layouts') 				=> 'ASC',																																																																											
																				),
															'description' 		=> __('Select sorting order.', 'cb_blocks_layouts'),	
															'group'				=> $group_query_settings,
														),
														array(															
															'type' 				=> 'textfield', //Done
															'heading' 			=> __('Author', 'cb_blocks_layouts'),
															'param_name' 		=> 'query_author',
															'description' 		=> __(	'Use author id, separated by a comma, ex: <code>1,2,3</code>. 
																						[use minus (-) to exclude authors by ID ex: <code>-1,-2,-3</code>]', 'cb_blocks_layouts'),															
															'group'				=> $group_query_settings,
														),
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('Include Children', 'cb_blocks_layouts'),			
															'param_name' 		=> 'query_include_children',
															'value' 			=> array(	
																					__('YES', 'cb_blocks_layouts') 			=> '1',																		
																					__('NO', 'cb_blocks_layouts') 			=> '0',																																																																											
																				),
															'description' 		=> __('Whether or not to include children for hierarchical taxonomies. Defaults to YES.', 'cb_blocks_layouts'),	
															'group'				=> $group_query_settings,
														),
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('Query Date', 'ultimate_layouts'),			
															'param_name' 		=> 'today_post',
															'value' 			=> array(
																					__('NO', 'ultimate_layouts') 							=> '0',
																					__('Only return today\'s post', 'cb_blocks_layouts') 	=> '1',
																					__('From today onwards', 'cb_blocks_layouts') 			=> '2',
																					__('Within 36 hours', 'cb_blocks_layouts') 				=> '3',
																					__('Within 48 hours', 'cb_blocks_layouts') 				=> '4',
																					__('Within 60 hours', 'cb_blocks_layouts') 				=> '5',
																					__('Within 72 hours', 'cb_blocks_layouts') 				=> '6',
																				),
															'description' 		=> __('If you want to return today\'s post then you select YES.', 'cb_blocks_layouts'),	
															'group'				=> $group_query_settings,
														),
														array(															
															'type' 				=> 'textfield', //Done
															'heading' 			=> __('DateTime Meta Key', 'cb_blocks_layouts'),
															'param_name' 		=> 'datetime_meta',		
															'dependency' 		=> array(
																					'element'			 			=> 'today_post',
																					'value' 						=> array('1', '2', '3', '4', '5', '6'),
																				   ),	
															'description' 		=> __('Support Date Format: YYYY-MM-DD.', 'cb_blocks_layouts'),						   																											
															'group'				=> $group_query_settings,																				
														),
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('WooCommerce Query', 'ultimate_layouts'),			
															'param_name' 		=> 'woo_query',
															'value' 			=> array(
																					__('NONE', 'ultimate_layouts') 							=> '0',
																					__('Sale Products', 'ultimate_layouts') 				=> '1',
																					/*__('Best-Selling Products', 'ultimate_layouts') 		=> '2',
																					__('Top Rated Products', 'ultimate_layouts') 			=> '3',*/
																				),	
															'dependency' 		=> array(
																					'element'			 			=> 'today_post',
																					'value' 						=> array('0'),
																				   ),																			
															'group'				=> $group_query_settings,
														),
														array(															
															'type' 				=> 'textfield', //Done
															'heading' 			=> __('Offset', 'cb_blocks_layouts'),
															'param_name' 		=> 'query_offset',
															'description' 		=> __(	'Number of post to displace or pass over.<br>
																						Warning: Setting the offset parameter overrides/ignores the paged parameter and breaks pagination. 
																						For a workaround see: http://codex.wordpress.org/Making_Custom_Queries_using_Offset_and_Pagination.<br>
																						The \'offset\' parameter is ignored when \'posts_per_page\'=>-1 (show all posts) is used.', 'cb_blocks_layouts'),															
															'group'				=> $group_query_settings,																				
														),
														array(															
															'type' 				=> 'textfield', //Done
															'heading' 			=> __('Post Count', 'cb_blocks_layouts'),
															'param_name' 		=> 'post_count',
															'description' 		=> __('Set max limit for items in grid or enter -1 to display all. If blank, defaults to: 50', 'cb_blocks_layouts'),															
															'group'				=> $group_query_settings,																				
														),	
														array(															
															'type' 				=> 'textfield', //Done
															'heading' 			=> __('Items per page', 'cb_blocks_layouts'),
															'param_name' 		=> 'posts_per_page',
															'description' 		=> __('Number of items to show per page. If blank, defaults to: 10', 'cb_blocks_layouts'),
															'dependency' 		=> 	array(
																					'element'			 	=> 'layout_style',
																					'value_not_equal_to' 	=> array('1', '2'),
																				),															
															'group'				=> $group_query_settings,																				
														),																																				
													//Custom Query
																										
													//Color Settings
														array( // Title color
															'type'			=> 'colorpicker',
															'heading' 		=> __('Title Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'title_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#222222</code>', 'cb_blocks_layouts'),	
														),
														array(
															'type'			=> 'colorpicker',
															'heading' 		=> __('Title [Hover] Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'title_hover_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#666666</code>', 'cb_blocks_layouts'),	
														),
														
														array( // Metas Color
															'type'			=> 'colorpicker',
															'heading' 		=> __('Metas 1 Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_o_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#999999</code>', 'cb_blocks_layouts'),	
														),
														array(
															'type'			=> 'colorpicker',
															'heading' 		=> __('Metas 1 [Hover] Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_o_hover_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#3c3c3c</code>', 'cb_blocks_layouts'),	
														),
														
														array( // Metas Color
															'type'			=> 'colorpicker',
															'heading' 		=> __('Metas 2 Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_t_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#FFFFFF</code>', 'cb_blocks_layouts'),	
														),
														array(
															'type'			=> 'colorpicker',
															'heading' 		=> __('Metas 2 [Hover] Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_t_hover_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>rgba(255, 255, 255, 0.85)</code>', 'cb_blocks_layouts'),	
														),
														array(
															'type'			=> 'colorpicker',
															'heading' 		=> __('Metas 2 [Background] Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_t_background_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#fb4c35</code>', 'cb_blocks_layouts'),	
														),
														
														array( // Excerpt Color
															'type'			=> 'colorpicker',
															'heading' 		=> __('Text Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'text_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#999999</code>', 'cb_blocks_layouts'),	
														),
														
														array( // Shadow Color
															'type'			=> 'colorpicker',
															'heading' 		=> __('Filter Overlay Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'filter_overlay_color',
															'group'			=> $group_color_settings,
															),	
														
														array( // Main color 1
															'type'			=> 'colorpicker',
															'heading' 		=> __('Main Color 1', 'cb_blocks_layouts'),
															'param_name' 	=> 'main_color_1',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#fB4C35</code>', 'cb_blocks_layouts'),	
														),
														array( // Main color 2
															'type'			=> 'colorpicker',
															'heading' 		=> __('Main Color 2', 'cb_blocks_layouts'),
															'param_name' 	=> 'main_color_2',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#987666</code>', 'cb_blocks_layouts'),	
														),	
														
														array( // tab color
															'type'			=> 'colorpicker',
															'heading' 		=> __('[Smart Tab] Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'stab_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#FFFFFF</code>', 'cb_blocks_layouts'),	
														),
														array( // tab bg color
															'type'			=> 'colorpicker',
															'heading' 		=> __('[Smart Tab] Background Color', 'cb_blocks_layouts'),
															'param_name' 	=> 'stab_bg_color',
															'group'			=> $group_color_settings,
															'description' 	=> __('If blank, defaults to <code>#FB4C35</code>', 'cb_blocks_layouts'),	
														),													
													//Color Settings
													
													//Typography Settings
														array( // Title font															
															'type' 			=> 'textfield',
															'heading' 		=> __('Title Font (Support Google font)', 'cb_blocks_layouts'),
															'param_name' 	=> 'title_font',
															'description' 	=> __('	Enter font-family name here. Google Fonts are supported. 
																					For example, if you choose "Open Sans" <a href="http://www.google.com/fonts/" target="_blank">Google Font</a> 
																					with font-weight 400,500,600, enter <code>Open Sans:400,500,600</code>', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Title] Font Size', 'cb_blocks_layouts'),
															'param_name' 	=> 'title_font_size',
															'description' 	=> __('<strong>Example:</strong> <code>14px</code>, <code>16px</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Title] Font Letter Spacing', 'cb_blocks_layouts'),
															'param_name' 	=> 'title_letter_spacing',
															'description' 	=> __('<strong>Example:</strong> <code>1px</code>, <code>0.1em</code> ... If blank, defaults to <code>0.075em</code>', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Title] Font Weight', 'cb_blocks_layouts'),
															'param_name' 	=> 'title_font_weight',
															'value' 		=> $array_font_weight,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Title] Font Style', 'cb_blocks_layouts'),
															'param_name' 	=> 'title_font_style',
															'value' 		=> $array_font_style,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Title] Text Transform', 'cb_blocks_layouts'),
															'param_name' 	=> 'title_text_transform',
															'value' 		=> $array_text_transform,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Title] Line Height', 'cb_blocks_layouts'),
															'param_name' 	=> 'title_line_height',
															'description' 	=> __('<strong>Example:</strong> <code>15px</code>, <code>1.55em</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														
														array( // Metas font															
															'type' 			=> 'textfield',
															'heading' 		=> __('Metas Font (Support Google font)', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_font',
															'description' 	=> __('	Enter font-family name here. Google Fonts are supported. 
																					For example, if you choose "Open Sans" <a href="http://www.google.com/fonts/" target="_blank">Google Font</a> 
																					with font-weight 400,500,600, enter <code>Open Sans:400,500,600</code>', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Metas] Font Size', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_font_size',
															'description' 	=> __('<strong>Example:</strong> <code>14px</code>, <code>16px</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Metas] Font Letter Spacing', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_letter_spacing',
															'description' 	=> __('<strong>Example:</strong> <code>1px</code>, <code>0.1em</code> ... If blank, defaults to <code>0.1em</code>', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Metas] Font Weight', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_font_weight',
															'value' 		=> $array_font_weight,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Metas] Font Style', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_font_style',
															'value' 		=> $array_font_style,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Metas] Text Transform', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_text_transform',
															'value' 		=> $array_text_transform,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Metas] Line Height', 'cb_blocks_layouts'),
															'param_name' 	=> 'metas_line_height',
															'description' 	=> __('<strong>Example:</strong> <code>15px</code>, <code>1.55em</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														
														array( // Excerpt font															
															'type' 			=> 'textfield',
															'heading' 		=> __('Main Font (Support Google font)', 'cb_blocks_layouts'),
															'param_name' 	=> 'excerpt_font',
															'description' 	=> __('	Enter font-family name here. Google Fonts are supported. 
																					For example, if you choose "Open Sans" <a href="http://www.google.com/fonts/" target="_blank">Google Font</a> 
																					with font-weight 400,500,600, enter <code>Open Sans:400,500,600</code>', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Main] Font Size', 'cb_blocks_layouts'),
															'param_name' 	=> 'excerpt_font_size',
															'description' 	=> __('<strong>Example:</strong> <code>14px</code>, <code>16px</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Main] Font Letter Spacing', 'cb_blocks_layouts'),
															'param_name' 	=> 'excerpt_letter_spacing',
															'description' 	=> __('<strong>Example:</strong> <code>1px</code>, <code>0.1em</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Main] Font Weight', 'cb_blocks_layouts'),
															'param_name' 	=> 'excerpt_font_weight',
															'value' 		=> $array_font_weight,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Main] Font Style', 'cb_blocks_layouts'),
															'param_name' 	=> 'excerpt_font_style',
															'value' 		=> $array_font_style,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Main] Text Transform', 'cb_blocks_layouts'),
															'param_name' 	=> 'excerpt_text_transform',
															'value' 		=> $array_text_transform,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Main] Text Line Height', 'cb_blocks_layouts'),
															'param_name' 	=> 'excerpt_line_height',
															'description' 	=> __('<strong>Example:</strong> <code>15px</code>, <code>1.55em</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														
														array( // Filter font															
															'type' 			=> 'textfield',
															'heading' 		=> __('Filter Font (Support Google font)', 'cb_blocks_layouts'),
															'param_name' 	=> 'filter_font',
															'description' 	=> __('	Enter font-family name here. Google Fonts are supported. 
																					For example, if you choose "Open Sans" <a href="http://www.google.com/fonts/" target="_blank">Google Font</a> 
																					with font-weight 400,500,600, enter <code>Open Sans:400,500,600</code>', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Filter] Font Size', 'cb_blocks_layouts'),
															'param_name' 	=> 'filter_font_size',
															'description' 	=> __('<strong>Example:</strong> <code>14px</code>, <code>16px</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Filter] Letter Spacing', 'cb_blocks_layouts'),
															'param_name' 	=> 'filter_letter_spacing',
															'description' 	=> __('<strong>Example:</strong> <code>1px</code>, <code>0.1em</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Filter] Font Weight', 'cb_blocks_layouts'),
															'param_name' 	=> 'filter_font_weight',
															'value' 		=> $array_font_weight,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Filter] Font Style', 'cb_blocks_layouts'),
															'param_name' 	=> 'filter_font_style',
															'value' 		=> $array_font_style,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Filter] Text Transform', 'cb_blocks_layouts'),
															'param_name' 	=> 'filter_text_transform',
															'value' 		=> $array_text_transform,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Filter] Text Line Height', 'cb_blocks_layouts'),
															'param_name' 	=> 'filter_line_height',
															'description' 	=> __('<strong>Example:</strong> <code>15px</code>, <code>1.55em</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														
														array( // smart tab title font															
															'type' 			=> 'textfield',
															'heading' 		=> __('[Tab Title] Font (Support Google font)', 'cb_blocks_layouts'),
															'param_name' 	=> 'tab_font',
															'description' 	=> __('	Enter font-family name here. Google Fonts are supported. 
																					For example, if you choose "Open Sans" <a href="http://www.google.com/fonts/" target="_blank">Google Font</a> 
																					with font-weight 400,500,600, enter <code>Open Sans:400,500,600</code>', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Tab Title] Font Size', 'cb_blocks_layouts'),
															'param_name' 	=> 'tab_font_size',
															'description' 	=> __('<strong>Example:</strong> <code>14px</code>, <code>16px</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Tab Title] Letter Spacing', 'cb_blocks_layouts'),
															'param_name' 	=> 'tab_letter_spacing',
															'description' 	=> __('<strong>Example:</strong> <code>1px</code>, <code>0.1em</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Tab Title] Font Weight', 'cb_blocks_layouts'),
															'param_name' 	=> 'tab_font_weight',
															'value' 		=> $array_font_weight,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Tab Title] Font Style', 'cb_blocks_layouts'),
															'param_name' 	=> 'tab_font_style',
															'value' 		=> $array_font_style,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'dropdown',
															'heading' 		=> __('[Tab Title] Text Transform', 'cb_blocks_layouts'),
															'param_name' 	=> 'tab_text_transform',
															'value' 		=> $array_text_transform,
															'group'			=> $group_typo_settings,					
														),
														array(
															'type' 			=> 'textfield',
															'heading' 		=> __('[Tab Title] Text Line Height', 'cb_blocks_layouts'),
															'param_name' 	=> 'tab_line_height',
															'description' 	=> __('<strong>Example:</strong> <code>15px</code>, <code>1.55em</code> ...', 'cb_blocks_layouts'),															
															'group'			=> $group_typo_settings,					
														),
														
													//Typography Settings
													
													array(
														'type' 			=> 'css_editor',
														'heading' 		=> __( 'Css', 'cb_blocks_layouts'),
														'param_name' 	=> 'css',
														'group' 		=> __( 'Design options', 'cb_blocks_layouts'),
													),
						),
					)
				);
				
				//Filter Container
				vc_map(
					array(
						'name' 				=> 	__('Filter Container', 'cb_blocks_layouts'),
						'base' 				=> 	'cbb_layout_filter',
						'is_container' 		=> 	false,					
						'js_view' 			=> 'VcColumnView',
						'as_child' 			=> 	array('only' => 'cbb_layout'),
						'as_parent' 		=> 	array('only' => 'cbb_layout_filter_items, cbb_layout_order_by, cbb_layout_sort_order'),
						'category' 			=>	$group_category,
						'icon'				=> 	CBB_BETE_PLUGIN_URL.'assets/back-end/images/ul-layout-filter.png',
						'params'			=> 	array(
														array(
															'type' 				=> 'dropdown',
															'heading' 			=> __('Display Type', 'cb_blocks_layouts'),			
															'param_name' 		=> 'display_type',  //Done
															'value' 			=> array(
																					__('Smart Tab', 'cb_blocks_layouts') 			=> '2',																																																																							
																				),
															),
														array(
															'type' 				=> 'textfield',
															'heading' 			=> __('Tab Title', 'cb_blocks_layouts'), 
															'param_name' 		=> 'title',	 //Done												
															'value'				=> '',
															'description' 		=> __('Enter section title (Note: you can leave it empty).', 'cb_blocks_layouts'),
															'dependency' 		=> array(
																						'element' 	=> 	'display_type',
																						'value' 	=> 	array('2'),
																					),	 
														),
														array(
															'type' 				=> 'textfield',
															'heading' 			=> __('Tab Custom Link', 'cb_blocks_layouts'), 
															'param_name' 		=> 'title_link',	 //Done												
															'value'				=> '',
															'description' 		=> __('Enter title link (Note: you can leave it empty).', 'cb_blocks_layouts'),
															'dependency' 		=> array(
																						'element' 	=> 	'display_type',
																						'value' 	=> 	array('2'),
																					),	 
														),
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('Show number of posts', 'cb_blocks_layouts'),			
															'param_name' 		=> 'show_number',
															'value' 			=> array(	
																					__('Yes', 'cb_blocks_layouts') 				=> '1',																		
																					__('No', 'cb_blocks_layouts') 				=> '0',																																																																						
																				),
														),
														array(
															'type' 				=> 'dropdown', //Done
															'heading' 			=> __('Hash Filters', 'cb_blocks_layouts'),			
															'param_name' 		=> 'has_filters',
															'description' 		=> __( 'Hash Tag Filter. This option does not work with: 
																						Display Type [(Dropdown) > Display Child Categories, Taxonomies, Tags...]', 'cb_blocks_layouts'),
															'value' 			=> array(	
																					__('No', 'cb_blocks_layouts') 				=> '0',																		
																					__('Yes', 'cb_blocks_layouts') 				=> '1',																																																																						
																				),
														),	
														array(
															'type' 				=> 'textfield',
															'heading' 			=> __('Extra Class Name', 'cb_blocks_layouts'), 
															'param_name' 		=> 'extra_class', //Done														
															'value'				=> '',	 
														),								
												)
					)
				);
				
				//Filter Items
				vc_map(
					array(
						'name' 				=> 	__('Filter Item', 'cb_blocks_layouts'),
						'base' 				=> 	'cbb_layout_filter_items',						
						'as_child' 			=> 	array('only' => 'cbb_layout_filter'),
						'category' 			=>	$group_category,
						'icon'				=> 	CBB_BETE_PLUGIN_URL.'assets/back-end/images/ul-layout-filter-item.png',
						'params'			=> 	array(
														array(
															'type' 				=> 'autocomplete', //Done
															'heading' 			=> __('Filter Items', 'cb_blocks_layouts'),		
															'param_name' 		=> 'filter_items',
															'description' 		=> __('Enter categories, tags, taxonomies... be shown in the filters list.', 'cb_blocks_layouts'), 
															'settings' 			=> array(
																						'multiple' 					=> true,																					
																						'min_length' 				=> 1,
																						'groups' 					=> true,
																						'unique_values' 			=> true,
																						'display_inline' 			=> true,
																						'delay' 					=> 500,
																						'auto_focus' 				=> true,
																				   ),													
														),
														array(
															'type' 				=> 'dropdown',  //Done
															'heading' 			=> __('Enabled "Show All" Button', 'cb_blocks_layouts'),			
															'param_name' 		=> 'show_all',
															'value' 			=> array(	
																					__('Yes', 'cb_blocks_layouts') 				=> '1',																		
																					__('No', 'cb_blocks_layouts') 				=> '0',																																																																						
																				),
															),
														array(
															'type' 				=> 'textfield',  //Done
															'heading' 			=> __('"Show All" Button - Translate Text', 'cb_blocks_layouts'), 
															'param_name' 		=> 'show_all_text',														
															'value'				=> '',
															'dependency' 		=> array(
																						'element' 	=> 	'show_all',
																						'value' 	=> 	array('1'),
																					),																										 
														),																												
														array(
															'type' 				=> 'textfield',
															'heading' 			=> __('Extra Class Name', 'cb_blocks_layouts'), 
															'param_name' 		=> 'extra_class', //Done														
															'value'				=> '',	 
														),									
												)
					)
				);
				
				/*end VC Map*/
			}
		}
		/*end bt_ultimateLayouts_vc*/
		
		public function init(){
			$this->bt_ultimateLayouts_vc();
			
			add_filter('vc_autocomplete_cbb_layout_i_taxonomies_callback', 'vc_autocomplete_taxonomies_field_search', 10, 1);
			add_filter('vc_autocomplete_cbb_layout_i_taxonomies_render', 'vc_autocomplete_taxonomies_field_render', 10, 1);
			
			add_filter('vc_autocomplete_cbb_layout_e_taxonomies_callback', 'vc_autocomplete_taxonomies_field_search', 11, 1);
			add_filter('vc_autocomplete_cbb_layout_e_taxonomies_render', 'vc_autocomplete_taxonomies_field_render', 11, 1);
			
			add_filter('vc_autocomplete_cbb_layout_filter_items_filter_items_callback', 'vc_autocomplete_taxonomies_field_search', 11, 1);
			add_filter('vc_autocomplete_cbb_layout_filter_items_filter_items_render', 'vc_autocomplete_taxonomies_field_render', 11, 1);
			
			add_filter('vc_autocomplete_cbb_layout_i_ids_callback', 'vc_include_field_search', 10, 1);
			add_filter('vc_autocomplete_cbb_layout_i_ids_render', 'vc_include_field_render', 10, 1);
			
			add_filter('vc_autocomplete_cbb_layout_e_ids_callback', 'vc_include_field_search', 10, 1);
			add_filter('vc_autocomplete_cbb_layout_e_ids_render', 'vc_include_field_render', 10, 1);
						
			if(is_admin()){
				wp_enqueue_style('ul_bete_admin_css', 				CBB_BETE_PLUGIN_URL.'assets/back-end/core.css', array(), CBB_BETE_VER);
				wp_enqueue_script('ul_bete_jscolor_js', 			CBB_BETE_PLUGIN_URL.'assets/back-end/jscolor.min.js', array(), CBB_BETE_VER, true);
				wp_enqueue_script('ul_bete_admin_js', 				CBB_BETE_PLUGIN_URL.'assets/back-end/core.js', array(), CBB_BETE_VER, true);
			}
		}
		
		public function __construct() {				
			add_action('init', array($this, 'init'), 9998, 1);
		}
	}
	
	global $bt_contentblocks_builder;
	if(!$bt_contentblocks_builder){
		$bt_contentblocks_builder = new bt_contentblocks_builder();
	}
	
	if(!function_exists('bt_contentblocks_vc_extends')){
		function bt_contentblocks_vc_extends(){
			if(class_exists('WPBakeryShortCode') && class_exists('WPBakeryShortCodesContainer') && class_exists('WPBakeryShortCode')){				
				class WPBakeryShortCode_cbb_layout extends WPBakeryShortCodesContainer{} //container
				class WPBakeryShortCode_cbb_layout_filter extends WPBakeryShortCodesContainer{} //container
				class WPBakeryShortCode_cbb_layout_filter_items extends WPBakeryShortCode{} //only shortcode
				//class WPBakeryShortCode_cbb_layout_order_by extends WPBakeryShortCode{} //only shortcode
				//class WPBakeryShortCode_cbb_layout_sort_order extends WPBakeryShortCode{} //only shortcode
			}
		}	
		add_action('init', 'bt_contentblocks_vc_extends', 9999, 1);
	}	
}