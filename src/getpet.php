<?PHP
/**
 * Pet Profiles API
 * 
 * getpet.php is a web service that will respond to GET requests. 
 * 
 * Web Service Details: 
 *  Required GET 
 */

$pets = [
    ["name" => "Kyra",
        "owner"=>"Kelsey Knappenberger", 
        "image" => "imgs/Kyra.jpg",
        "fact" => "Kyra has been featured on Etown's newspaper The Etownian twice. 
        Both times the authors have mentioned her love for hiding."],
    ["name"=> "Spencer", 
        "owner"=>"Emma Shreiner",   
        "image" => "imgs/Spencer.png", 
        "fact" => "TBA"],
    ["name"=> "Angel",
        "owner"=>"Lauren Closs",  
        "image" => "imgs/Angel.png",
        "fact" => "Her owner, Lauren, says Angel is a very sweet, loving, and weird cat.
    She can also be a little crazy sometimes."],
    ["name"=> "Remus", 
        "owner"=>"Olivyah Vanek",
        "image" => "imgs/remus.JPEG",
        "fact" => "Remus loves to go on camping trips with his owners, and his 
        favorite word is walk."],
    ["name"=> "Bubba", 
        "owner"=>"Olivyah Vanek",
        "image" => "imgs/bubba.JPEG",
        "fact" => "Bubba loves cuddles and playdates with his neighborhood 
        furry friends"],
    ["name"=> "Moose", 
        "owner"=>"Olivyah Vanek",
        "image" => "imgs/moose.jpg",
        "fact" => "Moose loves going on hikes with his owners and sleeping in 
        their bed with them"],
];

if(isset($_GET["name"])) {
    if($_GET["name"] == "all") {
        echo json_encode($pets);
    }
    else {
        $found = false;
        foreach($pets as $petData) {
            if($petData["name"] == $_GET["name"]) {
                echo json_encode($petData);
                $found = true;
                break;
            }
        }
        if(!$found)
            output_error("That pet was not found!");
    }

}
else if(isset($_GET["random"])) {
    $len = count($pets);
    $petNum = rand (0, $len-1);
    echo json_encode($pets[$petNum]);
} 


function output_error($msg) {
    header("HTTP/1.1 400 Invalid Request");
    header("Content-type: text/plain");
    echo $msg;
  }
?>