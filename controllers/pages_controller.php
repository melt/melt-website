<?php namespace melt;

class PagesController extends AppController {

    function index() {
        $release_data = ReleaseDataModel::get();
        $this->version = $release_data->release_version;
        $this->pushed_at = $release_data->release_date;
    }
    
    function license(){}
    
    function team(){}
    
}

?>
