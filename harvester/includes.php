<?php


/**
 * Returns a structured array defining the fields created by this content type.
 *
 * @return
 *  An associative array specifying the fields we wish to add to our
 *  new node type.
 */
function _get_installed_fields() {

  return array(
    'field_object_description' => array(
    'entity_types' => array(),
    'foreign keys' => array(
      'format' => array(
        'table' => 'filter_format',
        'columns' => array(
          'format' => 'format',
        ),
      ),
    ),
    'indexes' => array(
      'format' => array(
        'format',
      ),
    ),
    'settings' => array(),
    'translatable' => '0',
    'storage' => array(
      'type' => 'field_sql_storage',
      'settings' => array(),
      'module' => 'field_sql_storage',
      'active' => '1',
      'details' => array(
        'sql' => array(
          'FIELD_LOAD_CURRENT' => array(
            'field_data_field_object_description' => array(
              'value' => 'field_object_description_value',
              'format' => 'field_object_description_format',
            ),
          ),
          'FIELD_LOAD_REVISION' => array(
            'field_revision_field_object_description' => array(
              'value' => 'field_object_description_value',
              'format' => 'field_object_description_format',
            ),
          ),
        ),
      ),
    ),
    'field_name' => 'field_object_description',
    'type' => 'text_long',
    'module' => 'text',
    'active' => '1',
    'locked' => '0',
    'cardinality' => '1',
    'deleted' => '0',
    'columns' => array(
      'value' => array(
        'type' => 'text',
        'size' => 'big',
        'not null' => FALSE,
      ),
      'format' => array(
        'type' => 'varchar',
        'length' => 255,
        'not null' => FALSE,
      ),
    ),
    'bundles' => array(
      'node' => array(
        'cg_object',
      ),
    ),
  ),
  
  'field_object_id' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'settings' => array(
    'max_length' => '255',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_id' => array(
            'value' => 'field_object_id_value',
            'format' => 'field_object_id_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_id' => array(
            'value' => 'field_object_id_value',
            'format' => 'field_object_id_format',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_object_id',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
      ),
  'field_object_production_date' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'settings' => array(
    'max_length' => '255',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_production_date' => array(
            'value' => 'field_object_production_date_value',
            'format' => 'field_object_production_date_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_production_date' => array(
            'value' => 'field_object_production_date_value',
            'format' => 'field_object_production_date_format',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_object_production_date',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
),
  'field_object_materials' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'settings' => array(
    'max_length' => '255',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_materials' => array(
            'value' => 'field_object_materials_value',
            'format' => 'field_object_materials_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_materials' => array(
            'value' => 'field_object_materials_value',
            'format' => 'field_object_materials_format',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_object_materials',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
),
      
  'field_object_size' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'settings' => array(
    'max_length' => '255',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_size' => array(
            'value' => 'field_object_size_value',
            'format' => 'field_object_size_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_size' => array(
            'value' => 'field_object_size_value',
            'format' => 'field_object_size_format',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_object_size',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'mol_object',
    ),
  ),
),
      
      'field_object_maker' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'settings' => array(
    'max_length' => '255',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_maker' => array(
            'value' => 'field_object_maker_value',
            'format' => 'field_object_maker_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_maker' => array(
            'value' => 'field_object_maker_value',
            'format' => 'field_object_maker_format',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_object_maker',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
),
  'field_object_language' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'settings' => array(
    'max_length' => '255',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_language' => array(
            'value' => 'field_object_language_value',
            'format' => 'field_object_language_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_language' => array(
            'value' => 'field_object_language_value',
            'format' => 'field_object_language_format',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_object_language',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
),
  'field_object_publisher_id' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'settings' => array(
    'max_length' => '255',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_publisher_id' => array(
            'value' => 'field_object_publisher_id_value',
            'format' => 'field_object_publisher_id_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_publisher_id' => array(
            'value' => 'field_object_publisher_id_value',
            'format' => 'field_object_publisher_id_format',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_object_publisher_id',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
),
  'field_object_copyright_holder' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'settings' => array(
    'max_length' => '255',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_copyright_holder' => array(
            'value' => 'field_object_copyright_holder_value',
            'format' => 'field_object_copyright_holder_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_copyright_holder' => array(
            'value' => 'field_object_copyright_holder_value',
            'format' => 'field_object_copyright_holder_format',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_object_copyright_holder',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
),
  'field_object_credit_line' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'settings' => array(
    'max_length' => '255',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_credit_line' => array(
            'value' => 'field_object_credit_line_value',
            'format' => 'field_object_credit_line_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_credit_line' => array(
            'value' => 'field_object_credit_line_value',
            'format' => 'field_object_credit_line_format',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_object_credit_line',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
),
      'field_object_thumbnail_url' => array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'max_length' => '1000',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_thumbnail_url' => array(
            'value' => 'field_object_thumbnail_url_value',
            'format' => 'field_object_thumbnail_url_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_thumbnail_url' => array(
            'value' => 'field_object_thumbnail_url_value',
            'format' => 'field_object_thumbnail_url_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'field_name' => 'field_object_thumbnail_url',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '1000',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
),
      'field_object_link' => array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'max_length' => '1000',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_object_link' => array(
            'value' => 'field_object_link_value',
            'format' => 'field_object_link_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_object_link' => array(
            'value' => 'field_object_link_value',
            'format' => 'field_object_link_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'field_name' => 'field_object_link',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '1000',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'cg_object',
    ),
  ),
),
      
      /*
      'field_record_provider' => array(
  'entity_types' => array(),
  'foreign keys' => array(
    'nid' => array(
      'table' => 'node',
      'columns' => array(
        'nid' => 'nid',
      ),
    ),
  ),
  'indexes' => array(
    'nid' => array(
      'nid',
    ),
  ),
  'settings' => array(
    'referenceable_types' => array(
      'article' => 0,
      'external_link' => 0,
      'ir_event' => 0,
      'ir_organisation' => 0,
      'ir_person' => 0,
      'ir_place' => 0,
      'ir_subject' => 0,
      'ir_theme' => 0,
      'mol_decade_ct' => 0,
      'mol_home_page' => 0,
      'mol_media_record' => 0,
      'mol_object' => 0,
      'multichoice' => 0,
      'page' => 0,
      'quiz' => 0,
      'record_provider' => 'record_provider',
    ),
    'view' => array(
      'args' => array(),
      'display_name' => '',
      'view_name' => '',
    ),
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_record_provider' => array(
            'nid' => 'field_record_provider_nid',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_record_provider' => array(
            'nid' => 'field_record_provider_nid',
          ),
        ),
      ),
    ),
  ),
  'field_name' => 'field_record_provider',
  'type' => 'node_reference',
  'module' => 'node_reference',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'nid' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => FALSE,
    ),
  ),
  'bundles' => array(
    'node' => array(
      'mol_object',
    ),
  ),
),
       * 
       */
);
  
}

/**
 * Returns a structured array defining the instances for this content type.
 *
 * @return
 *  An associative array specifying the instances we wish to add to our new
 *  node type.
 */
function _get_installed_instances() {
  return array(
  'field_object_description' => array(
  'default_value' => NULL,
  'description' => "A project specific interpretive 'caption'. Max 150-170 words",
  'display' => array(
    'default' => array(
      'label' => 'above',
      'module' => 'text',
      'settings' => array(),
      'type' => 'text_default',
      'weight' => '0',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Description',
  'required' => 0,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'rows' => '5',
    ),
    'type' => 'text_textarea',
    'weight' => '-4',
  ),
  'field_name' => 'field_object_description',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
      
  'field_object_id' => array(
  'default_value' => NULL,
  'description' => 'Unique identifier of the object record from each institution. Institution specific prefix to be added in PNDS',
  'display' => array(
    'default' => array(
      'label' => 'above',
      'module' => 'text',
      'settings' => array(),
      'type' => 'text_default',
      'weight' => '2',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'ID no',
  'required' => 1,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'size' => '60',
    ),
    'type' => 'text_textfield',
    'weight' => '-3',
  ),
  'field_name' => 'field_object_id',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
      
  'field_object_production_date' => array(
  'default_value' => NULL,
  'description' => '',
  'display' => array(
    'default' => array(
      'label' => 'above',
      'module' => 'text',
      'settings' => array(),
      'type' => 'text_default',
      'weight' => '1',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Production Date',
  'required' => 0,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'size' => '60',
    ),
    'type' => 'text_textfield',
    'weight' => '-2',
  ),
  'field_name' => 'field_object_production_date',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
  'field_object_materials' => array(
  'default_value' => NULL,
  'description' => 'Materials from which the object is made',
  'display' => array(
    'default' => array(
      'label' => 'above',
      'module' => 'text',
      'settings' => array(),
      'type' => 'text_default',
      'weight' => '6',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Object Material',
  'required' => 0,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'size' => '60',
    ),
    'type' => 'text_textfield',
    'weight' => '-1',
  ),
  'field_name' => 'field_object_materials',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),   
  'field_object_size' => array(
  'default_value' => NULL,
  'description' => 'Measurements of the original resource',
  'display' => array(
    'default' => array(
      'label' => 'above',
      'module' => 'text',
      'settings' => array(),
      'type' => 'text_default',
      'weight' => '3',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Object Size',
  'required' => 0,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'size' => '60',
    ),
    'type' => 'text_textfield',
    'weight' => '0',
  ),
  'field_name' => 'field_object_size',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
      'field_object_maker' => array(
  'default_value' => NULL,
  'description' => 'Any individual or organisation responsible for creating the original resource.',
  'display' => array(
    'default' => array(
      'label' => 'above',
      'module' => 'text',
      'settings' => array(),
      'type' => 'text_default',
      'weight' => '4',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Maker',
  'required' => 0,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'size' => '60',
    ),
    'type' => 'text_textfield',
    'weight' => '1',
  ),
  'field_name' => 'field_object_maker',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
  'field_object_language' => array(
  'default_value' => NULL,
  'description' => 'A language of the intellectual content of the resource.',
  'display' => array(
    'default' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => '7',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Language',
  'required' => 0,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'size' => '60',
    ),
    'type' => 'text_textfield',
    'weight' => '2',
  ),
  'field_name' => 'field_object_language',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
  'field_object_publisher_id' => array(
  'default_value' => NULL,
  'description' => '',
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => '19',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Publisher',
  'required' => 0,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'size' => '60',
    ),
    'type' => 'text_textfield',
    'weight' => '3',
  ),
  'field_name' => 'field_object_publisher_id',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
      'field_object_copyright_holder' => array(
  'default_value' => NULL,
  'description' => 'The person or organisation that owns the copyright over the resource',
  'display' => array(
    'default' => array(
      'label' => 'above',
      'module' => 'text',
      'settings' => array(),
      'type' => 'text_default',
      'weight' => '5',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Copyright',
  'required' => 1,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'size' => '60',
    ),
    'type' => 'text_textfield',
    'weight' => '4',
  ),
  'field_name' => 'field_object_copyright_holder',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
  'field_object_credit_line' => array(
  'default_value' => NULL,
  'description' => 'Any special credit line requested by the copyright holder',
  'display' => array(
    'default' => array(
      'label' => 'above',
      'module' => 'text',
      'settings' => array(),
      'type' => 'text_default',
      'weight' => '8',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Credit',
  'required' => 0,
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'text',
    'settings' => array(
      'size' => '60',
    ),
    'type' => 'text_textfield',
    'weight' => '5',
  ),
  'field_name' => 'field_object_credit_line',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
      'field_object_thumbnail_url' => array(
  'label' => 'Thumbnail URL',
  'widget' => array(
    'weight' => '6',
    'type' => 'text_textfield',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'text_default',
      'settings' => array(),
      'module' => 'text',
      'weight' => 20,
    ),
    'teaser' => array(
      'type' => 'hidden',
      'label' => 'above',
      'settings' => array(),
      'weight' => 0,
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'field_name' => 'field_object_thumbnail_url',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
      'field_object_link' => array(
  'label' => 'Object Link',
  'widget' => array(
    'weight' => '7',
    'type' => 'text_textfield',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'text_processing' => '1',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'text_default',
      'settings' => array(),
      'module' => 'text',
      'weight' => 21,
    ),
    'teaser' => array(
      'type' => 'hidden',
      'label' => 'above',
      'settings' => array(),
      'weight' => 0,
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'field_name' => 'field_object_link',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
      /*
      'field_record_provider' => array(
  'default_value' => NULL,
  'description' => '',
  'display' => array(
    'default' => array(
      'label' => 'above',
      'module' => 'node_reference',
      'settings' => array(),
      'type' => 'node_reference_default',
      'weight' => '18',
    ),
    'teaser' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
  ),
  'label' => 'Record provided by',
  'required' => 0,
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'active' => 1,
    'module' => 'node_reference',
    'settings' => array(
      'autocomplete_match' => 'contains',
      'autocomplete_path' => 'node_reference/autocomplete',
      'size' => '60',
    ),
    'type' => 'node_reference_autocomplete',
    'weight' => '6',
  ),
  'field_name' => 'field_record_provider',
  'entity_type' => 'node',
  'bundle' => 'cg_object',
  'deleted' => '0',
),
      */
  );
}

?>
