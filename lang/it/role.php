<?php return array (
  'resources' => 'Risorse',
  'pages' => 'Pagine',
  'widgets' => 'Widgets',
  'navigation' => 
  array (
    'name' => 'Ruolo',
    'plural' => 'Ruoli',
    'group' => 
    array (
      'name' => 'Gestione Utenti',
      'description' => 'Gestione dei ruoli del sistema',
    ),
    'label' => 'role',
    'sort' => 99,
    'icon' => 'user-user-role',
  ),
  'fields' => 
  array (
    'name' => 
    array (
      'label' => 'Nome',
    ),
    'guard_name' => 
    array (
      'label' => 'Guard',
    ),
    'permissions' => 'Permessi',
    'updated_at' => 'Aggiornato il',
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'select_all' => 
    array (
      'name' => 'Seleziona Tutti',
      'message' => '',
    ),
    'team' => 
    array (
      'name' => 
      array (
        'label' => 'team.name',
      ),
    ),
    'detach' => 
    array (
      'label' => 'detach',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'team_id' => 
    array (
      'label' => 'team_id',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
    'recordId' => 
    array (
      'label' => 'recordId',
    ),
    'attach' => 
    array (
      'label' => 'attach',
    ),
    'id' => 
    array (
      'label' => 'id',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'view' => 
    array (
      'label' => 'view',
    ),
    'create' => 
    array (
      'label' => 'create',
    ),
  ),
  'actions' => 
  array (
    'import' => 
    array (
      'fields' => 
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' => 
    array (
      'filename_prefix' => 'Aree al',
      'columns' => 
      array (
        'name' => 'Nome area',
        'parent_name' => 'Nome area livello superiore',
      ),
    ),
  ),
  'plural' => 
  array (
    'model' => 
    array (
      'label' => 'role.plural.model',
    ),
  ),
);