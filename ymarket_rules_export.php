<?php
/**
 * Rules for bulk operations.
 * This rules allow to publish/unpublish nodes for yandex.market.
*/
array (
  'rule_sets' =>
  array (
    'rules_ymarket_publish' =>
    array (
      'arguments' =>
      array (
        'node' =>
        array (
          'label' => 'Содержимое',
          'type' => 'node',
        ),
      ),
      'label' => 'Опубликовать в Яндекс.Маркете',
      'status' => 'custom',
      'categories' =>
      array (
        0 => 'admin_content',
      ),
    ),
    'rules_ymarket_unpublish' =>
    array (
      'arguments' =>
      array (
        'node' =>
        array (
          'label' => 'Содержимое',
          'type' => 'node',
        ),
      ),
      'label' => 'Снять с публикации в Яндекс.Маркете',
      'status' => 'custom',
      'categories' =>
      array (
        0 => 'admin_content',
      ),
    ),
  ),
  'rules' =>
  array (
    'rules_r_ymarket_publish' =>
    array (
      '#type' => 'rule',
      '#set' => 'rules_ymarket_publish',
      '#label' => 'Публикация в маркет',
      '#active' => 1,
      '#weight' => '0',
      '#categories' =>
      array (
      ),
      '#status' => 'custom',
      '#conditions' =>
      array (
        0 =>
        array (
          '#weight' => 0,
          0 =>
          array (
            '#weight' => 0,
            '#type' => 'condition',
            '#settings' =>
            array (
              'field_name' => 'ymarket',
              '#argument map' =>
              array (
                'node' => 'node',
              ),
              'value' =>
              array (
                0 =>
                array (
                  'value' => 0,
                ),
              ),
              'code' => '',
            ),
            '#name' => 'content_rules_field_has_value',
            '#info' =>
            array (
              'label' => 'ymarket_is_off',
              'label callback' => false,
              'arguments' =>
              array (
                'node' =>
                array (
                  'type' => 'node',
                  'label' => 'Содержимое',
                ),
              ),
              'eval input' =>
              array (
                0 => 'code',
              ),
              'module' => 'CCK',
            ),
          ),
          '#type' => 'OR',
          1 =>
          array (
            '#type' => 'condition',
            '#settings' =>
            array (
              'field_name' => 'ymarket',
              '#argument map' =>
              array (
                'node' => 'node',
              ),
              'value' =>
              array (
                0 =>
                array (
                  'value' => 1,
                ),
              ),
              'code' => '',
            ),
            '#name' => 'content_rules_field_has_value',
            '#info' =>
            array (
              'label' => 'ymarket_not_empty',
              'label callback' => false,
              'arguments' =>
              array (
                'node' =>
                array (
                  'type' => 'node',
                  'label' => 'Содержимое',
                ),
              ),
              'eval input' =>
              array (
                0 => 'code',
              ),
              'module' => 'CCK',
            ),
            '#weight' => 0,
          ),
        ),
      ),
      '#actions' =>
      array (
        2 =>
        array (
          '#type' => 'action',
          '#settings' =>
          array (
            'field_name' => 'ymarket',
            '#argument map' =>
            array (
              'node' => 'node',
            ),
            'value' =>
            array (
              0 =>
              array (
                'value' => 1,
              ),
            ),
            'code' => '',
          ),
          '#name' => 'content_rules_action_populate_field',
          '#info' =>
          array (
            'label' => 'Populate Содержимое\'s field \'ymarket\'',
            'arguments' =>
            array (
              'node' =>
              array (
                'type' => 'node',
                'label' => 'Содержимое',
              ),
            ),
            'eval input' =>
            array (
              0 => 'code',
            ),
            'module' => 'CCK',
          ),
          '#weight' => 0,
        ),
      ),
      '#version' => 6003,
    ),
    'rules_r_ymarket_unpublish' =>
    array (
      '#type' => 'rule',
      '#set' => 'rules_ymarket_unpublish',
      '#label' => 'Снять с публикации в Яндекс.Маркете',
      '#active' => 1,
      '#weight' => '0',
      '#categories' =>
      array (
      ),
      '#status' => 'custom',
      '#conditions' =>
      array (
        0 =>
        array (
          '#weight' => 0,
          0 =>
          array (
            '#weight' => 0,
            '#type' => 'condition',
            '#settings' =>
            array (
              'field_name' => 'ymarket',
              '#argument map' =>
              array (
                'node' => 'node',
              ),
              'value' =>
              array (
                0 =>
                array (
                  'value' => 0,
                ),
              ),
              'code' => '',
            ),
            '#name' => 'content_rules_field_has_value',
            '#info' =>
            array (
              'label' => 'ymarket_is_off',
              'label callback' => false,
              'arguments' =>
              array (
                'node' =>
                array (
                  'type' => 'node',
                  'label' => 'Содержимое',
                ),
              ),
              'eval input' =>
              array (
                0 => 'code',
              ),
              'module' => 'CCK',
            ),
          ),
          '#type' => 'OR',
          1 =>
          array (
            '#type' => 'condition',
            '#settings' =>
            array (
              'field_name' => 'ymarket',
              '#argument map' =>
              array (
                'node' => 'node',
              ),
              'value' =>
              array (
                0 =>
                array (
                  'value' => 1,
                ),
              ),
              'code' => '',
            ),
            '#name' => 'content_rules_field_has_value',
            '#info' =>
            array (
              'label' => 'ymarket_not_empty',
              'label callback' => false,
              'arguments' =>
              array (
                'node' =>
                array (
                  'type' => 'node',
                  'label' => 'Содержимое',
                ),
              ),
              'eval input' =>
              array (
                0 => 'code',
              ),
              'module' => 'CCK',
            ),
            '#weight' => 0,
          ),
        ),
      ),
      '#actions' =>
      array (
        0 =>
        array (
          '#weight' => 0,
          '#info' =>
          array (
            'label' => 'Populate Содержимое\'s field \'ymarket\'',
            'arguments' =>
            array (
              'node' =>
              array (
                'type' => 'node',
                'label' => 'Содержимое',
              ),
            ),
            'eval input' =>
            array (
              0 => 'code',
              1 => 'value|0|value',
            ),
            'module' => 'CCK',
          ),
          '#name' => 'content_rules_action_populate_field',
          '#settings' =>
          array (
            'field_name' => 'ymarket',
            '#argument map' =>
            array (
              'node' => 'node',
            ),
            'value' =>
            array (
              0 =>
              array (
                'value' => '',
              ),
            ),
            'code' => '',
          ),
          '#type' => 'action',
        ),
      ),
      '#version' => 6003,
    ),
  ),
)
?>
