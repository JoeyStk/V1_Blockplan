<?php 


function createsJSON(array $data) {
    var_dump($data);
    $path = __DIR__ . '/../jsons/';
    $json_content = json_encode($data);
    $filepath = $path . $data['name'] . '.json';
    if (file_put_contents($filepath, $json_content)) {
        echo 'successfully created JSON';
    } else {
        echo 'error creating JSON';
    }
}

function editsJSON(string $hash, array $data) {
    $path = __DIR__ . '/../jsons/';
    $filepath = $path . $hash . '.json';
    $content = file_get_contents($filepath);
    $content = json_decode($content);
    $data['hash'] = $content->hash;
    $data['name'] = $content->name;
    $json_content = json_encode($data);
    file_put_contents($filepath, $json_content);
}

function getsJSON($hash = null) {
    $path = __DIR__ . '/../jsons/';
    if ($hash != null) {
        //> ich will nur ein spezifisches
    } else {
        //> hol mir alle jsons
        $files = scandir($path);
        $contents = []; 
        foreach ($files as $file) {
            if(strlen($file) > 2) {
                $content = file_get_contents($path . $files[2]);
                array_push($contents, $content);
            }
        }
        return $contents;
    }
}