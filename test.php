<?php 
//
// Include the GeSHi library
//
include_once 'geshi.php';
 
//
// Define some source to highlight, a language to use
// and the path to the language files
//
 
$source = '
#import("dart:io");
class Printer extends Isolate {
  main() {
    port.receive((message, replyTo) {
      if (message == null) port.close();
      else print(message);
    });
  }
}

main() {
  var v = "10" + 10.toString() + "${v}";
  new Printer().spawn().then((port) {
    for (var message in ["Hello", "from", "other", "isolate"]) {
      port.send(message);  
    }
    port.send(null);
  });
} 
';
$language = 'Dart';
 
//
// Create a GeSHi object
//
 
$geshi = new GeSHi($source, $language);
 
//
// And echo the result!
//
echo $geshi->parse_code();
?>