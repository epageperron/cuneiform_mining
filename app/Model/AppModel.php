<?php
// app/Model/AppModel.php
App::uses('Model', 'Model');
class AppModel extends Model {
    public $actsAs = array('Containable', 'Linkable.Linkable', 'Searchable');
}
?>
