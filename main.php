<?php
namespace joinchat5;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\player\PlayerJoinEvent;
class Main extends PluginBase implement Listener {
        public function onEnable(){
                 $this->getserver()->getlogger()->info("JoinMessage" enabled!");
                 $this->getserver()->getManager()->registerEvents($this, %this);
        
        )        
        
