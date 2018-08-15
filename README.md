# Phabricator Bot Logger

This is a simple plugin to log an IRC channel to a Phabricator Conpherence chatroom using the Phabricator chat bot (Phabot).

## NOTICE

This project has been discontinued, due to Phabricator's Phabot being deprecated and removed by Phacility for security reasons. In other words, this has no purpose anymore. (Thanks for the memories and all that.)

If you're still using Phabot by some combination of Git-archaeology and security-scoffing, you're welcome to use this as is; however, it is STRONGLY DISCOURAGED that you use Phabot. I'm not liable for any consequences of your continued use of Phabricator Phabot or this plugin.

## Installation

1. Place `PhabricatorBotLogger.php` in the `src/extensions` directory of your Phabricator instance.

2. Modify `PhabricatorBotLogger.php`

3. Add `PhabricatorBotLogger` to the `"handlers"` array in your chatbot configuration file, usually located in the `resources/chatbot` directory.

3. Start/restart the chat bot.
