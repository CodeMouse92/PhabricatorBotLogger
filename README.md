# Phabricator Bot Logger

This is a simple plugin to log an IRC channel to a Phabricator Conpherence chatroom using the Phabricator chat bot (Phabot).

## Installation

1. Place `PhabricatorBotLogger.php` in the `src/extensions` directory of your Phabricator instance.

2. Modify `PhabricatorBotLogger.php`

3. Add `PhabricatorBotLogger` to the `"handlers"` array in your chatbot configuration file, usually located in the `resources/chatbot` directory.

3. Start/restart the chat bot.

## Upcoming Features

I plan to add some additional features in future versions, including...

- Load IRC channel and Conpherence room from a configuration file, instead of hardcoding.
- Control logging behavior from the IRC room.
- Add some additional, configurable output features (i.e. timestamps).
