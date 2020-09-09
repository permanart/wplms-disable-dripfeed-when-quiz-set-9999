add_filter('vibe_total_drip_duration','total_drip_duration',11,4);
function total_drip_duration($value,$course_id,$unit_id,$pre_unit_id){
    $course_drip_duration_type = get_post_meta($course_id,'vibe_course_drip_duration_type',true);
    
    if(vibe_validate($course_drip_duration_type)){ //unit duration
        $unit_duration = get_post_meta($pre_unit_id,'vibe_duration',true);
        $unit_duration_parameter = apply_filters('vibe_unit_duration_parameter',60,$pre_unit_id);
        if(intval($unit_duration) >= 9999){
            $value = 0;
        }
    }
    return $value;
}
