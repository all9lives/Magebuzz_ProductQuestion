<?php
/**
 * @copyright Copyright (c) 2015 www.magebuzz.com 
 */

class Magebuzz_Productquestion_Model_Mysql4_Productquestionproduct extends Mage_Core_Model_Mysql4_Abstract
{
  protected function _construct()
  {
    $this->_init('productquestion/productquestionproduct', 'id');
  }

}