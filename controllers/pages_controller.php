<?php namespace melt;

class PagesController extends AppController {

    function index(){
        $this->version = $this->getMeltVersion();        
        $this->pushed_at = $this->getMeltPushDate();
    }
    
    private function getMeltPushDate(){
        $data = 'https://github.com/api/v2/json/repos/show/melt/melt/'; 
        $ch = curl_init($data);
        // Execute 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        $this->buffer = json_decode(curl_exec($ch),true);
        return date( "F jS, Y", time($this->buffer["repository"]["pushed_at"]) );
        // Close handle 
        curl_close($ch);     
    }
    
    private function getMeltVersion() {
        $data = 'https://github.com/api/v2/json/repos/show/melt/melt/tags'; 
        $ch = curl_init($data);
        // Execute 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        $this->buffer = json_decode(curl_exec($ch),true);
        return max( array_keys($this->buffer["tags"]) );
        // Close handle 
        curl_close($ch); 
    }
    
    function license(){}
    
    function team(){}
    
}

?>
