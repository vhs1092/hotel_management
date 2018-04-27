<?php

class HotelHelper
{
    public function initCurl($params)
    {
        if (!$params) {
            return false;
        }
        if ($params['contentType'] == 'JSON') {
            $header = array('Content-Type: application/json');
            if (isset($params['postData'])) {
                $header[] = 'Content-Length: '.strlen($params['postData']);
            }
        }

        $curlInit = curl_init();
        curl_setopt($curlInit, CURLOPT_URL, $params['url']);
        curl_setopt($curlInit, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curlInit, CURLOPT_HTTPHEADER,  $header);
        curl_setopt($curlInit, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curlInit, CURLOPT_CUSTOMREQUEST, $params['method']);
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, 1);
        if (isset($params['postData'])) {
            curl_setopt($curlInit, CURLOPT_POSTFIELDS, $params['postData']);
        }
        $response = curl_exec($curlInit);

        // Close handle
        curl_close($curlInit);

        return $response;
    }

    public function insertHotelCommonFeatures()
    {
        $parent_features_arr = array(
            'Business Services' => array('Business Center','Audio-Visual Equipment','Board room','Conference Facilities','Secretaial Services','Fax Machine','Internet Access'),

            'Complementry' => array('Internet Access Free','Transfer Available','NewsPaper In Lobby','Shopping Drop Facility','Welcome Drinks'),

            'Entertainment' => array('DiscoTheatre','Casino',' Amphitheatre','Dance Performances(On Demand)','Karoke','Mini Theatre','Night Club'),

            'Facilities' => array('Laundary Service','Power BackUp','ATM/Banking','Currency Exchange','Dry Cleaning','Library','Doctor On Call','Party Hall','Yoga Hall','Pets Allowed','Kids Play Zone','Wedding Services Facilities','Fire Place Available'),

            'General Services' => array('Room Service','Cook Service','Car Rental','Door Man','Grocery','Medical Assistance','Postal Services','Spa Services','Multilingual Staff'),

            'Indoors' => array('Parking','Solarium','Veranda'),

            'Internet' => array('Internet Access-Surcharge','Internet / Fax (Reception area only)'),

            'Outdoors' => array('Gardens', 'Outdoor Parking - Secured', 'Barbecue AreaCampfire / Bon Fire', 'Childrens Park','Fishing', 'Golf Course', 'Outdoor Parking - Non Secured','Private Beach','Rooftop Garden'),

            'Parking' => array('Parking (Surcharge)', 'Parking Facilities Available', 'Valet service'),

            'Sports And Recreation' => array('Health Club / Gym Facility Available', 'Bike on Rent', 'Badminttion Court', 'Basketball Court', 'Billiards' ,'Boating' ,'Bowling', 'Camel Ride','Clubhouse' ,'Fitness Equipment','Fun Floats','Games Zone', 'Horse Ride ( Chargeable )', 'Marina On Site', 'Nature Walk', 'Pool Table','Safari', 'Skiing Facility', 'Available Spa Services', 'NearbySquash court','Table Tennis', 'Tennis Court','Virtual Golf'),

            'Water Amenites' => array('Swimming Pool', 'Jacuzzi', 'Private / Plunge Pool', 'Sauna','Whirlpool Bath / Shower Cubicle'),

            'Wine And Dine' => array('Bar / Lounge', 'Multi Cuisine Restaurant', 'Catering', 'Coffee Shop / Cafe', 'Food Facility', 'Hookah Lounge','Kitchen available (home cook food on request)', 'Open Air Restaurant / Dining' ,'Pool Cafe', 'Poolside Bar', 'Restaurant Veg / Non Veg Kitchens Separate', 'Vegetarian Food / Jain Food Available'),
        );
        $i = 1;
        foreach ($parent_features_arr as $key => $value) {
            $obj_feature = new HotelFeatures();
            $obj_feature->name = $key;
            $obj_feature->active = 1;
            $obj_feature->position = $i;
            $obj_feature->parent_feature_id = 0;
            $obj_feature->save();
            $parent_feature_id = $obj_feature->id;
            foreach ($value as $val) {
                $obj_feature = new HotelFeatures();
                $obj_feature->name = $val;
                $obj_feature->active = 1;
                $obj_feature->parent_feature_id = $parent_feature_id;
                $obj_feature->save();
            }
            ++$i;
        }

        return true;
    }

    public function insertDefaultHotelEntries()
    {
        //from setting tab
        $home_banner_default_title = 'Este es un titulo';
        $home_banner_default_content = 'Esta es una descripcion.';

        Configuration::updateValue('WK_HOTEL_LOCATION_ENABLE', 1);
        Configuration::updateValue('WK_ROOM_LEFT_WARNING_NUMBER', 10);
        Configuration::updateValue('WK_HOTEL_GLOBAL_CONTACT_EMAIL', 'vhs1092@gmail.com');
        Configuration::updateValue('WK_HOTEL_GLOBAL_CONTACT_NUMBER', 9999999999);
        Configuration::updateValue('WK_TITLE_HEADER_BLOCK', $home_banner_default_title);
        Configuration::updateValue('WK_CONTENT_HEADER_BLOCK', $home_banner_default_content);
        Configuration::updateValue('WK_ALLOW_ADVANCED_PAYMENT', 1);
        Configuration::updateValue('WK_ADVANCED_PAYMENT_GLOBAL_MIN_AMOUNT', 10);
        Configuration::updateValue('WK_ADVANCED_PAYMENT_INC_TAX', 1);
        Configuration::updateValue('WK_HTL_CHAIN_NAME', 'Hotel La Unión');
        Configuration::updateValue('WK_HTL_TAG_LINE', 'Texto de descripcion');
        Configuration::updateValue('WK_HTL_SHORT_DESC', 'Texto de descripcion 2.');
        Configuration::updateValue('MAX_GLOBAL_BOOKING_DATE', date('d-m-Y', strtotime(date('Y-m-d', time()).' + 1 year')));

        return true;
    }

    public function insertHotelRoomsStatus()
    {
        $room_status_arr = array('Active','Inactive','Temporary Inactive');
        foreach ($room_status_arr as $key => $value) {
            $obj_room_status = new HotelRoomStatus();
            $obj_room_status->status = $value;
            $obj_room_status->save();
        }

        return true;
    }

    public function insertHotelOrderStatus()
    {
        $order_status_arr = array('Alloted','Checked In','Checked Out');
        foreach ($order_status_arr as $key => $value) {
            $obj_order_status = new HotelOrderStatus();
            $obj_order_status->status = $value;
            $obj_order_status->save();
        }

        return true;
    }

    public function insertHotelRoomAllotmentType()
    {
        $altment_type_arr = array('Random Allotment','Manual Allotment');
        foreach ($altment_type_arr as $key => $value) {
            $obj_allotmanet_type = new HotelRoomAllotmentType();
            $obj_allotmanet_type->type = $value;
            $obj_allotmanet_type->save();
        }

        return true;
    }

    public function deletePrestashopDefaultCategories()
    {
        $all_root_childrean_categories = Category::getAllCategoriesName();
        foreach ($all_root_childrean_categories as $cat_key => $cat_value) {
            if ($cat_value['id_category'] > 2) {
                $obj_category = new Category($cat_value['id_category']);
                $obj_category->delete();
            }
        }

        return true;
    }

    public function deletePrestashopDefaultFeatures()
    {
        $context = Context::getContext();
        $all_features = Feature::getFeatures($context->language->id);
        foreach ($all_features as $ftr_k => $ftr_v) {
            $obj_feature = new Feature($ftr_v['id_feature']);
            $obj_feature->delete();
        }

        return true;
    }

    public function createHotelRoomDefaultFeatures()
    {
        $htl_room_ftrs = array('Wi-Fi', 'News Paper', 'Power BackUp', 'Refrigerator','Restaurant', 'Room Service', 'Gym');
        $pos = 0;
        foreach ($htl_room_ftrs as $room_ftr_k => $room_ftr_v) {
            $obj_feature = new Feature();
            foreach (Language::getLanguages(true) as $lang) {
                $obj_feature->name[$lang['id_lang']] = $room_ftr_v;
            }
            $obj_feature->position = $pos;
            $obj_feature->save();
            if ($obj_feature->id) {
                $obj_feature_value = new FeatureValue();
                $obj_feature_value->id_feature = $obj_feature->id;

                foreach (Language::getLanguages(true) as $lang) {
                    $obj_feature_value->value[$lang['id_lang']] = $obj_feature->id.'.png';
                }

                $obj_feature_value->save();
                if ($obj_feature_value->id) {
                    if (file_exists(_PS_IMG_DIR_.'rf/'.$pos.'.png')) {
                        rename(_PS_IMG_DIR_.'rf/'.$pos.'.png', _PS_IMG_DIR_.'rf/'.$obj_feature->id.'.png');
                    }
                }
            }
            ++$pos;
        }

        return true;
    }

    public function deletePreviousPrestashopProducts()
    {
        //delete privious products of prestashop
        $all_products = Product::getSimpleProducts(Configuration::get('PS_LANG_DEFAULT'));
        if ($all_products) {
            foreach ($all_products as $value_pro) {
                $obj_product = new Product($value_pro['id_product']);
                $obj_product->delete();
            }
        }
    }

    public function saveDummyHotelBranchInfo()
    {
        $def_cont_id = Country::getDefaultCountryId();
        $obj_hotel_info = new HotelBranchInformation();
        $obj_hotel_info->active = 1;
        $obj_hotel_info->hotel_name = 'The Hotel Prime';
        $obj_hotel_info->phone = '9999999999';
        $obj_hotel_info->email = 'hotelprime@htl.com';
        $obj_hotel_info->check_in = '12:00';
        $obj_hotel_info->check_out = '12:00';
        $obj_hotel_info->short_description = 'Nice place to stay';
        $obj_hotel_info->description = 'Nice place to stay';
        $obj_hotel_info->rating = 3;
        $obj_hotel_info->city = 'Dummy city';
        $states = State::getStatesByIdCountry($def_cont_id);
        $state_id = $states[0]['id_state'];
        $obj_hotel_info->state_id = $state_id;
        $obj_hotel_info->country_id = $def_cont_id;
        $obj_hotel_info->zipcode = 263001;
        $obj_hotel_info->policies = '1. intelligentsia tattooed pop-up salvia asymmetrical mixtape meggings tousled ramps VHS cred. 2. intelligentsia tattooed pop-up salvia asymmetrical mixtape meggings tousled ramps VHS cred. 3. intelligentsia tattooed pop-up salvia asymmetrical mixtape meggings tousled ramps VHS cred. 4. intelligentsia tattooed pop-up salvia asymmetrical mixtape meggings tousled ramps VHS cred.';
        $obj_hotel_info->address = 'Near post office, Mallital, Nainital';
        $obj_hotel_info->save();

        $htl_id = $obj_hotel_info->id;

        $grp_ids = array();
        $obj_grp = new Group();
        $data_grp_ids = $obj_grp->getGroups(1, $id_shop = false);

        foreach ($data_grp_ids as $key => $value) {
            $grp_ids[] = $value['id_group'];
        }
        $obj_country = new Country();
        $country_name = $obj_country->getNameById(Configuration::get('PS_LANG_DEFAULT'), $def_cont_id);
        $cat_country = $this->addCategory($country_name, false, $grp_ids);

        if ($cat_country) {
            $states = State::getStatesByIdCountry($def_cont_id);
            if (count($states) > 0) {
                $state_name = $states[0]['name'];
                $cat_state = $this->addCategory($state_name, $cat_country, $grp_ids);
            }
        }
        if (count($states) > 0) {
            if ($cat_state) {
                $cat_city = $this->addCategory('DefCity', $cat_state, $grp_ids);
            }
        } else {
            $cat_city = $this->addCategory('DefCity', $cat_country, $grp_ids);
        }
        if ($cat_city) {
            $cat_hotel = $this->addCategory('The Hotel Prime', $cat_city, $grp_ids, 1, $htl_id);
        }
        if ($cat_hotel) {
            $obj_hotel_info = new HotelBranchInformation($htl_id);
            $obj_hotel_info->id_category = $cat_hotel;
            $obj_hotel_info->save();
        }

        return $htl_id;
    }

    public function saveDummyHotelFeatures($id_hotel)
    {
        $branch_ftr_ids = array(1, 2, 4, 7, 8, 9, 11, 12, 14, 16, 17, 18, 21);
        foreach ($branch_ftr_ids as $value_ftr) {
            $htl_ftr_obj = new HotelBranchFeatures();
            $htl_ftr_obj->id_hotel = $id_hotel;
            $htl_ftr_obj->feature_id = $value_ftr;
            $htl_ftr_obj->save();
        }
    }

    public function saveDummyProductsAndRelatedInfo($id_hotel)
    {
        $prod_arr = array('General Rooms', 'Delux Rooms', 'Executive Rooms', 'luxury Rooms');
        $prod_price_arr = array(1000, 1500, 2000, 2500);
        foreach ($prod_arr as $key => $value_prod) {
            // Add Product
            $product = new Product();
            $product->name = array();
            $product->description = array();
            $product->description_short = array();
            $product->link_rewrite = array();
            foreach (Language::getLanguages(true) as $lang) {
                $product->name[$lang['id_lang']] = $value_prod;
                $product->description[$lang['id_lang']] = 'Fashion axe kogi yuccie, ramps shabby chic direct trade before they sold out distillery bicycle rights. Slow-carb +1 quinoa VHS. +1 brunch trust fund, meggings chartreuse sustainable everyday carry tumblr hoodie tacos tilde ramps post-ironic fixie.';
                $product->description_short[$lang['id_lang']] = 'Fashion axe kogi yuccie, ramps shabby chic direct trade before they sold out distillery bicycle rights. Slow-carb +1 quinoa VHS. +1 brunch trust fund, meggings chartreuse sustainable everyday carry tumblr hoodie tacos tilde ramps post-ironic fixie.';
                $product->link_rewrite[$lang['id_lang']] = Tools::link_rewrite('Super Delux Rooms');
            }
            $product->id_shop_default = Context::getContext()->shop->id;
            $product->id_category_default = 2;
            $product->price = $prod_price_arr[$key];
            $product->active = 1;
            $product->quantity = 999999999;
            $product->is_virtual = 1;
            $product->indexed = 1;
            $product->save();
            $product_id = $product->id;

            Search::indexation(Tools::link_rewrite($value_prod), $product_id);

            $product->addToCategories(2);

            StockAvailable::updateQuantity($product_id, null, 999999999);

            //image upload for products
            $image_dir_path = _PS_MODULE_DIR_.'hotelreservationsystem/views/img/prod_imgs/'.($key+1).'/';
            $imagesTypes = ImageType::getImagesTypes('products');
            $count = 0;
            $have_cover = false;
            if (is_dir($image_dir_path)) {
                if ($opendir = opendir($image_dir_path)) {
                    while (($image = readdir($opendir)) !== false) {
                        if ($this->validImageExt($image)) {
                            $image_obj = new Image();
                            $image_obj->id_product = $product_id;
                            $image_obj->position = Image::getHighestPosition($product_id) + 1;

                            if ($count == 0) {
                                if (!$have_cover) {
                                    $image_obj->cover = 1;
                                    $have_cover = true;
                                }
                                $count++;
                            } else {
                                $image_obj->cover = 0;
                            }
                            $image_obj->add();
                            $old_path = $image_dir_path.$image;
                            $new_path = $image_obj->getPathForCreation();
                            foreach ($imagesTypes as $image_type) {
                                ImageManager::resize($old_path, $new_path.'-'.$image_type['name'].'.jpg', $image_type['width'], $image_type['height']);
                            }
                            ImageManager::resize($old_path, $new_path.'.jpg');
                        }
                    }
                    closedir($opendir);
                }
            }

            for ($k = 1; $k <= 5; ++$k) {
                $htl_room_info_obj = new HotelRoomInformation();
                $htl_room_info_obj->id_product = $product_id;
                $htl_room_info_obj->id_hotel = $id_hotel;
                $htl_room_info_obj->room_num = 'A-10'.$k;
                $htl_room_info_obj->id_status = 1;
                $htl_room_info_obj->floor = 'first';
                $htl_room_info_obj->save();
            }

            $htl_rm_type = new HotelRoomType();
            $htl_rm_type->id_product = $product_id;
            $htl_rm_type->id_hotel = $id_hotel;
            $htl_rm_type->adult = 2;
            $htl_rm_type->children = 2;
            $htl_rm_type->save();

            // Add features to the product
            $ftr_arr = array(0 => 8, 1 => 9, 2 => 10, 3 => 11);
            $ftr_val_arr = array(0 => 34, 1 => 35, 2 => 36, 3 => 37);
            foreach ($ftr_arr as $key_htl_ftr => $val_htl_ftr) {
                $product->addFeaturesToDB($val_htl_ftr, $ftr_val_arr[$key_htl_ftr]);
            }
        }
    }

    public function createDummyDataForProject()
    {
        $this->deletePreviousPrestashopProducts();
        $htl_id = $this->saveDummyHotelBranchInfo();
        $this->saveDummyHotelFeatures($htl_id);
        $this->saveDummyProductsAndRelatedInfo($htl_id);

        return true;
    }

    public function addCategory($name, $parent_cat = false, $group_ids, $ishotel = false, $hotel_id = false)
    {
        if (!$parent_cat) {
            $parent_cat = Category::getRootCategory()->id;
        }

        if ($ishotel && $hotel_id) {
            $cat_id_hotel = Db::getInstance()->getValue('SELECT `id_category` FROM `'._DB_PREFIX_.'htl_branch_info` WHERE id='.$hotel_id);
            if ($cat_id_hotel) {
                $obj_cat = new Category($cat_id_hotel);
                $obj_cat->name = array();
                $obj_cat->description = array();
                $obj_cat->link_rewrite = array();

                foreach (Language::getLanguages(true) as $lang) {
                    $obj_cat->name[$lang['id_lang']] = $name;
                    $obj_cat->description[$lang['id_lang']] = 'This category are for hotels only';
                    $obj_cat->link_rewrite[$lang['id_lang']] = Tools::link_rewrite($name);
                }
                $obj_cat->id_parent = $parent_cat;
                $obj_cat->groupBox = $group_ids;
                $obj_cat->save();
                $cat_id = $obj_cat->id;

                return $cat_id;
            }
        }
        $context = Context::getContext();
        $check_category_exists = Category::searchByNameAndParentCategoryId($context->language->id, $name, $parent_cat);

        if ($check_category_exists) {
            return $check_category_exists['id_category'];
        } else {
            $obj = new Category();
            $obj->name = array();
            $obj->description = array();
            $obj->link_rewrite = array();

            foreach (Language::getLanguages(true) as $lang) {
                $obj->name[$lang['id_lang']] = $name;
                $obj->description[$lang['id_lang']] = 'This category are for hotels only';
                $obj->link_rewrite[$lang['id_lang']] = Tools::link_rewrite($name);
            }
            $obj->id_parent = $parent_cat;
            $obj->groupBox = $group_ids;
            $obj->add();
            $cat_id = $obj->id;

            return $cat_id;
        }
    }

    public function validImageExt($image_name)
    {
        if (!empty($image_name)) {
            if (ImageManager::isCorrectImageFileExt($image_name)) {
                return true;
            }
        }
        return false;
    }

    public static function generateRandomCode($length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $rand = '';
        for ($i = 0; $i < $length; ++$i) {
            $rand = $rand.$characters[mt_rand(0, Tools::strlen($characters) - 1)];
        }

        return $rand;
    }

    public static function getBaseDirUrl()
    {
        $forceSsl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';
        $baseDirSsl = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
        $baseDir = _PS_BASE_URL_.__PS_BASE_URI__;

        $startUrl = $forceSsl ? $baseDirSsl : $baseDir;
        return $startUrl;
    }
}
