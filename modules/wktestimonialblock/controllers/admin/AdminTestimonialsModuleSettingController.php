<?php
class AdminTestimonialsModuleSettingController extends ModuleAdminController 
{
	public function __construct() 
	{
		$this->table = 'htl_testimonials_block_data';
		$this->className = 'WkHotelTestimonialData';
		$this->bootstrap = true;
		$this->context = Context::getContext();
		$this->fields_options = array(
			'featuresmodulesetting' => array(
				'title' =>	$this->l('Acerca de nosotros'),
				'fields' =>	array(
					'HOTEL_TESIMONIAL_BLOCK_HEADING' => array(
						'title' => $this->l('Acerca de nosotros'),
						'type' => 'text',
						'required' => 'true',
						'id' => 'HOTEL_TESIMONIAL_BLOCK_HEADING'
					),
					'HOTEL_TESIMONIAL_BLOCK_CONTENT' => array(
						'title' => $this->l('Description'),
						'type' => 'textarea',
						'required' => 'true',
						'id' => 'HOTEL_TESIMONIAL_BLOCK_CONTENT',
						'rows' => '4',
						'cols' => '2'
					),
				),
				'submit' => array('title' => $this->l('Save'))
			),
		);
		$this->fields_list = array(
			'id' => array(
				'title' => $this->l('ID'),
				'align' => 'center',
			),
			'image' => array(
                'title' => $this->l('Imagen'),
                'align' => 'center',
                'image' => 'testimonial_image',
                'orderby' => false,
                'search' => false
            ),
			'active' => array(
                'title' => $this->l('Estado'),
                'align' => 'center',
                'active' => 'status',
                'type' => 'bool',
            ),
            'position' => array(
                'title' => $this->l('Posición'),
                'filter_key' => 'a!position',
                'position' => 'position',
                'align' => 'center',
            ),
            'date_add' => array(
                'title' => $this->l('Fecha de creación'),
                'align' => 'center',
                'type' => 'datetime',
                'filter_key' => 'a!date_add',
                'class' => 'fixed-width-xs'
            ),
		);
		$this->identifier  = 'id';
		$this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'icon' => 'icon-trash',
                'confirm' => $this->l('Delete selected items?'),
            ),
            'enableSelection' => array(
                'text' => $this->l('Enable selection'),
                'icon' => 'icon-power-off text-success',
            ),
            'disableSelection' => array(
                'text' => $this->l('Disable selection'),
                'icon' => 'icon-power-off text-danger',
            ),
        );
		parent::__construct();
	}

	public function renderList() 
	{
		$this->addRowAction('edit');
		$this->addRowAction('delete');

		$ps_testimonials_img_dir = _PS_MODULE_DIR_.'wktestimonialblock/views/img/hotels_testimonials_img';
		$this->context->smarty->assign('ps_testimonials_img_dir', $ps_testimonials_img_dir);
		
		$testimonials_img_dir = _MODULE_DIR_.'wktestimonialblock/views/img/hotels_testimonials_img';
		$this->context->smarty->assign('testimonials_img_dir', $testimonials_img_dir);
		
		return parent::renderList();
	}

	public function renderForm() 
	{
		if (!($obj = $this->loadObject(true))) {
            return;
        }
        
        $ps_img_url = _PS_MODULE_DIR_.$this->module->name.'/views/img/hotels_testimonials_img/'.$obj->id.'.jpg';
		if ($img_exist = file_exists($ps_img_url)) 
		{
			$mod_img_url = _MODULE_DIR_.$this->module->name.'/views/img/hotels_testimonials_img/'.$obj->id.'.jpg';
			$image = "<img class='img-thumbnail img-responsive' style='max-width:100px' src='".$mod_img_url."'>";
		}

		$this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Acerca de nosotros'),
                'icon' => 'icon-globe'
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Titulo'),
                    'name' => 'name',
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Subtitulo'),
                    'name' => 'designation',
                    'required' => true
                ),
                array(
                    'type' => 'textarea',
                    'rows' => '4',
                    'label' => $this->l('Descripción'),
                    'name' => 'testimonial_content',
                    'required' => true
                ),
                array(
					'type' => 'file',		
					'label' => $this->l('Imagen'),		
					'name' => 'testimonial_image',		
					'display_image' => true,
					'image' => $img_exist ? $image : false,
					'required' => true,
				),
				array(
                    'type' => 'switch',
                    'label' => $this->l('Estado'),
                    'name' => 'active',
                    'required' => false,
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->l('No')
                        )
                    )
                ),
            ),
            'submit' => array(
				'title' => $this->l('Save')
			));
		
		return parent::renderForm();
	}

	public function initToolbar() 
	{
		parent::initToolbar();
		$this->page_header_toolbar_btn['new'] = array(
			'href' => self::$currentIndex.'&add'.$this->table.'&token='.$this->token,
			'desc' => $this->l('Add new Testimonial')
		);
	}

	public function processSave()
	{
		$testimonial_id = Tools::getValue('id');
		$person_name = Tools::getValue('name');
		$person_designation = Tools::getValue('designation');
        $testimonial_content = Tools::getValue('testimonial_content');
		if (!$person_name)
			$this->errors[] = Tools::displayError('Person\'s Name is a required field.');
		if (!$person_designation)
			$this->errors[] = Tools::displayError('Person\'s Designation is a required field.');
		if ($testimonial_content == '')
			$this->errors[] = Tools::displayError('Testimonial content is a required field.');

		

		if (!count($this->errors))
		{
			if ($testimonial_id)
                $obj_testimonial_data = new WkHotelTestimonialData($testimonial_id);
            else        
                $obj_testimonial_data = new WkHotelTestimonialData();

			$obj_testimonial_data->name = $person_name;
			$obj_testimonial_data->designation = $person_designation;
			$obj_testimonial_data->testimonial_content = $testimonial_content;
			$obj_testimonial_data->active = Tools::getValue('active');

			if ($_FILES['testimonial_image']['size']) {
				$obj_testimonial_data->testimonial_image = 0;
			}

            $obj_testimonial_data->save();

            if ($_FILES['testimonial_image']['size']) {
                $image_name = $obj_testimonial_data->id.'.jpg';
                $testimonial_img_path = _PS_MODULE_DIR_.$this->module->name.'/views/img/hotels_testimonials_img/';
                ImageManager::resize($_FILES['testimonial_image']['tmp_name'], $testimonial_img_path.$image_name);

                $obj_testimonial_data->testimonial_image = $image_name;
                $obj_testimonial_data->save();
            }


			if (Tools::getValue("id")) {
                Tools::redirectAdmin(self::$currentIndex.'&conf=4&token='.$this->token);
            } else {
                Tools::redirectAdmin(self::$currentIndex.'&conf=3&token='.$this->token);
            }
		}
		else {
			if (Tools::getValue("id"))
                $this->display = 'edit';
            else
                $this->display = 'add';
		}
	}

	public function postProcess()
	{
		if (Tools::isSubmit('submitOptionshtl_features_block_data'))
		{
			$testimonial_main_blog_title = Tools::getValue('HOTEL_TESIMONIAL_BLOCK_HEADING');
	        $testimonial_main_blog_content = Tools::getValue('HOTEL_TESIMONIAL_BLOCK_CONTENT');
	        
	        if (!$testimonial_main_blog_title)
	                $this->errors[] = Tools::displayError('Testimonila blog title is a required field.');
	        if (!$testimonial_main_blog_content)
	            $this->errors[] = Tools::displayError('Testimonial blog desription is a required field.');
	    }
		parent::postProcess();
	}
}