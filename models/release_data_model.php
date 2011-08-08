<?php namespace melt;

class ReleaseDataModel extends core\SingletonModel {
    public $release_version = array('core\TextType', 64);
    public $release_date = array('core\DateType');
    public $expires = array('core\TimestampType');
    
    public static function get($for_update = false) {
        $release_data = parent::get($for_update);
        assert($release_data instanceof ReleaseDataModel);
        if (time() > $release_data->expires) {
            $repo_info = file_get_contents('https://github.com/api/v2/json/repos/show/melt/melt');
            $repo_info = json_decode($repo_info);
            if (is_object($repo_info)) {
                $release_data->release_date = \DateTime::createFromFormat("Y/m/d H:i:s O", $repo_info->repository->pushed_at);
                $tags_info = file_get_contents('https://github.com/api/v2/json/repos/show/melt/melt/tags');
                $tags_info = json_decode($tags_info);
                if (is_object($tags_info)) {
                    $tags = array();
                    foreach (get_object_vars($tags_info->tags) as $tag => $hash)
                        $tags[] = $tag;
                    usort($tags, function($a, $b) {
                        return version_compare($b, $a);
                    });
                    reset($tags);
                    $release_data->release_version = current($tags);
                }
            }
            // Cache strategy: once per hour.
            $release_data->expires = time() + 60 * 60;
            $release_data->store();
        }
        return $release_data;
    }
    
}
