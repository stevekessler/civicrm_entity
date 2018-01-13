<?php

namespace Drupal\civicrm_entity;

/**
 * Defines supported entities.
 *
 * See `$civicrm_entity_info['civicrm_event']` for implemented usage. This might
 * not be required. Perhaps we just implement entity class definitions using
 * this information. Providing entity type derivatives seems hard, and possibly
 * overhead when we just can provide the classes directly.
 *
 * Entities could just define the `civicrm_entity` key to define their support
 * and what CiviCRM entity they map to.
 *
 * Ported for now and used in civicrm_entity_entity_type_build()
 *
 * @see civicrm_entity_entity_type_build()
 */
final class SupportedEntities {

  public static function getInfo() {
    $civicrm_entity_info = [];
    $civicrm_entity_info['civicrm_activity'] = [
      'civicrm entity name' => 'activity',
      'label property' => 'subject',
      'permissions' => [
        'view' => ['view all activities'],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => ['delete activities'],
      ],
    ];
    $civicrm_entity_info['civicrm_action_schedule'] = [
      'civicrm entity name' => 'action_schedule',
      'label property' => 'name',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_address'] = [
      'civicrm entity name' => 'address',
      'label property' => 'name',
      'permissions' => [
        'view' => ['view all contacts'],
        'edit' => ['edit all contacts'],
        'update' => ['edit all contacts'],
        'create' => ['edit all contacts'],
        'delete' => ['delete contacts'],
      ],
    ];
    $civicrm_entity_info['civicrm_campaign'] = [
      'civicrm entity name' => 'campaign',
      'label property' => 'title',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_case'] = [
      'civicrm entity name' => 'case',
      'label property' => 'subject',
      'permissions' => [
        'view' => ['access all cases and activities'],
        'edit' => ['access all cases and activities'],
        'update' => ['access all cases and activities'],
        'create' => ['add cases', 'access all cases and activities'],
        'delete' => [
          'delete in CiviCase',
          'access all cases and activities',
        ],
      ],
    ];
    $civicrm_entity_info['civicrm_contact'] = [
      'civicrm entity name' => 'contact',
      'label property' => 'display_name',
      'permissions' => [
        'view' => ['view all contacts'],
        'edit' => ['edit all contacts'],
        'update' => ['edit all contacts'],
        'create' => ['edit all contacts'],
        'delete' => ['delete contacts'],
      ],
    ];
    $civicrm_entity_info['civicrm_contribution'] = [
      'civicrm entity name' => 'contribution',
      'label property' => 'source',
      'permissions' => [
        'view' => ['access CiviContribute', 'administer CiviCRM'],
        'edit' => ['edit contributions', 'administer CiviCRM'],
        'update' => ['edit contributions', 'administer CiviCRM'],
        'create' => ['edit contributions', 'administer CiviCRM'],
        'delete' => [
          'edit contributions',
          'delete in CiviContribute',
          'administer CiviCRM',
        ],
      ],
    ];
    $civicrm_entity_info['civicrm_contribution_recur'] = [
      'civicrm entity name' => 'contribution_recur',
      'label property' => 'id',
      'permissions' => [
        'view' => ['access CiviContribute', 'administer CiviCRM'],
        'edit' => ['edit contributions', 'administer CiviCRM'],
        'update' => ['edit contributions', 'administer CiviCRM'],
        'create' => ['edit contributions', 'administer CiviCRM'],
        'delete' => [
          'edit contributions',
          'delete in CiviContribute',
          'administer CiviCRM',
        ],
      ],
    ];
    $civicrm_entity_info['civicrm_contribution_page'] = [
      'civicrm entity name' => 'contribution_page',
      'label property' => 'title',
      'permissions' => [
        'view' => ['make online contributions'],
        'edit' => ['access CiviContribute', 'administer CiviCRM'],
        'update' => ['access CiviContribute', 'administer CiviCRM'],
        'create' => ['access CiviContribute', 'administer CiviCRM'],
        'delete' => ['access CiviContribute', 'administer CiviCRM'],
      ],
    ];
    $civicrm_entity_info['civicrm_country'] = [
      'civicrm entity name' => 'country',
      'label property' => 'name',
      'permissions' => [
        'view' => ['view all contacts'],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_email'] = [
      'civicrm entity name' => 'email',
      'label property' => 'email',
      'permissions' => [
        'view' => ['view all contacts'],
        'edit' => ['edit all contacts'],
        'update' => ['edit all contacts'],
        'create' => ['edit all contacts'],
        'delete' => ['delete contacts'],
      ],
    ];
    $civicrm_entity_info['civicrm_entity_tag'] = [
      'civicrm entity name' => 'entity_tag',
      'label property' => 'tag_id',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_entity_financial_trxn'] = [
      'civicrm entity name' => 'entity_financial_trxn',
      'label property' => 'id',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_financial_account'] = [
      'civicrm entity name' => 'financial_account',
      'label property' => 'name',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_financial_trxn'] = [
      'civicrm entity name' => 'financial_trxn',
      'label property' => 'id',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    //dirty check for whether financialType exists
    if (!method_exists('CRM_Contribute_PseudoConstant', 'contributionType')) {
      $civicrm_entity_info['civicrm_financial_type'] = [
        'civicrm entity name' => 'financial_type',
        'label property' => 'description',
        'permissions' => [
          'view' => ['access CiviContribute', 'administer CiviCRM'],
          'edit' => ['access CiviContribute', 'administer CiviCRM'],
          'update' => ['access CiviContribute', 'administer CiviCRM'],
          'create' => ['access CiviContribute', 'administer CiviCRM'],
          'delete' => ['delete in CiviContribute', 'administer CiviCRM'],
        ],
      ];
    }
    $civicrm_entity_info['civicrm_event'] = [
      'civicrm entity name' => 'event',
      'label property' => 'title',
      'permissions' => [
        'view' => ['view event info'],
        'edit' => ['edit all events'],
        'update' => ['edit all events'],
        'create' => ['edit all events'],
        'delete' => ['edit all events', 'delete in CiviEvent'],
      ],
    ];
    $civicrm_entity_info['civicrm_group'] = [
      'civicrm entity name' => 'group',
      'label property' => 'name',
      'permissions' => [
        'view' => ['edit groups'],
        'edit' => ['edit groups'],
        'update' => ['edit groups'],
        'create' => ['edit groups'],
        'delete' => ['edit groups', 'administer CiviCRM'],
      ],
    ];
    $civicrm_entity_info['civicrm_grant'] = [
      'civicrm entity name' => 'grant',
      'label property' => '',
      'permissions' => [
        'view' => ['access CiviGrant', 'administer CiviCRM'],
        'edit' => ['access CiviGrant', 'edit grants'],
        'update' => ['access CiviGrant', 'edit grants'],
        'create' => ['access CiviGrant', 'edit grants'],
        'delete' => ['access CiviGrant', 'edit grants'],
      ],
    ];
    $civicrm_entity_info['civicrm_im'] = [
      'civicrm entity name' => 'im',
      'label property' => 'name',
      'permissions' => [
        'view' => ['view all contacts'],
        'edit' => ['edit all contacts'],
        'update' => ['edit all contacts'],
        'create' => ['edit all contacts'],
        'delete' => ['delete contacts'],
      ],
    ];
    $civicrm_entity_info['civicrm_line_item'] = [
      'civicrm entity name' => 'line_item',
      'label property' => 'label',
      'permissions' => [
        'view' => ['administer CiviCRM'],
        'edit' => ['administer CiviCRM'],
        'update' => ['administer CiviCRM'],
        'create' => ['administer CiviCRM'],
        'delete' => ['administer CiviCRM'],
      ],
    ];
    $civicrm_entity_info['civicrm_loc_block'] = [
      'civicrm entity name' => 'loc_block',
      'label property' => '',
      'permissions' => [
        'view' => ['administer CiviCRM'],
        'edit' => ['administer CiviCRM'],
        'update' => ['administer CiviCRM'],
        'create' => ['administer CiviCRM'],
        'delete' => ['administer CiviCRM'],
      ],
    ];
    $civicrm_entity_info['civicrm_membership'] = [
      'civicrm entity name' => 'membership',
      'permissions' => [
        'view' => ['access CiviMember'],
        'edit' => ['edit memberships', 'access CiviMember'],
        'update' => ['edit memberships', 'access CiviMember'],
        'create' => ['edit memberships', 'access CiviMember'],
        'delete' => ['delete in CiviMember', 'access CiviMember'],
      ],
    ];
    $civicrm_entity_info['civicrm_membership_payment'] = [
      'civicrm entity name' => 'membership_payment',
      'permissions' => [
        'view' => ['access CiviMember', 'access CiviContribute'],
        'edit' => ['access CiviMember', 'access CiviContribute'],
        'update' => ['access CiviMember', 'access CiviContribute'],
        'create' => ['access CiviMember', 'access CiviContribute'],
        'delete' => [
          'delete in CiviMember',
          'access CiviMember',
          'access CiviContribute',
        ],
      ],
    ];
    $civicrm_entity_info['civicrm_membership_type'] = [
      'civicrm entity name' => 'membership_type',
      'label property' => 'name',
      'permissions' => [
        'view' => ['access CiviMember'],
        'edit' => ['access CiviMember', 'administer CiviCRM'],
        'update' => ['access CiviMember', 'administer CiviCRM'],
        'create' => ['access CiviMember', 'administer CiviCRM'],
        'delete' => [
          'delete in CiviMember',
          'access CiviMember',
          'administer CiviCRM',
        ],
      ],
    ];
    $civicrm_entity_info['civicrm_note'] = [
      'civicrm entity name' => 'note',
      'label property' => 'subject',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_participant'] = [
      'civicrm entity name' => 'participant',
      'label property' => 'source',
      'permissions' => [
        'view' => ['view event participants'],
        'edit' => ['edit event participants', 'access CiviEvent'],
        'update' => ['edit event participants', 'access CiviEvent'],
        'create' => ['edit event participants', 'access CiviEvent'],
        'delete' => ['edit event participants', 'access CiviEvent'],
      ],
    ];
    $civicrm_entity_info['civicrm_participant_status_type'] = [
      'civicrm entity name' => 'participant_status_type',
      'label property' => 'label',
      'permissions' => [
        'view' => ['view event participants'],
        'edit' => ['edit event participants', 'access CiviEvent'],
        'update' => ['edit event participants', 'access CiviEvent'],
        'create' => ['edit event participants', 'access CiviEvent'],
        'delete' => ['edit event participants', 'access CiviEvent'],
      ],
    ];
    $civicrm_entity_info['civicrm_participant_payment'] = [
      'civicrm entity name' => 'participant_payment',
      'label property' => 'id',
      'permissions' => [
        'view' => ['administer CiviCRM'],
        'edit' => ['administer CiviCRM'],
        'update' => ['administer CiviCRM'],
        'create' => ['administer CiviCRM'],
        'delete' => ['administer CiviCRM'],
      ],
    ];
    $civicrm_entity_info['civicrm_payment_processor'] = [
      'civicrm entity name' => 'payment_processor',
      'label property' => 'name',
      'permissions' => [
        'view' => ['administer CiviCRM'],
        'edit' => ['administer CiviCRM'],
        'update' => ['administer CiviCRM'],
        'create' => ['administer CiviCRM'],
        'delete' => ['administer CiviCRM'],
      ],
    ];
    $civicrm_entity_info['civicrm_payment_processor_type'] = [
      'civicrm entity name' => 'payment_processor_type',
      'label property' => 'title',
      'permissions' => [
        'view' => ['administer CiviCRM'],
        'edit' => ['administer CiviCRM'],
        'update' => ['administer CiviCRM'],
        'create' => ['administer CiviCRM'],
        'delete' => ['administer CiviCRM'],
      ],
    ];
    $civicrm_entity_info['civicrm_phone'] = [
      'civicrm entity name' => 'phone',
      'label property' => 'phone',
      'permissions' => [
        'view' => ['view all contacts'],
        'edit' => ['edit all contacts'],
        'update' => ['edit all contacts'],
        'create' => ['edit all contacts'],
        'delete' => ['delete contacts'],
      ],
    ];
    $civicrm_entity_info['civicrm_pledge'] = [
      'civicrm entity name' => 'pledge',
      'permissions' => [
        'view' => ['access CiviPledge'],
        'edit' => ['edit pledges'],
        'update' => ['edit pledges'],
        'create' => ['edit pledges'],
        'delete' => ['edit pledges', 'administer CiviCRM'],
      ],
    ];
    $civicrm_entity_info['civicrm_pledge_payment'] = [
      'civicrm entity name' => 'pledge_payment',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_price_set'] = [
      'civicrm entity name' => 'price_set',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_price_field'] = [
      'civicrm entity name' => 'price_field',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_price_field_value'] = [
      'civicrm entity name' => 'price_field_value',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_recurring_entity'] = [
      'civicrm entity name' => 'recurring_entity',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_relationship'] = [
      'civicrm entity name' => 'relationship',
      'label property' => 'description',
      'permissions' => [
        'view' => ['view all contacts'],
        'edit' => ['edit all contacts'],
        'update' => ['edit all contacts'],
        'create' => ['edit all contacts'],
        'delete' => ['edit all contacts'],
      ],
    ];
    $civicrm_entity_info['civicrm_relationship_type'] = [
      'civicrm entity name' => 'relationship_type',
      'label property' => 'description',
      'permissions' => [
        'view' => ['administer CiviCRM'],
        'edit' => ['administer CiviCRM'],
        'update' => ['administer CiviCRM'],
        'create' => ['administer CiviCRM'],
        'delete' => ['administer CiviCRM'],
      ],
    ];
    $civicrm_entity_info['civicrm_survey'] = [
      'civicrm entity name' => 'survey',
      'label property' => 'title',
      'permissions' => [
        'view' => ['administer CiviCampaign'],
        'edit' => ['administer CiviCampaign'],
        'update' => ['administer CiviCampaign'],
        'create' => ['administer CiviCampaign'],
        'delete' => ['administer CiviCampaign'],
      ],
    ];
    $civicrm_entity_info['civicrm_tag'] = [
      'civicrm entity name' => 'tag',
      'label property' => 'name',
      'permissions' => [
        'view' => ['administer Tagsets'],
        'edit' => ['administer Tagsets'],
        'update' => ['administer Tagsets'],
        'create' => ['administer Tagsets'],
        'delete' => ['administer Tagsets'],
      ],
    ];
    $civicrm_entity_info['civicrm_custom_field'] = [
      'civicrm entity name' => 'custom_field',
      'label property' => 'label',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_custom_group'] = [
      'civicrm entity name' => 'custom_group',
      'label property' => 'title',
      'permissions' => [
        'view' => [],
        'edit' => [],
        'update' => [],
        'create' => [],
        'delete' => [],
      ],
    ];
    $civicrm_entity_info['civicrm_website'] = [
      'civicrm entity name' => 'website',
      'label property' => 'url',
      'permissions' => [
        'view' => ['view all contacts'],
        'edit' => ['edit all contacts'],
        'update' => ['edit all contacts'],
        'create' => ['edit all contacts'],
        'delete' => ['delete contacts'],
      ],
    ];
    return $civicrm_entity_info;
  }

}
