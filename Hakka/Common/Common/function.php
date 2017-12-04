<?php

/**
 * 输出json
 * @param type $status
 * @param type $data
 * @param type $url
 */
function get_op_put($status, $data, $url = null) {
    $array = array(
        "status" => $status,
        "msg" => $data,
        "data" => $url
    );
    echo json_encode($array);
    exit;
}

/**
 * 输出数组
 * @param type $status
 * @param type $data
 * @param type $url
 */
function get_op_res($status, $data, $url = null) {
    $array = array(
        "status" => $status,
        "msg" => $data,
        "data" => $url
    );
    return $array;
}

/**
 * array_column函数兼容方法
 * @param type $input
 * @param type $columnKey
 * @param type $indexKey
 * @return type
 */
function i_array_column($input, $columnKey, $indexKey = null) {
    if (!function_exists('array_column')) {
        $columnKeyIsNumber = (is_numeric($columnKey)) ? true : false;
        $indexKeyIsNull = (is_null($indexKey)) ? true : false;
        $indexKeyIsNumber = (is_numeric($indexKey)) ? true : false;
        $result = array();
        foreach ((array) $input as $key => $row) {
            if ($columnKeyIsNumber) {
                $tmp = array_slice($row, $columnKey, 1);
                $tmp = (is_array($tmp) && !empty($tmp)) ? current($tmp) : null;
            } else {
                $tmp = isset($row[$columnKey]) ? $row[$columnKey] : null;
            }
            if (!$indexKeyIsNull) {
                if ($indexKeyIsNumber) {
                    $key = array_slice($row, $indexKey, 1);
                    $key = (is_array($key) && !empty($key)) ? current($key) : null;
                    $key = is_null($key) ? 0 : $key;
                } else {
                    $key = isset($row[$indexKey]) ? $row[$indexKey] : 0;
                }
            }
            $result[$key] = $tmp;
        }
        return $result;
    } else {
        return array_column($input, $columnKey, $indexKey);
    }
}

/**
 * CURL扩展方法
 * @param type $url
 * @param type $params
 * @return type
 */
function poCurl($url, $params) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

/**
 * 上传文件
 * @param type $file
 * @return boolean
 */
function uploadFile($file) {
    $upload = new \Think\Upload();
    $upload->maxSize = 0;
    $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
    $upload->rootPath = './././Public/uploads/' . $file . "/";
    $upload->savePath = '';
    $upload->autoSub = false;
    $info = $upload->upload();
    if (!$info) {
        return false;
    }
    return $info;
}

########################私有方法####################

/*
 * XML文件转换为数组
 */
function xmlToArray($xml)
{
    //禁止引用外部xml实体
    libxml_disable_entity_loader(true);
    $values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
    return $values;
}

/**
 *   实现中文字串截取无乱码的方法
 */
function getSubstr($string, $start, $length) {
    if(mb_strlen($string,'utf-8')>$length){
        $str = mb_substr($string, $start, $length,'utf-8');
        return $str.'...';
    }else{
        return $string;
    }
}


/*
 * 上传文件到七牛云
 */

function uploadTicketFile(){
    $setting = C('UPLOAD_FILE_QINIU');
    $Upload = new \Think\Upload($setting);
    $info = $Upload->upload($_FILES);
    if(!$info){
        return false;
    }
    return $info;
    exit;
}