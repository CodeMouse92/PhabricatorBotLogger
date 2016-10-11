<?php

/**
 * Logs IRC room to a Phabricator chatroom.
 * by Jason C. McDonald
 * Version 1.0
 */
final class PhabricatorBotLogger extends PhabricatorBotHandler{ 

  public function receiveMessage(PhabricatorBotMessage $message) {
    if ($message->getCommand() == 'MESSAGE') {
      $message_target = $message->getTarget();
   
      if ($message_target->isPublic()) {
      $message_body = $message->getBody();
      $message_sender = $message->getSender()->getName();
  
      $log_message = $message_sender.": ".$message_body;
      switch($message_target->getName()) {
        // Replace <IRC ROOM NAME> with the name of your IRC room.
        // i.e. `case '#mousepawgames':`
        case '<IRC ROOM NAME>':
          $this->getConduit()->callMethodSynchronous('conpherence.updatethread', 
            array(
              // Replace <CONPHERENCE ROOM NUMBER> with the number for the Conpherence room to log to.
              // i.e. `'id' => 49`
              'id' => <CONPHERENCE ROOM NUMBER>,
              'message' => $log_message,
            ));
          break;
          // Add additional cases for each room you want to monitor.
        }
      }
    }
  }
}

