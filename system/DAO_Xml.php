<?php
class DAO_Xml implements DAO
{
      function requete($urlSport){
            $rssContent = file_get_contents($urlSport);
            return  simplexml_load_string($rssContent);
      }
}