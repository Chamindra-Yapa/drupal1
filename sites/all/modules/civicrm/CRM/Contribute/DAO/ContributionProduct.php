<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Contribute/ContributionProduct.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:79de7abf1bfa670fa9cf3d43e6818bc9)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Contribute_DAO_ContributionProduct constructor.
 */
class CRM_Contribute_DAO_ContributionProduct extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_contribution_product';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   *
   * @var int unsigned
   */
  public $product_id;
  /**
   *
   * @var int unsigned
   */
  public $contribution_id;
  /**
   * Option value selected if applicable - e.g. color, size etc.
   *
   * @var string
   */
  public $product_option;
  /**
   *
   * @var int
   */
  public $quantity;
  /**
   * Optional. Can be used to record the date this product was fulfilled or shipped.
   *
   * @var date
   */
  public $fulfilled_date;
  /**
   * Actual start date for a time-delimited premium (subscription, service or membership)
   *
   * @var date
   */
  public $start_date;
  /**
   * Actual end date for a time-delimited premium (subscription, service or membership)
   *
   * @var date
   */
  public $end_date;
  /**
   *
   * @var text
   */
  public $comment;
  /**
   * FK to Financial Type(for membership price sets only).
   *
   * @var int unsigned
   */
  public $financial_type_id;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_contribution_product';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'contribution_id', 'civicrm_contribution', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'financial_type_id', 'civicrm_financial_type', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution Product ID') ,
          'required' => true,
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
        ) ,
        'product_id' => array(
          'name' => 'product_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Product ID') ,
          'required' => true,
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
        ) ,
        'contribution_id' => array(
          'name' => 'contribution_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution ID') ,
          'required' => true,
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'FKClassName' => 'CRM_Contribute_DAO_Contribution',
        ) ,
        'product_option' => array(
          'name' => 'product_option',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Product Option') ,
          'description' => 'Option value selected if applicable - e.g. color, size etc.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'export' => true,
          'where' => 'civicrm_contribution_product.product_option',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
        ) ,
        'quantity' => array(
          'name' => 'quantity',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Quantity') ,
          'export' => true,
          'where' => 'civicrm_contribution_product.quantity',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
        ) ,
        'fulfilled_date' => array(
          'name' => 'fulfilled_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Fulfilled Date') ,
          'description' => 'Optional. Can be used to record the date this product was fulfilled or shipped.',
          'export' => true,
          'where' => 'civicrm_contribution_product.fulfilled_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
        ) ,
        'contribution_start_date' => array(
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Start date for premium') ,
          'description' => 'Actual start date for a time-delimited premium (subscription, service or membership)',
          'export' => true,
          'where' => 'civicrm_contribution_product.start_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
        ) ,
        'contribution_end_date' => array(
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('End date for premium') ,
          'description' => 'Actual end date for a time-delimited premium (subscription, service or membership)',
          'export' => true,
          'where' => 'civicrm_contribution_product.end_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
        ) ,
        'comment' => array(
          'name' => 'comment',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Premium comment') ,
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
        ) ,
        'financial_type_id' => array(
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type') ,
          'description' => 'FK to Financial Type(for membership price sets only).',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'pseudoconstant' => array(
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'contribution_product', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'contribution_product', $prefix, array());
    return $r;
  }
}
