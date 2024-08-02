<?php
class DAO_Xml implements DAO
{
      function requete($url){
            
            $rssContent = file_get_contents($url);
            $rssContent = str_replace('media:content','mediaContent',$rssContent);
          return $this->xmlToArray(simplexml_load_string($rssContent,'SimpleXMLElement', LIBXML_NOCDATA));
      }
      
      function xmlstring2array($string)
      {
          $xml   = simplexml_load_string($string, 'SimpleXMLElement', LIBXML_NOCDATA);
      
          $array = json_decode(json_encode($xml), TRUE);
      
          return $array;
      }
      
      function xmlToArray($xmlObject, $out = array()) {
            foreach ((array) $xmlObject as $index => $node) {
                  $out[$index] = (is_object($node) || is_array($node)) ? $this->xmlToArray($node) : $node;
            }
            return $out;
      }

}